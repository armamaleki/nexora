<?php

namespace App\Http\Controllers\Dahsboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Role\StoreRoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Throwable;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::query()
            ->withCount(['permissions', 'users'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();
        return view('dashboard.role.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::query()
            ->where('guard_name', 'web')
            ->orderBy('name')
            ->get()
            ->groupBy(function ($permission) {
                return explode('.', $permission->name)[0];
            });

        return view('dashboard.role.create', compact('permissions'));
    }

    public function store(StoreRoleRequest $request)
    {
        try {
            $validated = $request->validated();

            DB::transaction(function () use ($validated) {
                $role = Role::create([
                    'name' => $validated['name'],
                    'guard_name' => 'web',
                ]);

                $role->syncPermissions($validated['permissions'] ?? []);
            });

            return redirect()
                ->route('dashboard.role.index')
                ->with('success', 'نقش جدید با موفقیت ایجاد شد.');

        } catch (Throwable $e) {
            Log::error('Role creation failed', [
                'user_id' => auth()->id(),
                'role_name' => $request->input('name'),
                'error' => $e->getMessage(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'هنگام ایجاد نقش مشکلی رخ داد. لطفاً دوباره تلاش کنید.');
        }
    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
