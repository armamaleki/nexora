<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $guard = 'web';

        // پاک کردن کش دسترسی‌ها
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        DB::transaction(function () use ($guard) {

            /*
            |--------------------------------------------------------------------------
            | Permissions
            |--------------------------------------------------------------------------
            */

            $modules = [
                'dashboard' => ['view'],

                'contacts' => [
                    'view', 'create', 'edit', 'delete', 'export',
                ],

                'companies' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'leads' => [
                    'view', 'create', 'edit', 'delete', 'convert',
                ],

                'deals' => [
                    'view', 'create', 'edit', 'delete', 'change-status',
                ],

                'pipelines' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'tasks' => [
                    'view', 'create', 'edit', 'delete', 'assign',
                ],

                'calendar' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'activities' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'notes' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'reports' => [
                    'view', 'export',
                ],

                'lead-sources' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'products' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'users' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'roles' => [
                    'view', 'create', 'edit', 'delete',
                ],

                'settings' => [
                    'view', 'edit',
                ],
            ];

            $permissionNames = [];

            foreach ($modules as $module => $actions) {
                foreach ($actions as $action) {
                    $permissionNames[] = "{$module}.{$action}";
                }
            }

            // ایجاد مجوزها بدون ایجاد رکورد تکراری
            foreach ($permissionNames as $permissionName) {
                Permission::firstOrCreate([
                    'name' => $permissionName,
                    'guard_name' => $guard,
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | Roles
            |--------------------------------------------------------------------------
            */

            $roles = [
                'super-admin' => $permissionNames,

                'admin' => $permissionNames,

                'sales-manager' => [
                    'dashboard.view',

                    'contacts.view',
                    'contacts.create',
                    'contacts.edit',
                    'contacts.delete',
                    'contacts.export',

                    'companies.view',
                    'companies.create',
                    'companies.edit',

                    'leads.view',
                    'leads.create',
                    'leads.edit',
                    'leads.delete',
                    'leads.convert',

                    'deals.view',
                    'deals.create',
                    'deals.edit',
                    'deals.delete',
                    'deals.change-status',

                    'pipelines.view',
                    'pipelines.create',
                    'pipelines.edit',

                    'tasks.view',
                    'tasks.create',
                    'tasks.edit',
                    'tasks.assign',

                    'calendar.view',
                    'calendar.create',
                    'calendar.edit',

                    'activities.view',
                    'activities.create',
                    'activities.edit',

                    'notes.view',
                    'notes.create',
                    'notes.edit',

                    'reports.view',
                    'reports.export',

                    'lead-sources.view',
                    'products.view',
                ],

                'sales-agent' => [
                    'dashboard.view',

                    'contacts.view',
                    'contacts.create',
                    'contacts.edit',

                    'companies.view',

                    'leads.view',
                    'leads.create',
                    'leads.edit',
                    'leads.convert',

                    'deals.view',
                    'deals.create',
                    'deals.edit',
                    'deals.change-status',

                    'pipelines.view',

                    'tasks.view',
                    'tasks.create',
                    'tasks.edit',

                    'calendar.view',
                    'calendar.create',
                    'calendar.edit',

                    'activities.view',
                    'activities.create',

                    'notes.view',
                    'notes.create',

                    'lead-sources.view',
                    'products.view',
                ],

                'support' => [
                    'dashboard.view',

                    'contacts.view',
                    'contacts.edit',

                    'companies.view',

                    'tasks.view',
                    'tasks.create',
                    'tasks.edit',

                    'calendar.view',

                    'activities.view',
                    'activities.create',

                    'notes.view',
                    'notes.create',
                    'notes.edit',
                ],

                'viewer' => [
                    'dashboard.view',

                    'contacts.view',
                    'companies.view',
                    'leads.view',
                    'deals.view',
                    'pipelines.view',
                    'tasks.view',
                    'calendar.view',
                    'activities.view',
                    'notes.view',
                    'reports.view',
                    'lead-sources.view',
                    'products.view',
                ],
            ];

            foreach ($roles as $roleName => $permissions) {
                $role = Role::firstOrCreate([
                    'name' => $roleName,
                    'guard_name' => $guard,
                ]);

                // همگام‌سازی مجوزها در هر بار اجرای Seeder
                $role->syncPermissions($permissions);
            }

            /*
            |--------------------------------------------------------------------------
            | Create Super Admin User
            |--------------------------------------------------------------------------
            */

            $adminEmail = env('NEXORA_ADMIN_EMAIL');
            $adminPassword = env('NEXORA_ADMIN_PASSWORD');
            $adminName = env('NEXORA_ADMIN_NAME', 'Nexora Super Admin');

            if (!$adminEmail || !$adminPassword) {
                $this->command?->warn(
                    'Super Admin was not created. Set NEXORA_ADMIN_EMAIL and NEXORA_ADMIN_PASSWORD in .env.'
                );

                return;
            }

            $admin = User::firstOrCreate(
                ['email' => $adminEmail],
                [
                    'name' => $adminName,
                    'password' => Hash::make($adminPassword),
                ]
            );

            // اگر کاربر از قبل وجود داشته باشد، رمز عبورش تغییر نمی‌کند.
            $admin->syncRoles(['super-admin']);
        });

        // پاک‌سازی مجدد کش
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->command?->info('Nexora roles and permissions created successfully.');
    }
}
