<!DOCTYPE html>
<html lang="fa" dir="rtl" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#11111d">
    <title>Nexora CRM | داشبورد مدیریت</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans text-gray-900 antialiased transition-colors dark:bg-[#0b0b14] dark:text-gray-100">

<div class="min-h-screen">

    <!-- Mobile Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 z-40 hidden bg-black/50 backdrop-blur-sm lg:hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar"
           class="fixed inset-y-0 right-0 z-50 flex w-[280px] -translate-x-full flex-col border-l border-gray-200 bg-white transition-transform duration-300 dark:border-gray-800 dark:bg-[#11111d] lg:translate-x-0">

        <!-- Logo -->
        <div class="flex h-[76px] shrink-0 items-center justify-between border-b border-gray-100 px-6 dark:border-gray-800">
            <a href="#" class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-violet-400 via-purple-600 to-indigo-700 text-xl font-black text-white shadow-lg shadow-purple-900/20">
                    N
                </span>
                <div>
                    <div class="text-xl font-extrabold tracking-tight">
                        Nexora <span class="text-violet-500">CRM</span>
                    </div>
                    <div class="mt-0.5 text-[10px] font-medium tracking-widest text-gray-400">
                        CUSTOMER MANAGEMENT
                    </div>
                </div>
            </a>

            <button id="closeSidebar" class="rounded-lg p-2 text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 lg:hidden" aria-label="بستن منو">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m18 6-12 12M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Workspace -->
        <div class="shrink-0 px-4 pt-5">
            <button class="flex w-full items-center gap-3 rounded-xl border border-gray-200 bg-gray-50 p-3 text-right transition hover:border-violet-300 dark:border-gray-800 dark:bg-gray-900/70 dark:hover:border-violet-500/40">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-violet-500 to-indigo-600 text-sm font-bold text-white">
                    N
                </div>
                <div class="min-w-0 flex-1">
                    <p class="truncate text-sm font-bold">فضای کاری من</p>
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">پلن رایگان</p>
                </div>
                <svg class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m9 18 6-6-6-6"/>
                </svg>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 space-y-6 overflow-y-auto px-4 py-6">

            <!-- General -->
            <div>
                <p class="mb-3 px-3 text-[10px] font-bold tracking-widest text-gray-400">
                    منوی اصلی
                </p>

                <div class="space-y-1">

                    <a href="#dashboard" class="flex items-center gap-3 rounded-xl bg-violet-50 px-3 py-3 text-sm font-bold text-violet-700 dark:bg-violet-500/15 dark:text-violet-300">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="3" width="7" height="7" rx="1.5"/>
                            <rect x="14" y="3" width="7" height="7" rx="1.5"/>
                            <rect x="14" y="14" width="7" height="7" rx="1.5"/>
                            <rect x="3" y="14" width="7" height="7" rx="1.5"/>
                        </svg>
                        <span class="flex-1">داشبورد</span>
                        <span class="h-2 w-2 rounded-full bg-violet-500"></span>
                    </a>
                    @can('contacts.view')
                    <a href="#contacts" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="10" cy="7" r="4"/>
                            <path d="M20 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        <span class="flex-1">مخاطبین و مشتریان</span>
                        <span class="rounded-md bg-gray-100 px-2 py-0.5 text-[10px] text-gray-500 dark:bg-gray-800">128</span>
                    </a>
                    @endcan

                    <a href="#companies" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="4" width="18" height="17" rx="2"/>
                            <path d="M9 21V8h6v13M7 8h.01M7 12h.01M7 16h.01M17 8h.01M17 12h.01M17 16h.01"/>
                        </svg>
                        <span class="flex-1">شرکت‌ها</span>
                    </a>

                    <a href="#leads" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 3v3m0 12v3M3 12h3m12 0h3M5.6 5.6l2.1 2.1m8.6 8.6 2.1 2.1m0-12.8-2.1 2.1m-8.6 8.6-2.1 2.1"/>
                            <circle cx="12" cy="12" r="5"/>
                        </svg>
                        <span class="flex-1">سرنخ‌های فروش</span>
                        <span class="rounded-md bg-amber-100 px-2 py-0.5 text-[10px] text-amber-700 dark:bg-amber-500/10 dark:text-amber-400">18</span>
                    </a>

                    <a href="#deals" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M3 7h18M5 7l1 13h12l1-13M9 11v5m6-5v5"/>
                            <path d="M9 7V4h6v3"/>
                        </svg>
                        <span class="flex-1">معاملات فروش</span>
                    </a>

                    <a href="#pipeline" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M3 5h18l-7 7v6l-4 2v-8L3 5Z"/>
                        </svg>
                        <span class="flex-1">قیف فروش</span>
                    </a>

                </div>
            </div>

            <!-- Productivity -->
            <div>
                <p class="mb-3 px-3 text-[10px] font-bold tracking-widest text-gray-400">
                    مدیریت فعالیت‌ها
                </p>

                <div class="space-y-1">

                    <a href="#tasks" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="4" y="4" width="16" height="17" rx="2"/>
                            <path d="M8 2v4m8-4v4M4 9h16m-11 4 2 2 4-4"/>
                        </svg>
                        <span class="flex-1">وظایف و پیگیری‌ها</span>
                        <span class="rounded-md bg-red-100 px-2 py-0.5 text-[10px] text-red-600 dark:bg-red-500/10 dark:text-red-400">5</span>
                    </a>

                    <a href="#calendar" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="4" width="18" height="17" rx="2"/>
                            <path d="M16 2v4M8 2v4M3 10h18"/>
                            <path d="M8 14h.01M12 14h.01M16 14h.01M8 17h.01M12 17h.01"/>
                        </svg>
                        <span class="flex-1">تقویم و جلسات</span>
                    </a>

                    <a href="#activities" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 8v4l3 2"/>
                            <circle cx="12" cy="12" r="9"/>
                        </svg>
                        <span class="flex-1">تاریخچه فعالیت‌ها</span>
                    </a>

                    <a href="#notes" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/>
                            <path d="M14 2v6h6M8 13h8M8 17h8"/>
                        </svg>
                        <span class="flex-1">یادداشت‌ها</span>
                    </a>

                </div>
            </div>

            <!-- Analysis -->
            <div>
                <p class="mb-3 px-3 text-[10px] font-bold tracking-widest text-gray-400">
                    تحلیل و گزارش
                </p>

                <div class="space-y-1">

                    <a href="#reports" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M3 3v18h18"/>
                            <path d="m19 9-5 5-4-4-5 5"/>
                        </svg>
                        <span class="flex-1">گزارش‌های فروش</span>
                    </a>

                    <a href="#sources" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 3v18M3 12h18"/>
                        </svg>
                        <span class="flex-1">منابع جذب مشتری</span>
                    </a>

                    <a href="#products" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="m12 3 9 5-9 5-9-5 9-5Z"/>
                            <path d="m3 12 9 5 9-5M3 16l9 5 9-5"/>
                        </svg>
                        <span class="flex-1">محصولات و خدمات</span>
                    </a>

                </div>
            </div>

            <!-- Administration -->
            <div>
                <p class="mb-3 px-3 text-[10px] font-bold tracking-widest text-gray-400">
                    مدیریت سیستم
                </p>

                <div class="space-y-1">

                    <a href="#users" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="9" cy="8" r="4"/>
                            <path d="M3 21v-2a6 6 0 0 1 12 0v2m4-14v6m-3-3h6"/>
                        </svg>
                        <span class="flex-1">کاربران و تیم</span>
                    </a>

                    <a href="#roles" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7l-8-4Z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                        <span class="flex-1">نقش‌ها و دسترسی‌ها</span>
                    </a>

                    <a href="#settings" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="m19.4 15 .1.1a2 2 0 1 1-2.8 2.8l-.1-.1a2 2 0 0 0-3.4 1.4v.3a2 2 0 1 1-4 0v-.2a2 2 0 0 0-3.4-1.4l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a2 2 0 0 0-1.4-3.4h-.3a2 2 0 1 1 0-4h.2a2 2 0 0 0 1.4-3.4l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a2 2 0 0 0 3.4-1.4v-.3a2 2 0 1 1 4 0v.2a2 2 0 0 0 3.4 1.4l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a2 2 0 0 0 1.4 3.4h.3a2 2 0 1 1 0 4h-.2a2 2 0 0 0-1.4 3.4Z" transform="translate(1 1) scale(.92)"/>
                        </svg>
                        <span class="flex-1">تنظیمات</span>
                    </a>

                </div>
            </div>
        </nav>

        <!-- Sidebar Footer -->
        <div class="shrink-0 border-t border-gray-100 p-4 dark:border-gray-800">
            <div class="mb-3 rounded-2xl bg-gradient-to-br from-violet-600 to-indigo-700 p-4 text-white">
                <div class="mb-2 flex items-center justify-between">
                    <span class="text-xs font-bold">فضای ذخیره‌سازی</span>
                    <svg class="h-4 w-4 text-violet-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 7v5l3 2"/>
                    </svg>
                </div>
                <div class="mb-2 flex items-end justify-between">
                    <span class="text-xl font-extrabold">۶۵٪</span>
                    <span class="text-[10px] text-violet-200">۶۵۰ MB از ۱ GB</span>
                </div>
                <div class="h-1.5 overflow-hidden rounded-full bg-white/20">
                    <div class="h-full w-[65%] rounded-full bg-white"></div>
                </div>
                <button class="mt-3 text-xs font-bold text-white/90 transition hover:text-white">
                    مشاهده پلن‌ها ←
                </button>
            </div>

            <button class="flex w-full items-center gap-3 rounded-xl p-2 text-right transition hover:bg-gray-100 dark:hover:bg-gray-800">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 text-sm font-bold text-white">
                    ع
                </div>
                <div class="min-w-0 flex-1">
                    <p class="truncate text-sm font-bold">علی رضایی</p>
                    <p class="mt-1 truncate text-xs text-gray-500 dark:text-gray-400">مدیر سیستم</p>
                </div>
                <svg class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m9 18 6-6-6-6"/>
                </svg>
            </button>
        </div>
    </aside>

    <!-- Main Content -->
    @yield('content')


</div>

<script>
    // Theme
    const root = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');

    try {
        const savedTheme = localStorage.getItem('nexora-theme');
        if (savedTheme === 'light') root.classList.remove('dark');
        if (savedTheme === 'dark') root.classList.add('dark');
    } catch (error) {}

    function updateThemeIcon() {
        const isDark = root.classList.contains('dark');

        themeIcon.innerHTML = isDark
            ? '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/><circle cx="12" cy="12" r="4"/>'
            : '<path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0112.75 21 9.75 9.75 0 013.002 11.25 9.718 9.718 0 019 2.248 9.75 9.75 0 0021.752 15.002z"/>';
    }

    themeToggle.addEventListener('click', () => {
        root.classList.toggle('dark');

        try {
            localStorage.setItem(
                'nexora-theme',
                root.classList.contains('dark') ? 'dark' : 'light'
            );
        } catch (error) {}

        updateThemeIcon();
    });

    updateThemeIcon();

    // Mobile Sidebar
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const openSidebar = document.getElementById('openSidebar');
    const closeSidebar = document.getElementById('closeSidebar');

    function showSidebar() {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function hideSidebar() {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    openSidebar.addEventListener('click', showSidebar);
    closeSidebar.addEventListener('click', hideSidebar);
    overlay.addEventListener('click', hideSidebar);

    sidebar.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', hideSidebar);
    });
</script>

</body>
</html>
