@extends('components.layouts.dashboard.index')

@section('title', 'مدیریت نقش‌ها')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-black text-gray-900 dark:text-white">
                    مدیریت نقش‌ها
                </h1>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    نقش‌های کاربران و سطح دسترسی آن‌ها را مدیریت کنید.
                </p>
            </div>

            <a href="{{ route('dashboard.role.create') }}"
               class="inline-flex items-center justify-center gap-2 rounded-xl bg-violet-600 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-violet-600/20 transition hover:bg-violet-700">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 4v16m8-8H4"/>
                </svg>
                افزودن نقش جدید
            </a>
        </div>

        {{-- Statistics --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">

            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-gray-900">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            مجموع نقش‌ها
                        </p>
                        <p class="mt-2 text-3xl font-black text-gray-900 dark:text-white">
                            {{ $roles->total() }}
                        </p>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-100 text-violet-600 dark:bg-violet-500/10 dark:text-violet-400">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a4 4 0 00-5-3.87M9 20H4v-2a4 4 0 015-3.87m8-7a4 4 0 11-8 0 4 4 0 018 0zm6 3a4 4 0 10-8 0"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-gray-900">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            نقش‌های نمایش داده شده
                        </p>
                        <p class="mt-2 text-3xl font-black text-gray-900 dark:text-white">
                            {{ $roles->count() }}
                        </p>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-100 text-sky-600 dark:bg-sky-500/10 dark:text-sky-400">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-gray-900">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            تعداد کاربران در نقش‌ها
                        </p>
                        <p class="mt-2 text-3xl font-black text-gray-900 dark:text-white">
                            {{ $roles->sum('users_count') }}
                        </p>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m16-10a4 4 0 110-8m4 18v-2a4 4 0 00-3-3.87M14 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>

        {{-- Main Table --}}
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

            {{-- Search Header --}}
            <div class="flex flex-col gap-4 border-b border-gray-200 p-5 dark:border-gray-800 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="font-bold text-gray-900 dark:text-white">
                        فهرست نقش‌ها
                    </h2>
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                        مدیریت و مشاهده نقش‌های تعریف شده در سیستم
                    </p>
                </div>

                <form action="{{ route('dashboard.role.index') }}" method="GET"
                      class="flex w-full gap-2 sm:w-auto">

                    <div class="relative flex-1 sm:w-72">
                        <svg class="absolute right-3 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-400"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m21 21-4.35-4.35m1.35-5.15a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>

                        <input
                            type="search"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="جست‌وجوی نام نقش..."
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 py-3 pr-10 pl-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/10 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500"
                        >
                    </div>

                    <button type="submit"
                            class="rounded-xl bg-gray-900 px-5 py-3 text-sm font-bold text-white transition hover:bg-gray-700 dark:bg-violet-600 dark:hover:bg-violet-700">
                        جست‌وجو
                    </button>

                    @if(request('search'))
                        <a href="{{ route('dashboard.role.index') }}"
                           class="flex items-center justify-center rounded-xl border border-gray-200 px-4 text-sm font-medium text-gray-600 transition hover:bg-gray-100 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800">
                            پاک کردن
                        </a>
                    @endif

                </form>
            </div>

            {{-- Table --}}
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap text-right">
                    <thead>
                    <tr class="bg-gray-50 text-xs font-bold text-gray-500 dark:bg-gray-800/60 dark:text-gray-400">
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">نام نقش</th>
                        <th class="px-6 py-4">تعداد کاربران</th>
                        <th class="px-6 py-4">تعداد دسترسی‌ها</th>
                        <th class="px-6 py-4">Guard</th>
                        <th class="px-6 py-4 text-center">عملیات</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100 dark:divide-gray-800">

                    @forelse($roles as $role)
                        <tr class="transition hover:bg-gray-50/80 dark:hover:bg-gray-800/40">

                            <td class="px-6 py-5 text-sm text-gray-400">
                                {{ $roles->firstItem() + $loop->index }}
                            </td>

                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-100 text-sm font-black text-violet-700 dark:bg-violet-500/10 dark:text-violet-400">
                                        {{ mb_strtoupper(mb_substr($role->name, 0, 1)) }}
                                    </div>

                                    <div>
                                        <p class="font-bold text-gray-900 dark:text-white">
                                            {{ $role->name }}
                                        </p>

                                        @if($role->name === 'super-admin')
                                            <span class="mt-1 inline-flex rounded-md bg-amber-100 px-2 py-0.5 text-[10px] font-bold text-amber-700 dark:bg-amber-500/10 dark:text-amber-400">
                                                مدیر کل
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-5">
                                <span class="inline-flex items-center gap-2 rounded-lg bg-sky-50 px-3 py-1.5 text-sm font-bold text-sky-700 dark:bg-sky-500/10 dark:text-sky-400">
                                    {{ $role->users_count }}
                                    <span class="text-xs font-normal">کاربر</span>
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <span class="inline-flex items-center gap-2 rounded-lg bg-violet-50 px-3 py-1.5 text-sm font-bold text-violet-700 dark:bg-violet-500/10 dark:text-violet-400">
                                    {{ $role->permissions_count }}
                                    <span class="text-xs font-normal">دسترسی</span>
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <span class="rounded-md border border-gray-200 px-2.5 py-1 text-xs font-medium text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                    {{ $role->guard_name }}
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('dashboard.role.edit', $role->id) }}"
                                       title="ویرایش نقش"
                                       class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-500 transition hover:border-violet-300 hover:bg-violet-50 hover:text-violet-600 dark:border-gray-700 dark:text-gray-400 dark:hover:border-violet-500/30 dark:hover:bg-violet-500/10 dark:hover:text-violet-400">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="m16.862 4.487 2.651 2.651M4 20l4.5-1 11-11a2.121 2.121 0 00-3-3l-11 11L4 20z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-16 text-center">
                                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-gray-100 text-gray-400 dark:bg-gray-800">
                                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                              d="M17 20h5v-2a4 4 0 00-5-3.87M9 20H4v-2a4 4 0 015-3.87m8-7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>

                                <h3 class="mt-4 font-bold text-gray-900 dark:text-white">
                                    نقشی پیدا نشد!
                                </h3>

                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    @if(request('search'))
                                        نتیجه‌ای برای عبارت جست‌وجو شده وجود ندارد.
                                    @else
                                        هنوز هیچ نقشی در سیستم ایجاد نشده است.
                                    @endif
                                </p>

                                @if(!request('search'))
                                    <a href="{{ route('dashboard.role.create') }}"
                                       class="mt-5 inline-flex items-center gap-2 rounded-xl bg-violet-600 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-violet-700">
                                        افزودن اولین نقش
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
