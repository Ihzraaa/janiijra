@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-16 animate-fadeIn">
        <div class="text-6xl mb-4 animate-bounce-soft">💛</div>
        <h1 class="text-5xl md:text-6xl font-bold text-text mb-4">
            Welcome, My Baby Honey Sweety Nadia Rinjani
        </h1>
        <p class="text-xl text-text/70 font-light max-w-2xl mx-auto leading-relaxed">
            In your eyes I found home, in your smile I found peace, and in your presence I found reasons to smile every day
        </p>
    </div>

    <!-- Navigation Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
        <a href="{{ route('games.index') }}" class="group">
            <div class="card-cute p-8 text-center h-full hover:scale-105 transition-transform">
                <div class="text-6xl mb-4 group-hover:animate-bounce-soft">🎮</div>
                <h3 class="text-lg font-bold text-text mb-2">Games</h3>
                <p class="text-sm text-text/70">Play together</p>
            </div>
        </a>

        <a href="{{ route('poem') }}" class="group">
            <div class="card-cute p-8 text-center h-full hover:scale-105 transition-transform">
                <div class="text-6xl mb-4 group-hover:animate-bounce-soft">📝</div>
                <h3 class="text-lg font-bold text-text mb-2">Poetry</h3>
                <p class="text-sm text-text/70">Words for you</p>
            </div>
        </a>

        <a href="{{ route('gallery') }}" class="group">
            <div class="card-cute p-8 text-center h-full hover:scale-105 transition-transform">
                <div class="text-6xl mb-4 group-hover:animate-bounce-soft">📷</div>
                <h3 class="text-lg font-bold text-text mb-2">Gallery</h3>
                <p class="text-sm text-text/70">Our memories</p>
            </div>
        </a>

        <a href="{{ route('message') }}" class="group">
            <div class="card-cute p-8 text-center h-full hover:scale-105 transition-transform">
                <div class="text-6xl mb-4 group-hover:animate-bounce-soft">💌</div>
                <h3 class="text-lg font-bold text-text mb-2">Message</h3>
                <p class="text-sm text-text/70">Special note</p>
            </div>
        </a>
    </div>

    <!-- Love Counter -->
    <div class="card-cute p-8 md:p-12 text-center max-w-3xl mx-auto">
        <h3 class="text-3xl font-bold text-text mb-2 flex items-center justify-center gap-3">
            <span class="animate-bounce-soft">💕</span>
            Our Journey Together
            <span class="animate-bounce-soft">💕</span>
        </h3>
        <p class="text-text/60 mb-6">Counting every precious moment with you</p>
        
        <!-- Couple Photo -->
        <div class="mb-8 flex justify-center">
            <div class="relative group">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden border-4 border-yellow-soft shadow-xl group-hover:scale-105 transition-transform duration-300">
                    <img src="/images/couple-photo.jpg" alt="Our Photo" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 -right-2 bg-yellow-warm text-white text-2xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg animate-bounce-soft">
                    💛
                </div>
            </div>
        </div>
        
        <div id="loveCounter" class="grid grid-cols-4 gap-4 md:gap-8">
            <div class="bg-yellow-light/30 rounded-2xl p-4">
                <div id="days" class="text-4xl md:text-5xl font-bold text-yellow-warm mb-2">0</div>
                <div class="text-xs text-text/60 uppercase tracking-wide font-medium">Days</div>
            </div>
            <div class="bg-yellow-light/30 rounded-2xl p-4">
                <div id="hours" class="text-4xl md:text-5xl font-bold text-yellow-warm mb-2">0</div>
                <div class="text-xs text-text/60 uppercase tracking-wide font-medium">Hours</div>
            </div>
            <div class="bg-yellow-light/30 rounded-2xl p-4">
                <div id="minutes" class="text-4xl md:text-5xl font-bold text-yellow-warm mb-2">0</div>
                <div class="text-xs text-text/60 uppercase tracking-wide font-medium">Minutes</div>
            </div>
            <div class="bg-yellow-light/30 rounded-2xl p-4">
                <div id="seconds" class="text-4xl md:text-5xl font-bold text-yellow-warm mb-2">0</div>
                <div class="text-xs text-text/60 uppercase tracking-wide font-medium">Seconds</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Love Counter - Ganti tanggal ini dengan tanggal jadian kalian
    const startDate = new Date('2025-06-28T00:00:00'); // Format: YYYY-MM-DD
    
    function updateCounter() {
        const now = new Date();
        const diff = now - startDate;
        
        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((diff % (1000 * 60)) / 1000);
        
        document.getElementById('days').textContent = days;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
    }
    
    updateCounter();
    setInterval(updateCounter, 1000);
</script>
@endsection
