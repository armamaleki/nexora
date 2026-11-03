@extends('components.layouts.dashboard.index')
@section('content')
    <main class="min-h-screen lg:mr-[280px]">

        <!-- Topbar -->
        <header class="sticky top-0 z-30 flex h-[76px] items-center justify-between border-b border-gray-200 bg-white/90 px-5 backdrop-blur-xl dark:border-gray-800 dark:bg-[#11111d]/90 sm:px-8">

            <div class="flex items-center gap-3">
                <button id="openSidebar" class="rounded-xl border border-gray-200 p-2.5 text-gray-600 hover:bg-gray-100 dark:border-gray-800 dark:text-gray-300 dark:hover:bg-gray-800 lg:hidden" aria-label="باز کردن منو">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <div>
                    <h1 class="text-base font-extrabold sm:text-lg">داشبورد</h1>
                    <p class="mt-0.5 hidden text-xs text-gray-500 dark:text-gray-400 sm:block">
                        نمای کلی وضعیت کسب‌وکار شما
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-2 sm:gap-3">

                <!-- Search -->
                <div class="relative hidden md:block">
                    <svg class="absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m20 20-4-4"/>
                    </svg>
                    <input type="search" placeholder="جستجو در Nexora..."
                           class="h-10 w-64 rounded-xl border border-gray-200 bg-gray-50 pr-10 pl-4 text-xs outline-none transition focus:border-violet-500 focus:ring-2 focus:ring-violet-500/10 dark:border-gray-800 dark:bg-gray-900 dark:text-white dark:placeholder:text-gray-500">
                </div>

                <!-- Theme -->
                <button id="themeToggle" class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 bg-white text-gray-600 transition hover:border-violet-400 hover:text-violet-500 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300" aria-label="تغییر تم">
                    <svg id="themeIcon" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M21.752 15.002A9.718 9.718 0 0112.75 21 9.75 9.75 0 013.002 11.25 9.718 9.718 0 019 2.248 9.75 9.75 0 0021.752 15.002z"/>
                    </svg>
                </button>

                <!-- Notifications -->
                <button class="relative flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 bg-white text-gray-600 transition hover:border-violet-400 hover:text-violet-500 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300" aria-label="اعلان‌ها">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/>
                        <path d="M10 21h4"/>
                    </svg>
                    <span class="absolute right-2 top-2 h-2 w-2 rounded-full border-2 border-white bg-red-500 dark:border-gray-900"></span>
                </button>

                <!-- Profile -->
                <button class="flex h-10 items-center gap-2 rounded-xl border border-gray-200 bg-white px-2 transition hover:border-violet-400 dark:border-gray-800 dark:bg-gray-900 sm:px-3">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-gradient-to-br from-violet-500 to-indigo-600 text-xs font-bold text-white">ع</span>
                    <span class="hidden text-xs font-bold sm:block">علی رضایی</span>
                    <svg class="hidden h-3 w-3 text-gray-400 sm:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
            </div>
        </header>

        <!-- Dashboard Body -->
        <div id="dashboard" class="mx-auto max-w-[1600px] space-y-7 p-5 sm:p-8">

            <!-- Welcome -->
            <section class="flex flex-col justify-between gap-5 sm:flex-row sm:items-center">
                <div>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">دوشنبه، ۲۸ مهر ۱۴۰۵</p>
                    <h2 class="text-2xl font-extrabold sm:text-3xl">
                        سلام، علی <span class="inline-block">👋</span>
                    </h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        امروز فرصت خوبیه تا کسب‌وکارت رو یک قدم جلوتر ببری.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-2">
                    <button class="flex h-11 items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 text-xs font-bold text-gray-600 transition hover:border-violet-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M3 4h18M6 8h12M10 12h4M12 12v9"/>
                        </svg>
                        فیلتر گزارش
                    </button>

                    <button class="flex h-11 items-center gap-2 rounded-xl bg-violet-600 px-4 text-xs font-bold text-white shadow-lg shadow-violet-600/20 transition hover:bg-violet-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"/>
                        </svg>
                        ایجاد مورد جدید
                    </button>
                </div>
            </section>

            <!-- Stats -->
            <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

                <!-- Contacts -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-200/50 dark:border-gray-800 dark:bg-[#11111d] dark:hover:shadow-black/20">
                    <div class="flex items-center justify-between">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-100 text-violet-600 dark:bg-violet-500/15 dark:text-violet-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="10" cy="7" r="4"/>
                                <path d="M20 21v-2a4 4 0 0 0-3-3.87"/>
                            </svg>
                        </div>
                        <span class="rounded-lg bg-emerald-50 px-2.5 py-1 text-[10px] font-bold text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400">
                            +۱۲.۵٪
                        </span>
                    </div>
                    <p class="mt-5 text-sm text-gray-500 dark:text-gray-400">کل مخاطبین</p>
                    <div class="mt-1 flex items-end justify-between">
                        <h3 class="text-3xl font-extrabold tracking-tight">۱,۲۸۴</h3>
                        <span class="text-xs text-gray-400">نسبت به ماه قبل</span>
                    </div>
                </div>

                <!-- Deals -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-200/50 dark:border-gray-800 dark:bg-[#11111d] dark:hover:shadow-black/20">
                    <div class="flex items-center justify-between">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-500/15 dark:text-blue-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M3 7h18M5 7l1 13h12l1-13M9 11v5m6-5v5"/>
                                <path d="M9 7V4h6v3"/>
                            </svg>
                        </div>
                        <span class="rounded-lg bg-emerald-50 px-2.5 py-1 text-[10px] font-bold text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400">
                            +۸.۲٪
                        </span>
                    </div>
                    <p class="mt-5 text-sm text-gray-500 dark:text-gray-400">معاملات فعال</p>
                    <div class="mt-1 flex items-end justify-between">
                        <h3 class="text-3xl font-extrabold tracking-tight">۸۶</h3>
                        <span class="text-xs text-gray-400">در حال پیگیری</span>
                    </div>
                </div>

                <!-- Revenue -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-200/50 dark:border-gray-800 dark:bg-[#11111d] dark:hover:shadow-black/20">
                    <div class="flex items-center justify-between">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/15 dark:text-emerald-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M12 2v20m5-15H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                            </svg>
                        </div>
                        <span class="rounded-lg bg-emerald-50 px-2.5 py-1 text-[10px] font-bold text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400">
                            +۱۸.۶٪
                        </span>
                    </div>
                    <p class="mt-5 text-sm text-gray-500 dark:text-gray-400">فروش این ماه</p>
                    <div class="mt-1 flex items-end justify-between">
                        <h3 class="text-3xl font-extrabold tracking-tight">۲۴۸</h3>
                        <span class="text-xs text-gray-400">میلیون تومان</span>
                    </div>
                </div>

                <!-- Tasks -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-200/50 dark:border-gray-800 dark:bg-[#11111d] dark:hover:shadow-black/20">
                    <div class="flex items-center justify-between">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-100 text-amber-600 dark:bg-amber-500/15 dark:text-amber-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="4" y="4" width="16" height="17" rx="2"/>
                                <path d="M8 2v4m8-4v4M4 9h16m-11 4 2 2 4-4"/>
                            </svg>
                        </div>
                        <span class="rounded-lg bg-red-50 px-2.5 py-1 text-[10px] font-bold text-red-600 dark:bg-red-500/10 dark:text-red-400">
                            ۵ عقب‌افتاده
                        </span>
                    </div>
                    <p class="mt-5 text-sm text-gray-500 dark:text-gray-400">وظایف باقی‌مانده</p>
                    <div class="mt-1 flex items-end justify-between">
                        <h3 class="text-3xl font-extrabold tracking-tight">۲۳</h3>
                        <span class="text-xs text-gray-400">نیازمند اقدام</span>
                    </div>
                </div>
            </section>

            <!-- Charts & Pipeline -->
            <section class="grid grid-cols-1 gap-5 xl:grid-cols-3">

                <!-- Sales Chart -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-[#11111d] xl:col-span-2">
                    <div class="mb-7 flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <h3 class="text-base font-extrabold">عملکرد فروش</h3>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">مقایسه درآمد در شش ماه اخیر</p>
                        </div>

                        <select class="rounded-lg border border-gray-200 bg-gray-50 px-3 py-2 text-xs outline-none dark:border-gray-700 dark:bg-gray-900">
                            <option>شش ماه اخیر</option>
                            <option>سه ماه اخیر</option>
                            <option>سال جاری</option>
                        </select>
                    </div>

                    <div class="flex h-56 items-end justify-between gap-3 border-b border-gray-100 pb-3 dark:border-gray-800">
                        <div class="flex h-full flex-1 flex-col items-center justify-end gap-3">
                            <div class="flex h-full w-full items-end justify-center">
                                <div class="h-[42%] w-full max-w-10 rounded-t-lg bg-violet-200 transition hover:bg-violet-400 dark:bg-violet-500/30 dark:hover:bg-violet-500"></div>
                            </div>
                            <span class="text-[10px] text-gray-400">اردیبهشت</span>
                        </div>

                        <div class="flex h-full flex-1 flex-col items-center justify-end gap-3">
                            <div class="flex h-full w-full items-end justify-center">
                                <div class="h-[58%] w-full max-w-10 rounded-t-lg bg-violet-300 transition hover:bg-violet-500 dark:bg-violet-500/40 dark:hover:bg-violet-500"></div>
                            </div>
                            <span class="text-[10px] text-gray-400">خرداد</span>
                        </div>

                        <div class="flex h-full flex-1 flex-col items-center justify-end gap-3">
                            <div class="flex h-full w-full items-end justify-center">
                                <div class="h-[48%] w-full max-w-10 rounded-t-lg bg-violet-200 transition hover:bg-violet-400 dark:bg-violet-500/30 dark:hover:bg-violet-500"></div>
                            </div>
                            <span class="text-[10px] text-gray-400">تیر</span>
                        </div>

                        <div class="flex h-full flex-1 flex-col items-center justify-end gap-3">
                            <div class="flex h-full w-full items-end justify-center">
                                <div class="h-[72%] w-full max-w-10 rounded-t-lg bg-violet-400 transition hover:bg-violet-600 dark:bg-violet-500/60 dark:hover:bg-violet-500"></div>
                            </div>
                            <span class="text-[10px] text-gray-400">مرداد</span>
                        </div>

                        <div class="flex h-full flex-1 flex-col items-center justify-end gap-3">
                            <div class="flex h-full w-full items-end justify-center">
                                <div class="h-[65%] w-full max-w-10 rounded-t-lg bg-violet-300 transition hover:bg-violet-500 dark:bg-violet-500/40 dark:hover:bg-violet-500"></div>
                            </div>
                            <span class="text-[10px] text-gray-400">شهریور</span>
                        </div>

                        <div class="flex h-full flex-1 flex-col items-center justify-end gap-3">
                            <div class="flex h-full w-full items-end justify-center">
                                <div class="h-[90%] w-full max-w-10 rounded-t-lg bg-gradient-to-t from-violet-700 to-purple-400 shadow-lg shadow-violet-500/20"></div>
                            </div>
                            <span class="text-[10px] font-bold text-violet-600 dark:text-violet-400">مهر</span>
                        </div>
                    </div>

                    <div class="mt-5 flex flex-wrap items-center gap-5 text-xs text-gray-500 dark:text-gray-400">
                        <span class="flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-sm bg-violet-500"></span>
                            درآمد فروش
                        </span>
                        <span class="flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-sm bg-gray-300 dark:bg-gray-600"></span>
                            دوره‌های قبلی
                        </span>
                        <span class="mr-auto font-bold text-emerald-600 dark:text-emerald-400">
                            ۱۸٪ رشد نسبت به دوره قبل
                        </span>
                    </div>
                </div>

                <!-- Pipeline -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-[#11111d]">
                    <div class="mb-6">
                        <h3 class="text-base font-extrabold">قیف فروش</h3>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">وضعیت فرصت‌های فروش</p>
                    </div>

                    <div class="space-y-5">

                        <div>
                            <div class="mb-2 flex items-center justify-between text-xs">
                                <span class="font-semibold">سرنخ‌های جدید</span>
                                <span class="font-bold">۱۲۸</span>
                            </div>
                            <div class="h-2 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                <div class="h-full w-full rounded-full bg-violet-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-xs">
                                <span class="font-semibold">تماس برقرار شده</span>
                                <span class="font-bold">۹۶</span>
                            </div>
                            <div class="h-2 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                <div class="h-full w-[75%] rounded-full bg-indigo-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-xs">
                                <span class="font-semibold">ارسال پیشنهاد</span>
                                <span class="font-bold">۶۴</span>
                            </div>
                            <div class="h-2 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                <div class="h-full w-1/2 rounded-full bg-blue-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-xs">
                                <span class="font-semibold">مذاکره</span>
                                <span class="font-bold">۴۲</span>
                            </div>
                            <div class="h-2 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                <div class="h-full w-[33%] rounded-full bg-amber-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-xs">
                                <span class="font-semibold">فروش موفق</span>
                                <span class="font-bold">۲۸</span>
                            </div>
                            <div class="h-2 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                <div class="h-full w-[22%] rounded-full bg-emerald-500"></div>
                            </div>
                        </div>
                    </div>

                    <a href="#pipeline" class="mt-7 flex items-center justify-center gap-2 rounded-xl border border-violet-200 py-3 text-xs font-bold text-violet-600 transition hover:bg-violet-50 dark:border-violet-500/20 dark:text-violet-400 dark:hover:bg-violet-500/10">
                        مشاهده قیف فروش
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </section>

            <!-- Bottom Sections -->
            <section class="grid grid-cols-1 gap-5 xl:grid-cols-3">

                <!-- Recent Deals -->
                <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-[#11111d] xl:col-span-2">

                    <div class="flex items-center justify-between border-b border-gray-100 p-5 dark:border-gray-800">
                        <div>
                            <h3 class="text-base font-extrabold">آخرین معاملات</h3>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">آخرین فرصت‌های فروش ثبت‌شده</p>
                        </div>
                        <a href="#deals" class="text-xs font-bold text-violet-600 hover:text-violet-500 dark:text-violet-400">
                            مشاهده همه
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[600px] text-right text-xs">
                            <thead class="bg-gray-50 text-gray-500 dark:bg-gray-900/60 dark:text-gray-400">
                            <tr>
                                <th class="px-5 py-4 font-medium">عنوان معامله</th>
                                <th class="px-5 py-4 font-medium">مشتری</th>
                                <th class="px-5 py-4 font-medium">مبلغ</th>
                                <th class="px-5 py-4 font-medium">وضعیت</th>
                                <th class="px-5 py-4 font-medium">مسئول</th>
                            </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">

                            <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900/50">
                                <td class="px-5 py-4 font-bold">طراحی وب‌سایت شرکتی</td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">شرکت آریا</td>
                                <td class="px-5 py-4 font-bold">۸۵ میلیون</td>
                                <td class="px-5 py-4">
                                    <span class="rounded-lg bg-blue-50 px-2.5 py-1.5 text-[10px] font-bold text-blue-600 dark:bg-blue-500/10 dark:text-blue-400">در حال مذاکره</span>
                                </td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">علی رضایی</td>
                            </tr>

                            <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900/50">
                                <td class="px-5 py-4 font-bold">قرارداد سئو سایت</td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">فروشگاه پارس</td>
                                <td class="px-5 py-4 font-bold">۴۲ میلیون</td>
                                <td class="px-5 py-4">
                                    <span class="rounded-lg bg-amber-50 px-2.5 py-1.5 text-[10px] font-bold text-amber-600 dark:bg-amber-500/10 dark:text-amber-400">ارسال پیشنهاد</span>
                                </td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">سارا محمدی</td>
                            </tr>

                            <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900/50">
                                <td class="px-5 py-4 font-bold">پشتیبانی نرم‌افزار</td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">گروه نوین</td>
                                <td class="px-5 py-4 font-bold">۲۸ میلیون</td>
                                <td class="px-5 py-4">
                                    <span class="rounded-lg bg-emerald-50 px-2.5 py-1.5 text-[10px] font-bold text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400">موفق</span>
                                </td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">علی رضایی</td>
                            </tr>

                            <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900/50">
                                <td class="px-5 py-4 font-bold">توسعه اپلیکیشن</td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">توسعه‌گران شرق</td>
                                <td class="px-5 py-4 font-bold">۱۲۰ میلیون</td>
                                <td class="px-5 py-4">
                                    <span class="rounded-lg bg-violet-50 px-2.5 py-1.5 text-[10px] font-bold text-violet-600 dark:bg-violet-500/10 dark:text-violet-400">سرنخ جدید</span>
                                </td>
                                <td class="px-5 py-4 text-gray-500 dark:text-gray-400">مهدی احمدی</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tasks -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-[#11111d]">
                    <div class="mb-5 flex items-center justify-between">
                        <div>
                            <h3 class="text-base font-extrabold">وظایف امروز</h3>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">کارهایی که باید انجام بدی</p>
                        </div>
                        <a href="#tasks" class="text-xs font-bold text-violet-600 dark:text-violet-400">همه</a>
                    </div>

                    <div class="space-y-4">

                        <label class="flex cursor-pointer items-start gap-3">
                            <input type="checkbox" class="mt-1 h-4 w-4 rounded border-gray-300 accent-violet-600 dark:border-gray-700">
                            <span class="min-w-0 flex-1">
                                <span class="block text-xs font-bold">تماس با شرکت آریا</span>
                                <span class="mt-1 block text-[10px] text-gray-500 dark:text-gray-400">پیگیری قرارداد طراحی سایت</span>
                                <span class="mt-2 inline-flex rounded-md bg-red-50 px-2 py-1 text-[10px] text-red-600 dark:bg-red-500/10 dark:text-red-400">۱۰:۳۰ صبح</span>
                            </span>
                        </label>

                        <div class="h-px bg-gray-100 dark:bg-gray-800"></div>

                        <label class="flex cursor-pointer items-start gap-3">
                            <input type="checkbox" class="mt-1 h-4 w-4 rounded border-gray-300 accent-violet-600 dark:border-gray-700">
                            <span class="min-w-0 flex-1">
                                <span class="block text-xs font-bold">ارسال پیش‌فاکتور</span>
                                <span class="mt-1 block text-[10px] text-gray-500 dark:text-gray-400">برای فروشگاه پارس</span>
                                <span class="mt-2 inline-flex rounded-md bg-amber-50 px-2 py-1 text-[10px] text-amber-600 dark:bg-amber-500/10 dark:text-amber-400">۱۲:۰۰ ظهر</span>
                            </span>
                        </label>

                        <div class="h-px bg-gray-100 dark:bg-gray-800"></div>

                        <label class="flex cursor-pointer items-start gap-3">
                            <input type="checkbox" class="mt-1 h-4 w-4 rounded border-gray-300 accent-violet-600 dark:border-gray-700">
                            <span class="min-w-0 flex-1">
                                <span class="block text-xs font-bold">جلسه با تیم فروش</span>
                                <span class="mt-1 block text-[10px] text-gray-500 dark:text-gray-400">بررسی عملکرد هفتگی</span>
                                <span class="mt-2 inline-flex rounded-md bg-blue-50 px-2 py-1 text-[10px] text-blue-600 dark:bg-blue-500/10 dark:text-blue-400">۱۴:۰۰ عصر</span>
                            </span>
                        </label>

                        <button class="mt-2 flex w-full items-center justify-center gap-2 rounded-xl border border-dashed border-gray-300 py-3 text-xs font-bold text-gray-500 transition hover:border-violet-400 hover:text-violet-600 dark:border-gray-700 dark:text-gray-400 dark:hover:border-violet-500 dark:hover:text-violet-400">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                            افزودن وظیفه جدید
                        </button>
                    </div>
                </div>
            </section>

            <!-- Recent Activities -->
            <section class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-[#11111d]">
                <div class="mb-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-base font-extrabold">فعالیت‌های اخیر</h3>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">آخرین اتفاقات ثبت‌شده در فضای کاری</p>
                    </div>
                    <a href="#activities" class="text-xs font-bold text-violet-600 dark:text-violet-400">مشاهده تاریخچه</a>
                </div>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/15 dark:text-emerald-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-xs font-bold">معامله جدید با موفقیت ثبت شد</p>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">علی رضایی یک معامله جدید برای گروه نوین ثبت کرد.</p>
                            <p class="mt-2 text-[10px] text-gray-400">۲۰ دقیقه پیش</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-500/15 dark:text-blue-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="10" cy="7" r="4"/>
                                <path d="M20 8v6m-3-3h6"/>
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-xs font-bold">مخاطب جدید به سیستم اضافه شد</p>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">سارا محمدی، مخاطب جدیدی با نام شرکت آفتاب ثبت کرد.</p>
                            <p class="mt-2 text-[10px] text-gray-400">۱ ساعت پیش</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-100 text-amber-600 dark:bg-amber-500/15 dark:text-amber-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="4" y="4" width="16" height="17" rx="2"/>
                                <path d="M8 2v4m8-4v4M4 9h16"/>
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-xs font-bold">وظیفه جدید ایجاد شد</p>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">مهدی احمدی وظیفه پیگیری قرارداد را برای فردا برنامه‌ریزی کرد.</p>
                            <p class="mt-2 text-[10px] text-gray-400">۳ ساعت پیش</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="flex flex-col items-center justify-between gap-3 border-t border-gray-200 pt-6 text-xs text-gray-400 dark:border-gray-800 sm:flex-row">
                <p>© ۲۰۲۶ Nexora CRM. تمام حقوق محفوظ است.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="transition hover:text-violet-500">راهنما</a>
                    <a href="#" class="transition hover:text-violet-500">مستندات</a>
                    <a href="#" class="transition hover:text-violet-500">پشتیبانی</a>
                    <span class="flex items-center gap-1.5">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        سیستم فعال است
                    </span>
                </div>
            </footer>

        </div>
    </main>
@endsection
