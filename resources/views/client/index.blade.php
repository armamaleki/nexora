@extends('components.layouts.client.index')
@section('content')
    <div class="site-grid relative overflow-hidden">
        <div class="pointer-events-none absolute -top-28 right-[38%] h-96 w-96 rounded-full purple-orb blur-2xl"></div>
        <div class="pointer-events-none absolute top-64 -left-36 h-96 w-96 rounded-full purple-orb blur-2xl"></div>
        <main id="home" class="relative z-10 mx-auto grid max-w-[1400px] items-center gap-14 px-5 pb-20 pt-10 lg:grid-cols-[1.08fr_.92fr] lg:gap-12 lg:px-10 lg:pb-24 lg:pt-14">
            <!-- Dashboard preview -->
            <div id="demo" class="relative order-2 lg:order-1">
                <div class="absolute -inset-5 rounded-[2.5rem] purple-orb blur-xl"></div>
                <div class="dashboard-shell relative rounded-[1.8rem] border border-violet-500/30 p-2 shadow-glow">
                    <div class="mock-bg overflow-hidden rounded-[1.35rem] border border-violet-500/15">
                        <div class="flex items-center justify-between border-b border-violet-500/15 px-4 py-3 sm:px-5">
                            <div class="flex items-center gap-2">
                                <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-gradient-to-br from-violet-400 to-purple-700 text-xs font-black text-white">N</span>
                                <span class="text-sm font-bold">Nexora <span class="text-violet-500">CRM</span></span>
                            </div>
                            <div class="hidden w-40 items-center gap-2 rounded-lg border border-violet-500/10 bg-black/[.03] px-3 py-2 text-[10px] sm:flex dark:bg-white/[.03]">
                                <i data-lucide="search" class="h-3 w-3 mock-muted"></i><span class="mock-muted">جست‌وجو...</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] font-semibold">آرمان</span>
                                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-gradient-to-br from-fuchsia-400 to-violet-700 text-[10px] font-bold text-white">A</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-[76px_1fr] sm:grid-cols-[110px_1fr]">
                            <aside class="border-l border-violet-500/10 p-2 sm:p-3">
                                <div class="mb-2 flex items-center gap-2 rounded-lg bg-violet-600 px-2 py-2 text-[9px] font-semibold text-white sm:text-[10px]"><i data-lucide="layout-dashboard" class="h-3.5 w-3.5"></i><span>داشبورد</span></div>
                                <div class="space-y-1.5 text-[9px] mock-muted sm:text-[10px]">
                                    <div class="flex items-center gap-2 rounded-lg px-2 py-2"><i data-lucide="users" class="h-3.5 w-3.5"></i><span>مشتریان</span></div>
                                    <div class="flex items-center gap-2 rounded-lg px-2 py-2"><i data-lucide="handshake" class="h-3.5 w-3.5"></i><span>معاملات</span></div>
                                    <div class="flex items-center gap-2 rounded-lg px-2 py-2"><i data-lucide="check-square" class="h-3.5 w-3.5"></i><span>فعالیت‌ها</span></div>
                                    <div class="flex items-center gap-2 rounded-lg px-2 py-2"><i data-lucide="calendar-days" class="h-3.5 w-3.5"></i><span>وظایف</span></div>
                                    <div class="flex items-center gap-2 rounded-lg px-2 py-2"><i data-lucide="chart-no-axes-combined" class="h-3.5 w-3.5"></i><span>گزارش‌ها</span></div>
                                    <div class="flex items-center gap-2 rounded-lg px-2 py-2"><i data-lucide="settings" class="h-3.5 w-3.5"></i><span>تنظیمات</span></div>
                                </div>
                            </aside>

                            <div class="min-w-0 p-3 sm:p-4">
                                <div class="mb-3 flex items-center justify-between">
                                    <div><h2 class="text-xs font-bold sm:text-sm">نمای کلی کسب‌وکار</h2><p class="mt-1 text-[9px] mock-muted sm:text-[10px]">خوش آمدی! وضعیت امروزت اینجاست.</p></div>
                                    <span class="rounded-lg border border-violet-500/15 px-2 py-1 text-[9px] mock-muted">۷ روز اخیر⌄</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2 sm:grid-cols-4">
                                    <div class="mock-card rounded-xl border p-2.5">
                                        <div class="mb-2 flex h-7 w-7 items-center justify-center rounded-lg bg-violet-500/15 text-violet-500"><i data-lucide="users" class="h-4 w-4"></i></div>
                                        <p class="text-[9px] mock-muted">کل مشتریان</p><div class="mt-1 text-sm font-extrabold sm:text-base">۱۲۸</div><p class="mt-1 text-[9px] text-emerald-500">↗ ۱۲٪ رشد</p>
                                    </div>
                                    <div class="mock-card rounded-xl border p-2.5">
                                        <div class="mb-2 flex h-7 w-7 items-center justify-center rounded-lg bg-blue-500/15 text-blue-500"><i data-lucide="handshake" class="h-4 w-4"></i></div>
                                        <p class="text-[9px] mock-muted">معاملات باز</p><div class="mt-1 text-sm font-extrabold sm:text-base">۲۴</div><p class="mt-1 text-[9px] text-emerald-500">↗ ۸٪ رشد</p>
                                    </div>
                                    <div class="mock-card rounded-xl border p-2.5">
                                        <div class="mb-2 flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-500/15 text-emerald-500"><i data-lucide="wallet" class="h-4 w-4"></i></div>
                                        <p class="text-[9px] mock-muted">درآمد کل</p><div class="mt-1 text-sm font-extrabold sm:text-base">۴۲.۵M</div><p class="mt-1 text-[9px] text-emerald-500">↗ ۱۵٪ رشد</p>
                                    </div>
                                    <div class="mock-card rounded-xl border p-2.5">
                                        <div class="mb-2 flex h-7 w-7 items-center justify-center rounded-lg bg-pink-500/15 text-pink-500"><i data-lucide="calendar-check" class="h-4 w-4"></i></div>
                                        <p class="text-[9px] mock-muted">وظایف امروز</p><div class="mt-1 text-sm font-extrabold sm:text-base">۷</div><p class="mt-1 text-[9px] text-rose-500">۳ مورد فوری</p>
                                    </div>
                                </div>

                                <div class="mt-3 grid gap-3 sm:grid-cols-[1.35fr_.8fr]">
                                    <div class="mock-card rounded-xl border p-3">
                                        <div class="mb-3 flex items-center justify-between"><h3 class="text-[10px] font-bold sm:text-xs">قیف فروش</h3><span class="text-[9px] mock-muted">این ماه</span></div>
                                        <div class="grid grid-cols-4 gap-1.5 text-center text-[8px] sm:text-[9px]">
                                            <div><div class="rounded-t-md bg-violet-500/20 py-2 font-semibold text-violet-500">سرنخ جدید</div><div class="rounded-b-md bg-violet-500 py-2 font-bold text-white">۸</div></div>
                                            <div><div class="rounded-t-md bg-blue-500/20 py-2 font-semibold text-blue-500">در بررسی</div><div class="rounded-b-md bg-blue-500 py-2 font-bold text-white">۵</div></div>
                                            <div><div class="rounded-t-md bg-amber-500/20 py-2 font-semibold text-amber-500">پیشنهاد</div><div class="rounded-b-md bg-amber-500 py-2 font-bold text-white">۵</div></div>
                                            <div><div class="rounded-t-md bg-emerald-500/20 py-2 font-semibold text-emerald-500">نهایی شده</div><div class="rounded-b-md bg-emerald-500 py-2 font-bold text-white">۳</div></div>
                                        </div>
                                        <div class="mt-4 space-y-2">
                                            <div class="flex items-center justify-between text-[9px]"><span class="mock-muted">شرکت آریا</span><span class="font-semibold">۱۲,۰۰۰,۰۰۰ تومان</span></div>
                                            <div class="h-1.5 overflow-hidden rounded-full bg-violet-500/10"><div class="h-full w-[78%] rounded-full bg-violet-500"></div></div>
                                            <div class="flex items-center justify-between text-[9px]"><span class="mock-muted">توسعه‌گران نوین</span><span class="font-semibold">۸,۵۰۰,۰۰۰ تومان</span></div>
                                            <div class="h-1.5 overflow-hidden rounded-full bg-violet-500/10"><div class="h-full w-[53%] rounded-full bg-blue-500"></div></div>
                                        </div>
                                    </div>
                                    <div class="mock-card rounded-xl border p-3">
                                        <div class="mb-3 flex items-center justify-between"><h3 class="text-[10px] font-bold sm:text-xs">فعالیت‌های اخیر</h3><i data-lucide="ellipsis" class="h-4 w-4 mock-muted"></i></div>
                                        <div class="space-y-3">
                                            <div class="flex gap-2"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-violet-500/15 text-violet-500"><i data-lucide="phone" class="h-3 w-3"></i></span><div><p class="text-[9px] font-semibold">تماس با شرکت آریا</p><p class="mt-1 text-[8px] mock-muted">۲۵ دقیقه پیش</p></div></div>
                                            <div class="flex gap-2"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-blue-500/15 text-blue-500"><i data-lucide="mail" class="h-3 w-3"></i></span><div><p class="text-[9px] font-semibold">ارسال پیشنهاد قیمت</p><p class="mt-1 text-[8px] mock-muted">۱ ساعت پیش</p></div></div>
                                            <div class="flex gap-2"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-emerald-500/15 text-emerald-500"><i data-lucide="check" class="h-3 w-3"></i></span><div><p class="text-[9px] font-semibold">تکمیل پیگیری مشتری</p><p class="mt-1 text-[8px] mock-muted">۳ ساعت پیش</p></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 flex items-center justify-between rounded-xl border border-violet-500/15 bg-violet-500/[.06] px-3 py-2.5">
                                    <div class="flex items-center gap-2"><span class="flex h-7 w-7 items-center justify-center rounded-lg bg-violet-500 text-white"><i data-lucide="sparkles" class="h-4 w-4"></i></span><div><p class="text-[9px] font-bold sm:text-[10px]">همه‌چیز تحت کنترل است!</p><p class="mt-0.5 text-[8px] mock-muted">۳ پیگیری برای امروز برنامه‌ریزی شده</p></div></div>
                                    <i data-lucide="arrow-left" class="h-4 w-4 text-violet-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-5 -right-3 hidden items-center gap-3 rounded-2xl border glass p-3 shadow-xl sm:flex">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-500"><i data-lucide="trending-up" class="h-5 w-5"></i></span>
                    <div><p class="text-xs font-bold">رشد فروش</p><p class="mt-1 text-[10px] muted">همه آمارها یک‌جا</p></div>
                </div>
            </div>

            <!-- Copy -->
            <div class="order-1 text-right lg:order-2">
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-violet-500/25 bg-violet-500/[.08] px-4 py-2 text-xs font-semibold text-violet-500 sm:text-sm">
                    <span class="relative flex h-2 w-2"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-violet-400 opacity-60"></span><span class="relative inline-flex h-2 w-2 rounded-full bg-violet-500"></span></span>
                    CRM متن‌باز مبتنی بر Laravel
                    <i data-lucide="github" class="h-4 w-4"></i>
                </div>
                <h1 class="hero-title text-5xl font-black leading-[1.35] sm:text-6xl xl:text-7xl">مدیریت مشتری،<br><span class="gradient-text">ساده‌تر از همیشه</span></h1>
                <h2 class="mt-4 text-xl font-bold leading-relaxed sm:text-2xl">با <span class="text-violet-500">Nexora CRM</span> ارتباط‌ها را به فرصت تبدیل کن.</h2>
                <p class="muted mt-5 max-w-xl text-base leading-8 sm:text-lg">
                    یک سیستم مدیریت ارتباط با مشتری مدرن و متن‌باز، ساخته‌شده با Laravel؛ برای سامان‌دهی مشتریان، پیگیری فروش و مدیریت فعالیت‌های تیم در یک فضای یکپارچه.
                </p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="#docs" class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-violet-600 to-purple-500 px-6 py-4 text-sm font-bold text-white shadow-lg shadow-violet-900/25 transition hover:-translate-y-0.5 hover:shadow-violet-700/30">
                        <i data-lucide="github" class="h-5 w-5"></i> دریافت پروژه از گیت‌هاب
                    </a>
                    <a href="#demo" class="inline-flex items-center justify-center gap-2 rounded-xl border border-violet-500/60 px-6 py-4 text-sm font-bold text-violet-500 transition hover:bg-violet-500/10">
                        مشاهده امکانات <i data-lucide="arrow-left" class="h-4 w-4"></i>
                    </a>
                </div>
                <div class="mt-9 flex flex-wrap items-center gap-x-7 gap-y-4 border-t border-violet-500/15 pt-6">
                    <div class="flex items-center gap-2.5"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-violet-500/10 text-violet-500"><i data-lucide="code-2" class="h-5 w-5"></i></span><div><p class="text-xs font-bold">متن‌باز و رایگان</p><p class="muted mt-1 text-[10px]">قابل توسعه</p></div></div>
                    <div class="flex items-center gap-2.5"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-rose-500/10 text-rose-500"><i data-lucide="layers-3" class="h-5 w-5"></i></span><div><p class="text-xs font-bold">ساخته‌شده با Laravel</p><p class="muted mt-1 text-[10px]">ساختار استاندارد</p></div></div>
                    <div class="flex items-center gap-2.5"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-500"><i data-lucide="shield-check" class="h-5 w-5"></i></span><div><p class="text-xs font-bold">مناسب تیم‌ها</p><p class="muted mt-1 text-[10px]">مدیریت یکپارچه</p></div></div>
                </div>
            </div>
        </main>
    </div>

    <!-- Features -->
    <section id="features" class="relative border-t border-violet-500/10 px-5 py-16 lg:px-10 lg:py-20">
        <div class="mx-auto max-w-[1400px]">
            <div class="mx-auto mb-10 max-w-2xl text-center">
                <span class="text-xs font-bold tracking-widest text-violet-500">امکانات NEXORA</span>
                <h2 class="mt-3 text-3xl font-extrabold sm:text-4xl">چرا <span class="gradient-text">Nexora CRM</span>؟</h2>
                <div class="mx-auto mt-4 h-1 w-12 rounded-full bg-violet-500"></div>
                <p class="muted mt-4 leading-7">ابزارهایی که برای شناخت بهتر مشتری، پیگیری دقیق‌تر و رشد فروش به آن‌ها نیاز داری.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                <article class="feature-card rounded-2xl border p-5">
                    <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/15 text-violet-500"><i data-lucide="users" class="h-6 w-6"></i></span>
                    <h3 class="font-bold">مدیریت مشتریان</h3><p class="muted mt-3 text-sm leading-6">اطلاعات تماس، شرکت‌ها، برچسب‌ها و تاریخچه ارتباط با مشتریان.</p>
                </article>
                <article class="feature-card rounded-2xl border p-5">
                    <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/15 text-blue-500"><i data-lucide="funnel" class="h-6 w-6"></i></span>
                    <h3 class="font-bold">قیف فروش</h3><p class="muted mt-3 text-sm leading-6">مدیریت مراحل فروش، فرصت‌ها و ارزش معاملات در یک نگاه.</p>
                </article>
                <article class="feature-card rounded-2xl border p-5">
                    <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-500"><i data-lucide="calendar-check" class="h-6 w-6"></i></span>
                    <h3 class="font-bold">وظایف و پیگیری</h3><p class="muted mt-3 text-sm leading-6">برنامه‌ریزی کارها، یادآوری پیگیری‌ها و ثبت فعالیت‌های روزانه.</p>
                </article>
                <article class="feature-card rounded-2xl border p-5">
                    <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500/15 text-pink-500"><i data-lucide="chart-no-axes-combined" class="h-6 w-6"></i></span>
                    <h3 class="font-bold">گزارش‌های کاربردی</h3><p class="muted mt-3 text-sm leading-6">نمای کلی از عملکرد فروش، فرصت‌ها و فعالیت‌های تیم.</p>
                </article>
                <article class="feature-card rounded-2xl border p-5">
                    <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-500/15 text-amber-500"><i data-lucide="panels-top-left" class="h-6 w-6"></i></span>
                    <h3 class="font-bold">رابط کاربری مدرن</h3><p class="muted mt-3 text-sm leading-6">تجربه‌ای روان با پشتیبانی از حالت روشن و تاریک.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="docs" class="px-5 pb-16 lg:px-10 lg:pb-20">
        <div class="glass mx-auto flex max-w-[1400px] flex-col items-start justify-between gap-6 rounded-3xl border p-7 sm:p-10 md:flex-row md:items-center">
            <div class="max-w-2xl">
                <span class="text-sm font-bold text-violet-500">شروع کن، توسعه بده، مشارکت کن</span>
                <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">CRM خودت را با Nexora بساز.</h2>
                <p class="muted mt-3 leading-7">کد پروژه را بررسی کن، در توسعه آن مشارکت داشته باش یا متناسب با نیاز کسب‌وکارت گسترشش بده.</p>
            </div>
            <a href="https://github.com/" target="_blank" rel="noreferrer" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-violet-600 px-6 py-3.5 font-bold text-white transition hover:bg-violet-500"><i data-lucide="github" class="h-5 w-5"></i> مشاهده مخزن پروژه</a>
        </div>
    </section>
@endsection
