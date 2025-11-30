@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="text-center mb-8">
        <div class="text-6xl mb-4 animate-bounce-soft">✍️</div>
        <h2 class="text-4xl font-bold text-text mb-2">
            Puisi Untuk Jani
        </h2>
    </div>

    <!-- Puisi Container -->
    <div class="space-y-8">
        <!-- Puisi 1 -->
        <div class="card-cute p-8 transform hover:scale-105 transition-transform">
            <div class="text-center mb-4">
                <span class="text-5xl">🌼</span>
            </div>
            <h3 class="text-2xl font-bold text-text text-center mb-4">Rumahku</h3>
            <div class="text-lg text-text/80 leading-relaxed space-y-3">
                <p class="italic">Di matamu aku menemukan rumah,</p>
                <p class="italic">Di tawamu aku menemukan damai,</p>
                <p class="italic">Dan di hadirmu...</p>
                <p class="italic">aku menemukan alasan untuk tersenyum setiap hari. 🌼</p>
            </div>
        </div>

        <!-- Puisi 2 -->
        <div class="card-cute p-8 transform hover:scale-105 transition-transform">
            <div class="text-center mb-4">
                <span class="text-5xl">💛</span>
            </div>
            <h3 class="text-2xl font-bold text-text text-center mb-4">Cerita Favoritku</h3>
            <div class="text-lg text-text/80 leading-relaxed space-y-3">
                <p class="italic">Kamu adalah cerita yang tidak pernah bosan</p>
                <p class="italic">aku baca berulang-ulang.</p>
                <p class="italic">Setiap bab, setiap kata,</p>
                <p class="italic">selalu membuat hatiku hangat. 💛</p>
            </div>
        </div>

        <!-- Puisi 3 -->
        <div class="card-cute p-8 transform hover:scale-105 transition-transform">
            <div class="text-center mb-4">
                <span class="text-5xl">🌸</span>
            </div>
            <h3 class="text-2xl font-bold text-text text-center mb-4">Alasanku</h3>
            <div class="text-lg text-text/80 leading-relaxed space-y-3">
                <p class="italic">Di setiap pagi yang cerah,</p>
                <p class="italic">Di setiap malam yang tenang,</p>
                <p class="italic">Kamu adalah alasan kenapa</p>
                <p class="italic">aku selalu bersyukur. 🌸</p>
            </div>
        </div>

        <!-- Puisi 4 -->
        <div class="card-cute p-8 transform hover:scale-105 transition-transform">
            <div class="text-center mb-4">
                <span class="text-5xl">✨</span>
            </div>
            <h3 class="text-2xl font-bold text-text text-center mb-4">Cantikmu</h3>
            <div class="text-lg text-text/80 leading-relaxed space-y-3">
                <p class="italic">Cantik bukan hanya di wajahmu,</p>
                <p class="italic">Tapi di caramu tersenyum,</p>
                <p class="italic">Di caramu peduli,</p>
                <p class="italic">Dan di setiap hal kecil yang kamu lakukan. ✨</p>
            </div>
        </div>

        <!-- Puisi 5 -->
        <div class="card-cute p-8 transform hover:scale-105 transition-transform">
            <div class="text-center mb-4">
                <span class="text-5xl">💕</span>
            </div>
            <h3 class="text-2xl font-bold text-text text-center mb-4">Selamanya</h3>
            <div class="text-lg text-text/80 leading-relaxed space-y-3">
                <p class="italic">Jika ada yang tanya,</p>
                <p class="italic">Berapa lama aku akan menyayangimu?</p>
                <p class="italic">Jawabannya simpel:</p>
                <p class="italic">Selamanya... dan bahkan lebih dari itu. 💕</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-8">
        <a href="{{ route('home') }}" class="btn-cute inline-block">
            ← Kembali ke Home
        </a>
    </div>
</div>

<!-- Animated Flowers -->
<div class="fixed inset-0 pointer-events-none overflow-hidden" style="z-index: 1;">
    <div class="flower-floating" style="left: 15%; animation: float 3s ease-in-out infinite; animation-delay: 0s;">🌼</div>
    <div class="flower-floating" style="right: 15%; animation: float 4s ease-in-out infinite; animation-delay: 1s;">🌸</div>
    <div class="flower-floating" style="left: 50%; top: 20%; animation: float 3.5s ease-in-out infinite; animation-delay: 0.5s;">🌻</div>
</div>
@endsection
