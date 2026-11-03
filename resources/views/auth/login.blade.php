
<!DOCTYPE html>
<html lang="fa" dir="rtl" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0b0b14">
    <title>ورود به Nexora CRM</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50 font-sans text-gray-900 antialiased transition-colors duration-300 dark:bg-[#0b0b14] dark:text-white">

<div class="relative min-h-screen overflow-hidden">

    <!-- Background -->
    <div class="pointer-events-none absolute -right-40 -top-40 h-96 w-96 rounded-full bg-purple-500/10 blur-3xl dark:bg-purple-600/20"></div>
    <div class="pointer-events-none absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-violet-500/10 blur-3xl dark:bg-violet-600/20"></div>

    <!-- Header -->
    <header class="relative z-10 mx-auto flex max-w-[1440px] items-center justify-between px-5 py-5 sm:px-8 lg:px-12">

        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-400 via-purple-600 to-indigo-700 text-xl font-black text-white shadow-lg shadow-purple-900/20">
                N
            </span>

            <span class="text-2xl font-extrabold tracking-tight">
                Nexora <span class="text-violet-500">CRM</span>
            </span>
        </a>

        <div class="flex items-center gap-3">
            <a href="{{ url('/') }}"
               class="hidden text-sm text-gray-500 transition hover:text-violet-500 dark:text-gray-400 sm:block">
                بازگشت به صفحه اصلی
            </a>

            <button
                type="button"
                id="themeToggle"
                aria-label="تغییر تم"
                class="flex h-11 w-11 items-center justify-center rounded-xl border border-gray-200 bg-white text-gray-600 transition hover:border-violet-400 hover:text-violet-500 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
                <svg id="themeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0112.75 21 9.75 9.75 0 013.002 11.25 9.718 9.718 0 019 2.248 9.75 9.75 0 0021.752 15.002z"/>
                </svg>
            </button>
        </div>
    </header>

    <!-- Main -->
    <main class="relative z-10 mx-auto grid min-h-[calc(100vh-88px)] max-w-[1440px] items-center gap-12 px-5 pb-12 pt-5 sm:px-8 lg:grid-cols-2 lg:gap-20 lg:px-12 lg:pb-16 lg:pt-0">

        <!-- Login Form -->
        <section class="mx-auto w-full max-w-[480px]">

            <div class="rounded-3xl border border-gray-200 bg-white/90 p-6 shadow-2xl shadow-gray-200/40 backdrop-blur-xl sm:p-9 lg:p-10 dark:border-gray-800 dark:bg-gray-900/80 dark:shadow-black/20">

                <div class="mb-8">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-violet-200 bg-violet-50 px-4 py-2 text-xs font-semibold text-violet-700 dark:border-violet-500/20 dark:bg-violet-500/10 dark:text-violet-300">
                        <span class="h-2 w-2 rounded-full bg-violet-500"></span>
                        فضای کاری امن شما
                    </div>

                    <h1 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                        خوش برگشتی!
                    </h1>

                    <p class="mt-3 text-sm leading-7 text-gray-500 dark:text-gray-400 sm:text-base">
                        برای ادامه مدیریت مشتریان و کسب‌وکارت، وارد حساب کاربری خودت شو.
                    </p>
                </div>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div role="alert" class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm leading-7 text-red-700 dark:border-red-500/20 dark:bg-red-500/10 dark:text-red-300">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                @if (session('status'))
                    <div role="status" class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm leading-7 text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-300">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="post" action="{{ route('login.store') }}" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="mb-2.5 block text-sm font-semibold">
                            ایمیل
                        </label>

                        <div class="relative">
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                                    <rect x="3" y="5" width="18" height="14" rx="3"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6"/>
                                </svg>
                            </span>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                placeholder="you@example.com"
                                autocomplete="username"
                                dir="ltr"
                                required
                                autofocus
                                class="h-14 w-full rounded-xl border border-gray-200 bg-gray-50 pr-12 pl-4 text-left text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10 dark:border-gray-700 dark:bg-gray-950 dark:text-white dark:placeholder:text-gray-600"
                            >
                        </div>

                        @error('email')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="mb-2.5 flex items-center justify-between gap-3">
                            <label for="password" class="text-sm font-semibold">
                                رمز عبور
                            </label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                   class="text-xs font-semibold text-violet-600 transition hover:text-violet-500 dark:text-violet-400">
                                    رمز عبور را فراموش کرده‌ای؟
                                </a>
                            @endif
                        </div>

                        <div class="relative">
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                                    <rect x="4" y="10" width="16" height="11" rx="3"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10V7a4 4 0 1 1 8 0v3"/>
                                </svg>
                            </span>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="رمز عبور خود را وارد کنید"
                                autocomplete="current-password"
                                required
                                class="h-14 w-full rounded-xl border border-gray-200 bg-gray-50 pr-12 pl-12 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10 dark:border-gray-700 dark:bg-gray-950 dark:text-white dark:placeholder:text-gray-600"
                            >

                            <button
                                type="button"
                                id="togglePassword"
                                aria-label="نمایش رمز عبور"
                                aria-pressed="false"
                                class="absolute inset-y-0 left-0 flex items-center px-4 text-gray-400 transition hover:text-violet-500">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>

                        @error('password')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember -->
                    <div class="flex items-center justify-between gap-4 pt-1">
                        <label for="remember" class="flex cursor-pointer items-center gap-2.5 text-sm text-gray-500 dark:text-gray-400">
                            <input
                                id="remember"
                                name="remember"
                                type="checkbox"
                                value="1"
                                @checked(old('remember'))
                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-violet-600 accent-violet-600 focus:ring-violet-500 dark:border-gray-700 dark:bg-gray-800"
                            >
                            مرا به خاطر بسپار
                        </label>

                        <span class="flex items-center gap-1.5 text-xs text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-4 w-4 text-emerald-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                            </svg>
                            اتصال امن
                        </span>
                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="mt-2 flex h-14 w-full items-center justify-center gap-2.5 rounded-xl bg-gradient-to-l from-violet-700 to-purple-500 text-sm font-bold text-white shadow-lg shadow-violet-900/20 transition hover:-translate-y-0.5 hover:shadow-xl hover:shadow-violet-900/30 focus:outline-none focus:ring-4 focus:ring-violet-500/30 active:translate-y-0">

                        ورود به حساب کاربری

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </button>
                </form>

                <!-- Register -->
                @if (Route::has('register'))
                    <div class="mt-7 text-center text-sm">
                        <span class="text-gray-500 dark:text-gray-400">هنوز حساب کاربری نداری؟</span>
                        <a href="{{ route('register') }}" class="mr-1 font-bold text-violet-600 transition hover:text-violet-500 dark:text-violet-400">
                            ثبت‌نام کن
                        </a>
                    </div>
                @endif

                <!-- Security Note -->
                <div class="mt-7 flex items-start gap-3 rounded-xl border border-violet-200 bg-violet-50/70 p-4 dark:border-violet-500/20 dark:bg-violet-500/[.06]">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-violet-100 text-violet-600 dark:bg-violet-500/15 dark:text-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7l-8-4Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                        </svg>
                    </span>

                    <div>
                        <p class="text-xs font-bold">حریم خصوصی تو مهم است</p>
                        <p class="mt-1 text-xs leading-6 text-gray-500 dark:text-gray-400">
                            اطلاعات حساب کاربری‌ات را محرمانه نگه دار و از رمز عبور امن استفاده کن.
                        </p>
                    </div>
                </div>
            </div>

            <p class="mt-6 text-center text-xs leading-6 text-gray-500 dark:text-gray-500">
                ورود به Nexora به معنی پذیرش
                <a href="#" class="text-violet-600 hover:underline dark:text-violet-400">شرایط استفاده</a>
                و
                <a href="#" class="text-violet-600 hover:underline dark:text-violet-400">حریم خصوصی</a>
                است.
            </p>
        </section>

        <!-- Branding Panel -->
        <section class="relative hidden lg:block">
            <div class="relative mx-auto max-w-xl">

                <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-violet-200 bg-violet-50 px-4 py-2 text-sm font-medium text-violet-700 dark:border-violet-500/20 dark:bg-violet-500/[.08] dark:text-violet-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-1.9-5.8L4 11l6.1-2.2L12 3Z"/>
                    </svg>
                    مدیریت هوشمند، تجربه‌ای متفاوت
                </div>

                <h2 class="text-5xl font-black leading-[1.45] tracking-tight xl:text-6xl">
                    تمام ارتباطاتت،
                    <br>
                    <span class="bg-gradient-to-l from-violet-600 via-purple-500 to-fuchsia-400 bg-clip-text text-transparent">
                        یک قدم جلوتر.
                    </span>
                </h2>

                <p class="mt-6 max-w-lg text-base leading-9 text-gray-500 dark:text-gray-400">
                    مشتری‌ها را بهتر بشناس، فرصت‌های فروش را از دست نده و تمام فعالیت‌های کسب‌وکارت را از یک فضای منظم و یکپارچه مدیریت کن.
                </p>

                <!-- Dashboard Preview -->
                <div class="relative mt-12 rounded-3xl border border-gray-200 bg-white/80 p-5 shadow-2xl shadow-gray-200/50 backdrop-blur-xl dark:border-gray-800 dark:bg-gray-900/80 dark:shadow-black/20">

                    <div class="mb-5 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-bold">نمای کلی کسب‌وکار</p>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">خلاصه‌ای از وضعیت تیم تو</p>
                        </div>

                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-100 text-violet-600 dark:bg-violet-500/15 dark:text-violet-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                                <rect x="3" y="3" width="7" height="7" rx="2"/>
                                <rect x="14" y="3" width="7" height="7" rx="2"/>
                                <rect x="14" y="14" width="7" height="7" rx="2"/>
                                <rect x="3" y="14" width="7" height="7" rx="2"/>
                            </svg>
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-3">

                        <div class="rounded-2xl border border-violet-200 bg-violet-50/70 p-4 dark:border-violet-500/15 dark:bg-violet-500/[.06]">
                            <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-xl bg-violet-100 text-violet-600 dark:bg-violet-500/15 dark:text-violet-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="10" cy="7" r="4"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400">مشتریان</p>
                            <p class="mt-2 text-2xl font-extrabold">۱۲۸</p>
                            <p class="mt-2 text-xs text-emerald-600 dark:text-emerald-400">۱۲٪ رشد</p>
                        </div>

                        <div class="rounded-2xl border border-blue-200 bg-blue-50/70 p-4 dark:border-blue-500/15 dark:bg-blue-500/[.06]">
                            <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-500/15 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M5 7l1 13h12l1-13M9 11v5m6-5v5"/>
                                </svg>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400">معاملات باز</p>
                            <p class="mt-2 text-2xl font-extrabold">۲۴</p>
                            <p class="mt-2 text-xs text-emerald-600 dark:text-emerald-400">۸٪ رشد</p>
                        </div>

                        <div class="rounded-2xl border border-emerald-200 bg-emerald-50/70 p-4 dark:border-emerald-500/15 dark:bg-emerald-500/[.06]">
                            <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/15 dark:text-emerald-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"/>
                                    <circle cx="12" cy="12" r="9"/>
                                </svg>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400">پیگیری امروز</p>
                            <p class="mt-2 text-2xl font-extrabold">۷</p>
                            <p class="mt-2 text-xs text-emerald-600 dark:text-emerald-400">برنامه‌ریزی‌شده</p>
                        </div>
                    </div>

                    <div class="mt-4 rounded-2xl border border-gray-200 p-4 dark:border-gray-800">
                        <div class="mb-4 flex items-center justify-between">
                            <p class="text-xs font-bold">پیشرفت فرصت‌های فروش</p>
                            <span class="text-xs text-gray-500 dark:text-gray-400">این ماه</span>
                        </div>

                        <div class="flex h-3 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                            <div class="w-[34%] bg-violet-500"></div>
                            <div class="w-[27%] bg-indigo-500"></div>
                            <div class="w-[22%] bg-blue-500"></div>
                            <div class="w-[17%] bg-emerald-500"></div>
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-3 text-xs text-gray-500 dark:text-gray-400 sm:grid-cols-4">
                            <div class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-violet-500"></span>سرنخ جدید</div>
                            <div class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-indigo-500"></span>در بررسی</div>
                            <div class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-blue-500"></span>پیشنهاد</div>
                            <div class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-emerald-500"></span>نهایی‌شده</div>
                        </div>
                    </div>
                </div>

                <!-- Benefits -->
                <div class="mt-8 flex flex-wrap gap-x-6 gap-y-3 text-xs text-gray-500 dark:text-gray-400">
                    <span class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 dark:bg-emerald-500/15 dark:text-emerald-400">✓</span>
                        متن‌باز و قابل توسعه
                    </span>
                    <span class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 dark:bg-emerald-500/15 dark:text-emerald-400">✓</span>
                        ساخته‌شده با Laravel
                    </span>
                    <span class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 dark:bg-emerald-500/15 dark:text-emerald-400">✓</span>
                        طراحی واکنش‌گرا
                    </span>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
    const root = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');

    try {
        const savedTheme = localStorage.getItem('nexora-theme');

        if (savedTheme === 'light') {
            root.classList.remove('dark');
        } else if (savedTheme === 'dark') {
            root.classList.add('dark');
        }
    } catch (error) {}

    function updateThemeIcon() {
        const isDark = root.classList.contains('dark');

        themeIcon.innerHTML = isDark
            ? '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M3 12h2m14 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/><circle cx="12" cy="12" r="4"/>'
            : '<path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0112.75 21 9.75 9.75 0 013.002 11.25 9.718 9.718 0 019 2.248 9.75 9.75 0 0021.752 15.002z"/>';

        document.querySelector('meta[name="theme-color"]').content =
            isDark ? '#0b0b14' : '#f9fafb';
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

    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', () => {
        const showPassword = passwordInput.type === 'password';

        passwordInput.type = showPassword ? 'text' : 'password';
        togglePassword.setAttribute('aria-pressed', String(showPassword));
        togglePassword.setAttribute(
            'aria-label',
            showPassword ? 'مخفی کردن رمز عبور' : 'نمایش رمز عبور'
        );

        eyeIcon.innerHTML = showPassword
            ? '<path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.6 10.6a2 2 0 0 0 2.8 2.8M9.9 5.2A10.7 10.7 0 0 1 12 5c6.5 0 10 7 10 7a15.8 15.8 0 0 1-3.1 3.9M6.6 6.6C3.6 8.5 2 12 2 12s3.5 7 10 7c1.4 0 2.7-.3 3.8-.8"/>'
            : '<path stroke-linecap="round" stroke-linejoin="round" d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/>';
    });

    updateThemeIcon();
</script>

</body>
</html>
