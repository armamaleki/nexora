<!-- Header -->
<header class="relative z-10 mx-auto flex max-w-[1400px] items-center justify-between gap-5 px-5 py-5 lg:px-10">
    <a href="#" class="flex shrink-0 items-center gap-3" aria-label="Nexora home">
        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-400 via-purple-600 to-indigo-700 shadow-lg shadow-purple-900/25">
          <svg viewBox="0 0 40 40" class="h-7 w-7" fill="none" aria-hidden="true">
            <path d="M20 4 37 34H29L20 17 11 34H3L20 4Z" fill="white"/>
            <path d="M14.5 27h11" stroke="#d8b4fe" stroke-width="4" stroke-linecap="round"/>
          </svg>
        </span>
        <span class="text-2xl font-extrabold tracking-tight">Nexora <span class="text-violet-500">CRM</span></span>
    </a>

    <nav class="hidden items-center gap-8 text-sm font-medium lg:flex">
        <a class="nav-link border-b-2 border-violet-500 pb-2 text-violet-500" href="#home">صفحه اصلی</a>
        <a class="nav-link transition hover:text-violet-500" href="#features">ویژگی‌ها</a>
        <a class="nav-link transition hover:text-violet-500" href="#demo">دمو</a>
        <a class="nav-link transition hover:text-violet-500" href="#docs">مستندات</a>
        <a class="nav-link transition hover:text-violet-500" href="#about">درباره ما</a>
    </nav>

    <div class="flex shrink-0 items-center gap-3">
        <button id="themeToggle" type="button" class="soft-panel flex h-10 items-center gap-2 rounded-full border px-3 text-sm transition hover:border-violet-400" aria-label="تغییر تم" title="تغییر حالت روشن و تاریک">
            <i data-lucide="sun" class="h-4 w-4 text-amber-400"></i>
            <span id="themeDot" class="flex h-5 w-5 items-center justify-center rounded-full bg-violet-500 text-white"><i data-lucide="moon" class="h-3 w-3"></i></span>
        </button>
        <a href="https://github.com/" target="_blank" rel="noreferrer" class="hidden items-center gap-2 rounded-full border border-violet-500/70 px-5 py-2.5 text-sm font-semibold text-violet-500 transition hover:bg-violet-600 hover:text-white sm:flex">
            <i data-lucide="github" class="h-4 w-4"></i>
            دریافت از گیت‌هاب
        </a>
        <button id="mobileMenuBtn" class="soft-panel flex h-10 w-10 items-center justify-center rounded-xl border lg:hidden" aria-label="باز کردن منو"><i data-lucide="menu"></i></button>
    </div>
</header>

<div id="mobileMenu" class="relative z-20 mx-5 hidden rounded-2xl border soft-panel p-4 lg:hidden">
    <nav class="grid gap-3 text-sm">
        <a class="nav-link py-2" href="#home">صفحه اصلی</a><a class="nav-link py-2" href="#features">ویژگی‌ها</a>
        <a class="nav-link py-2" href="#demo">دمو</a><a class="nav-link py-2" href="#docs">مستندات</a><a class="nav-link py-2" href="#about">درباره ما</a>
    </nav>
</div>

