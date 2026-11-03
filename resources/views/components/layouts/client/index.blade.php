<html lang="fa" dir="rtl" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0b0c18" />
    <title>Nexora CRM | مدیریت ارتباط با مشتری</title>
    <meta name="description" content="Nexora CRM؛ راهکاری مدرن برای مدیریت مشتریان، فرایند فروش و فعالیت‌های تیم شما." />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--    <script>--}}
{{--        tailwind = { config: { darkMode: 'class', theme: { extend: {--}}
{{--                        fontFamily: { sans: ['Vazirmatn', 'Tahoma', 'sans-serif'] },--}}
{{--                        colors: { nexora: { 400: '#b07aff', 500: '#9555f5', 600: '#7c3aed' } },--}}
{{--                        boxShadow: { glow: '0 0 60px rgba(139,92,246,.18)' }--}}
{{--                    }}}};--}}
{{--    </script>--}}

    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="min-h-screen antialiased transition-colors duration-300">
<x-layouts.client.header/>
@yield('content')
<x-layouts.client.footer/>

<script>
    const root = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeDot = document.getElementById('themeDot');
    const storedTheme = localStorage.getItem('nexora-theme');
    if (storedTheme === 'light') root.classList.remove('dark');
    if (storedTheme === 'dark') root.classList.add('dark');

    function renderThemeButton() {
        const isDark = root.classList.contains('dark');
        themeDot.innerHTML = isDark ? '<i data-lucide="moon" class="h-3 w-3"></i>' : '<i data-lucide="sun" class="h-3 w-3"></i>';
        themeToggle.querySelector(':scope > i').setAttribute('data-lucide', isDark ? 'sun' : 'moon');
        if (window.lucide) lucide.createIcons();
        document.querySelector('meta[name="theme-color"]').setAttribute('content', isDark ? '#0b0c18' : '#f8f7fc');
    }
    themeToggle.addEventListener('click', () => {
        root.classList.toggle('dark');
        localStorage.setItem('nexora-theme', root.classList.contains('dark') ? 'dark' : 'light');
        renderThemeButton();
    });

    document.getElementById('mobileMenuBtn').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
    document.querySelectorAll('#mobileMenu a').forEach(link => link.addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.add('hidden');
    }));
    if (window.lucide) lucide.createIcons();
    renderThemeButton();
</script>
</body>
</html>
