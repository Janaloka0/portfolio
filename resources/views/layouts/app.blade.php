<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marwan Suhendra — Desainer Grafis</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap');
        * { font-family: 'Inter', sans-serif; }
        html { scroll-behavior: smooth; }
        .grain {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-[#0a0a0a] text-white antialiased">

    <header class="fixed top-0 w-full z-50 bg-[#0a0a0a]/80 backdrop-blur-md border-b border-white/5">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <span class="font-black text-lg tracking-tight">
                <span class="text-[#FF3BFF]">M</span>arwan
                <span class="text-[#ECFF51]">.</span>
            </span>
            <nav class="hidden md:flex gap-8 text-sm text-white/50">
                <a href="#tentang" class="hover:text-white transition">Tentang</a>
                <a href="#keahlian" class="hover:text-white transition">Keahlian</a>
                <a href="#proyek" class="hover:text-white transition">Proyek</a>
                <a href="#kontak" class="hover:text-white transition">Kontak</a>
            </nav>
            <a href="#kontak" class="text-xs bg-[#ECFF51] text-black font-semibold px-4 py-2 rounded-full hover:bg-white transition">
                Hire Me
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-white/5 py-8 text-center text-sm text-white/30">
        © {{ date('Y') }} Marwan Suhendra — Crafted with passion.
    </footer>

</body>
</html>