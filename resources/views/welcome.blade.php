@extends('layouts.app')

@section('content')

{{-- ===== HERO ===== --}}
<section class="min-h-screen flex items-center relative overflow-hidden pt-20">

    {{-- Background blobs --}}
    <div class="absolute top-20 left-10 w-72 h-72 bg-[#FF3BFF] rounded-full blur-[120px] opacity-20 pointer-events-none"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#5C24FF] rounded-full blur-[140px] opacity-20 pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-[#ECFF51] rounded-full blur-[160px] opacity-10 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-6 py-24 w-full">
        <div class="flex flex-col lg:flex-row items-center gap-16">

            {{-- Text --}}
            <div class="flex-1">
                <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 rounded-full px-4 py-2 text-xs text-white/60 mb-8">
                    <span class="w-2 h-2 bg-[#ECFF51] rounded-full animate-pulse"></span>
                    Tersedia untuk proyek baru
                </div>

                <h1 class="text-6xl lg:text-7xl font-black leading-[1.05] mb-6 tracking-tight">
                    Desain yang<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF3BFF] via-[#5C24FF] to-[#ECFF51]">
                        Bicara Sendiri.
                    </span>
                </h1>

                <p class="text-white/50 text-lg max-w-lg mb-10 leading-relaxed">
                    Hei, saya <span class="text-white font-semibold">Marwan Suhendra</span> — desainer grafis freelance. 
                    Saya ubah ide mentah jadi visual yang tajam, berkesan, dan punya karakter.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#proyek" class="bg-[#ECFF51] text-black font-bold px-8 py-4 rounded-full hover:scale-105 transition-transform text-sm">
                        Lihat Karya →
                    </a>
                    <a href="#kontak" class="border border-white/20 text-white px-8 py-4 rounded-full hover:bg-white/10 transition text-sm">
                        Mulai Diskusi
                    </a>
                </div>

                <div class="flex gap-10 mt-14 pt-10 border-t border-white/10">
                    <div>
                        <p class="text-3xl font-black text-white">3+</p>
                        <p class="text-xs text-white/40 mt-1">Tahun Pengalaman</p>
                    </div>
                    <div>
                        <p class="text-3xl font-black text-white">40+</p>
                        <p class="text-xs text-white/40 mt-1">Proyek Selesai</p>
                    </div>
                    <div>
                        <p class="text-3xl font-black text-white">20+</p>
                        <p class="text-xs text-white/40 mt-1">Klien Puas</p>
                    </div>
                </div>
            </div>

            {{-- Visual card --}}
            <div class="flex-1 flex justify-center">
                <div class="relative w-72 h-72 lg:w-96 lg:h-96">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#FF3BFF] via-[#5C24FF] to-[#ECFF51] rounded-3xl rotate-6 opacity-60"></div>
                    <div class="absolute inset-0 bg-gradient-to-tl from-[#ECFF51] via-[#5C24FF] to-[#FF3BFF] rounded-3xl -rotate-3 opacity-40"></div>
                    <div class="absolute inset-2 bg-[#0a0a0a] rounded-2xl flex flex-col items-center justify-center gap-3">
                        <div class="text-6xl">🎨</div>
                        <p class="text-white font-bold text-lg">Marwan Suhendra</p>
                        <p class="text-white/40 text-sm">Graphic Designer</p>
                        <div class="flex gap-2 mt-2">
                            <span class="bg-[#FF3BFF]/20 text-[#FF3BFF] text-xs px-3 py-1 rounded-full">UI/UX</span>
                            <span class="bg-[#ECFF51]/20 text-[#ECFF51] text-xs px-3 py-1 rounded-full">Branding</span>
                            <span class="bg-[#5C24FF]/40 text-white text-xs px-3 py-1 rounded-full">Visual</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===== TENTANG ===== --}}
<section id="tentang" class="py-32 relative overflow-hidden">
    <div class="absolute right-0 top-0 w-80 h-80 bg-[#FF3BFF] rounded-full blur-[150px] opacity-10 pointer-events-none"></div>
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-[#FF3BFF] text-sm font-semibold tracking-widest uppercase mb-4">Tentang Saya</p>
                <h2 class="text-4xl lg:text-5xl font-black mb-6 leading-tight">
                    Saya percaya desain<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF3BFF] to-[#5C24FF]">adalah komunikasi.</span>
                </h2>
                <p class="text-white/50 leading-relaxed mb-6">
                    Dengan pengalaman di bidang desain grafis, saya membantu brand dan individu 
                    tampil lebih profesional dan berkesan. Setiap piksel punya tujuan — itulah prinsip saya.
                </p>
                <p class="text-white/50 leading-relaxed">
                    Saya bekerja dengan pendekatan kolaboratif, mendengarkan kebutuhan klien dan 
                    menerjemahkannya menjadi visual yang relevan dan estetik.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gradient-to-br from-[#FF3BFF]/20 to-transparent border border-[#FF3BFF]/20 rounded-2xl p-6">
                    <div class="text-3xl mb-3">✦</div>
                    <h3 class="font-bold mb-2">UI/UX Design</h3>
                    <p class="text-white/40 text-sm">Interface yang intuitif dan estetik</p>
                </div>
                <div class="bg-gradient-to-br from-[#ECFF51]/10 to-transparent border border-[#ECFF51]/20 rounded-2xl p-6 mt-6">
                    <div class="text-3xl mb-3">◈</div>
                    <h3 class="font-bold mb-2">Branding</h3>
                    <p class="text-white/40 text-sm">Identitas visual yang kuat</p>
                </div>
                <div class="bg-gradient-to-br from-[#5C24FF]/20 to-transparent border border-[#5C24FF]/30 rounded-2xl p-6">
                    <div class="text-3xl mb-3">◉</div>
                    <h3 class="font-bold mb-2">Poster & Print</h3>
                    <p class="text-white/40 text-sm">Desain cetak profesional</p>
                </div>
                <div class="bg-gradient-to-br from-[#FF3BFF]/10 to-transparent border border-white/10 rounded-2xl p-6 mt-6">
                    <div class="text-3xl mb-3">⬡</div>
                    <h3 class="font-bold mb-2">Social Media</h3>
                    <p class="text-white/40 text-sm">Konten visual yang engaging</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== KEAHLIAN ===== --}}
