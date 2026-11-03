
@extends('components.layouts.dashboard.index')

@section('title', 'اضافه کردن نقش جدید')

@section('content')

    <div class="space-y-6">

        {{-- Header --}}
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <div class="mb-2 flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                    <a href="{{ route('dashboard.role.index') }}" class="transition hover:text-violet-600">
                        مدیریت نقش‌ها
                    </a>
                    <span>/</span>
                    <span class="text-gray-800 dark:text-gray-200">ایجاد نقش جدید</span>
                </div>

                <h1 class="text-2xl font-black text-gray-900 dark:text-white">
                    ایجاد نقش جدید
                </h1>

                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    یک نقش جدید ایجاد کنید و دسترسی‌های مورد نیاز آن را مشخص کنید.
                </p>
            </div>

            <a href="{{ route('dashboard.role.index') }}"
               class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-2.5 text-sm font-bold text-gray-600 transition hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-800">

                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m15 18-6-6 6-6"/>
                </svg>

                بازگشت به لیست
            </a>
        </div>

        <form action="{{ route('dashboard.role.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Role Information --}}
            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

                <div class="border-b border-gray-100 px-6 py-5 dark:border-gray-800">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-100 text-violet-600 dark:bg-violet-500/10 dark:text-violet-400">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m16-10a4 4 0 110-8m4 18v-2a4 4 0 00-3-3.87M14 3.13a4 4 0 010 7.75"/>
                            </svg>
                        </div>

                        <div>
                            <h2 class="font-bold text-gray-900 dark:text-white">
                                اطلاعات نقش
                            </h2>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                مشخصات اولیه نقش جدید را وارد کنید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="max-w-xl">
                        <label for="name" class="mb-2 block text-sm font-bold text-gray-700 dark:text-gray-300">
                            نام نقش
                            <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            placeholder="مثلاً: sales-manager"
                            required
                            maxlength="100"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/10 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500"
                        >

                        @error('name')
                        <p class="mt-2 text-xs font-medium text-red-500">
                            {{ $message }}
                        </p>
                        @enderror

                        <p class="mt-2 text-xs text-gray-400">
                            پیشنهاد: برای نام نقش از حروف انگلیسی و خط تیره استفاده کنید.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Permissions --}}
            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

                <div class="flex flex-col gap-4 border-b border-gray-100 px-6 py-5 dark:border-gray-800 sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-sky-100 text-sky-600 dark:bg-sky-500/10 dark:text-sky-400">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.084-.143-2.134-.382-3.126z"/>
                            </svg>
                        </div>

                        <div>
                            <h2 class="font-bold text-gray-900 dark:text-white">
                                دسترسی‌های نقش
                            </h2>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                دسترسی‌هایی که این نقش اجازه استفاده از آن‌ها را دارد انتخاب کنید.
                            </p>
                        </div>
                    </div>

                    <button type="button" id="select-all"
                            class="inline-flex items-center justify-center gap-2 rounded-lg bg-violet-50 px-4 py-2.5 text-xs font-bold text-violet-700 transition hover:bg-violet-100 dark:bg-violet-500/10 dark:text-violet-400 dark:hover:bg-violet-500/20">
                        انتخاب همه دسترسی‌ها
                    </button>
                </div>

                <div class="space-y-5 p-6">

                    @if($errors->has('permissions') || $errors->has('permissions.*'))
                        <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-600 dark:border-red-500/20 dark:bg-red-500/10 dark:text-red-400">
                            لطفاً دسترسی‌های انتخاب‌شده را بررسی کنید.
                        </div>
                    @endif

                    @forelse($permissions as $module => $modulePermissions)

                        <div class="permission-group overflow-hidden rounded-xl border border-gray-200 dark:border-gray-800"
                             data-group="{{ $module }}">

                            {{-- Group Header --}}
                            <div class="flex flex-wrap items-center justify-between gap-3 bg-gray-50 px-5 py-4 dark:bg-gray-800/50">

                                <div class="flex items-center gap-3">
                                    <input
                                        type="checkbox"
                                        class="group-checkbox h-4 w-4 cursor-pointer rounded border-gray-300 text-violet-600 focus:ring-violet-500 dark:border-gray-600 dark:bg-gray-700"
                                        data-group="{{ $module }}"
                                    >

                                    <div>
                                        <h3 class="text-sm font-bold text-gray-900 dark:text-white">
                                            {{ ucfirst(str_replace(['-', '_'], ' ', $module)) }}
                                        </h3>

                                        <p class="mt-1 text-xs text-gray-400">
                                            {{ $modulePermissions->count() }} دسترسی
                                        </p>
                                    </div>
                                </div>

                                <span class="text-xs text-gray-400">
                                انتخاب تمام دسترسی‌های این بخش
                            </span>
                            </div>

                            {{-- Permission Items --}}
                            <div class="grid grid-cols-1 gap-3 p-5 sm:grid-cols-2 lg:grid-cols-3">

                                @foreach($modulePermissions as $permission)

                                    @php
                                        $action = explode('.', $permission->name, 2)[1] ?? $permission->name;

                                        $actionLabels = [
                                            'view' => 'مشاهده',
                                            'create' => 'ایجاد',
                                            'edit' => 'ویرایش',
                                            'delete' => 'حذف',
                                            'export' => 'خروجی گرفتن',
                                            'convert' => 'تبدیل',
                                            'change-status' => 'تغییر وضعیت',
                                            'assign' => 'اختصاص دادن',
                                        ];
                                    @endphp

                                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-gray-100 p-3 transition hover:border-violet-300 hover:bg-violet-50/50 dark:border-gray-800 dark:hover:border-violet-500/30 dark:hover:bg-violet-500/5">

                                        <input
                                            type="checkbox"
                                            name="permissions[]"
                                            value="{{ $permission->name }}"
                                            class="permission-checkbox h-4 w-4 cursor-pointer rounded border-gray-300 text-violet-600 focus:ring-violet-500 dark:border-gray-600 dark:bg-gray-800"
                                            data-group="{{ $module }}"
                                            @checked(in_array($permission->name, old('permissions', [])))
                                        >

                                        <div class="min-w-0">
                                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                                {{ $actionLabels[$action] ?? ucfirst(str_replace('-', ' ', $action)) }}
                                            </p>

                                            <p class="mt-1 truncate text-[11px] text-gray-400" dir="ltr">
                                                {{ $permission->name }}
                                            </p>
                                        </div>

                                    </label>

                                @endforeach

                            </div>
                        </div>

                    @empty
                        <div class="rounded-xl border border-dashed border-gray-300 px-6 py-12 text-center dark:border-gray-700">
                            <p class="font-bold text-gray-700 dark:text-gray-200">
                                هیچ دسترسی‌ای ثبت نشده است.
                            </p>
                            <p class="mt-2 text-sm text-gray-400">
                                ابتدا دسترسی‌های پروژه را با Seeder ایجاد کنید.
                            </p>
                        </div>
                    @endforelse

                </div>
            </div>

            {{-- Actions --}}
            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:items-center sm:justify-end">

                <a href="{{ route('dashboard.role.index') }}"
                   class="inline-flex items-center justify-center rounded-xl border border-gray-200 bg-white px-6 py-3 text-sm font-bold text-gray-600 transition hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-800">
                    انصراف
                </a>

                <button type="submit"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-violet-600 px-7 py-3 text-sm font-bold text-white shadow-lg shadow-violet-600/20 transition hover:bg-violet-700 focus:ring-4 focus:ring-violet-500/20">

                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 13l4 4L19 7"/>
                    </svg>

                    ذخیره نقش
                </button>

            </div>

        </form>
    </div>

    {{-- Permission Selection Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const selectAllButton = document.getElementById('select-all');
            const permissionCheckboxes = document.querySelectorAll('.permission-checkbox');
            const groupCheckboxes = document.querySelectorAll('.group-checkbox');

            function updateGroupState(groupName) {
                const groupItems = document.querySelectorAll(
                    '.permission-checkbox[data-group="' + groupName + '"]'
                );

                const groupMaster = document.querySelector(
                    '.group-checkbox[data-group="' + groupName + '"]'
                );

                const checkedCount = Array.from(groupItems).filter(item => item.checked).length;

                groupMaster.checked = groupItems.length > 0 && checkedCount === groupItems.length;
                groupMaster.indeterminate = checkedCount > 0 && checkedCount < groupItems.length;
            }

            function updateAllGroups() {
                groupCheckboxes.forEach(checkbox => {
                    updateGroupState(checkbox.dataset.group);
                });

                const allChecked = Array.from(permissionCheckboxes).every(item => item.checked);

                selectAllButton.textContent = allChecked
                    ? 'لغو انتخاب همه دسترسی‌ها'
                    : 'انتخاب همه دسترسی‌ها';
            }

            groupCheckboxes.forEach(groupCheckbox => {
                groupCheckbox.addEventListener('change', function () {
                    const groupItems = document.querySelectorAll(
                        '.permission-checkbox[data-group="' + this.dataset.group + '"]'
                    );

                    groupItems.forEach(item => {
                        item.checked = this.checked;
                    });

                    updateAllGroups();
                });
            });

            permissionCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    updateAllGroups();
                });
            });

            selectAllButton.addEventListener('click', function () {
                const allChecked = Array.from(permissionCheckboxes).every(item => item.checked);

                permissionCheckboxes.forEach(item => {
                    item.checked = !allChecked;
                });

                updateAllGroups();
            });

            updateAllGroups();
        });
    </script>

@endsection