<section id="keahlian" class="py-32 bg-white/[0.02] border-y border-white/5">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <p class="text-[#ECFF51] text-sm font-semibold tracking-widest uppercase mb-4">Keahlian</p>
            <h2 class="text-4xl lg:text-5xl font-black">Tools & Skill</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach([
                ['Adobe Photoshop', '#31A8FF', '🖼'],
                ['Adobe Illustrator', '#FF9A00', '✏️'],
                ['Figma', '#A259FF', '🎯'],
                ['Adobe InDesign', '#FF3366', '📄'],
                ['Canva', '#00C4CC', '🎨'],
                ['Adobe XD', '#FF61F6', '⚡'],
                ['CorelDRAW', '#6ab04c', '🌿'],
                ['After Effects', '#9999FF', '🎬'],
            ] as [$tool, $color, $icon])
            <div class="group bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 rounded-2xl p-6 text-center transition-all cursor-default">
                <div class="text-3xl mb-3">{{ $icon }}</div>
                <p class="text-sm font-semibold text-white/80 group-hover:text-white transition">{{ $tool }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== PROYEK ===== --}}
<section id="proyek" class="py-32 relative overflow-hidden">
    <div class="absolute left-0 bottom-0 w-96 h-96 bg-[#5C24FF] rounded-full blur-[150px] opacity-15 pointer-events-none"></div>
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <p class="text-[#5C24FF] text-sm font-semibold tracking-widest uppercase mb-4">Portofolio</p>
            <h2 class="text-4xl lg:text-5xl font-black">Proyek Pilihan</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['Branding Kafe Lokal', 'Brand Identity', 'from-[#FF3BFF] to-[#5C24FF]', 'Logo, color palette, menu design untuk kafe di Jakarta.'],
                ['UI App Kesehatan', 'UI/UX Design', 'from-[#ECFF51] to-[#00C4CC]', 'Desain antarmuka aplikasi tracking kesehatan harian.'],
                ['Poster Festival Musik', 'Print Design', 'from-[#5C24FF] to-[#FF3BFF]', 'Seri poster untuk festival musik indie tahunan.'],
            ] as [$title, $cat, $gradient, $desc])
            <div class="group relative bg-white/5 border border-white/10 rounded-3xl overflow-hidden hover:border-white/20 transition-all hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br {{ $gradient }} opacity-80 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-5xl">🎨</span>
                </div>
                <div class="p-6">
                    <span class="text-xs text-white/40 uppercase tracking-widest">{{ $cat }}</span>
                    <h3 class="font-bold text-lg mt-1 mb-2">{{ $title }}</h3>
                    <p class="text-white/50 text-sm leading-relaxed">{{ $desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== KONTAK ===== --}}
<section id="kontak" class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#FF3BFF]/5 to-transparent pointer-events-none"></div>
    <div class="max-w-3xl mx-auto px-6 text-center">
        <p class="text-[#FF3BFF] text-sm font-semibold tracking-widest uppercase mb-4">Kontak</p>
        <h2 class="text-4xl lg:text-5xl font-black mb-6">
            Punya proyek?<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF3BFF] via-[#5C24FF] to-[#ECFF51]">
                Yuk ngobrol!
            </span>
        </h2>
        <p class="text-white/50 mb-12">Saya terbuka untuk kolaborasi, freelance project, atau sekadar diskusi soal desain.</p>

        <div class="bg-white/5 border border-white/10 rounded-3xl p-8 text-left">
            <div class="grid gap-4">
                <div class="grid md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Nama kamu"
                        class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-white/30 focus:outline-none focus:border-[#FF3BFF] transition w-full">
                    <input type="email" placeholder="Email kamu"
                        class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-white/30 focus:outline-none focus:border-[#FF3BFF] transition w-full">
                </div>
                <input type="text" placeholder="Subjek / jenis proyek"
                    class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-white/30 focus:outline-none focus:border-[#FF3BFF] transition w-full">
                <textarea rows="4" placeholder="Ceritakan proyek atau ideamu..."
                    class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-white/30 focus:outline-none focus:border-[#FF3BFF] transition w-full resize-none"></textarea>
                <button class="w-full bg-gradient-to-r from-[#FF3BFF] via-[#5C24FF] to-[#ECFF51] text-black font-bold py-4 rounded-xl hover:opacity-90 transition text-sm">
                    Kirim Pesan →
                </button>
            </div>
        </div>
    </div>
</section>

@endsection