<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jani Ijra 💕</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💕</text></svg>">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-yellow-lightest min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-yellow-light/20">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-xl font-serif font-semibold text-text-dark hover:text-yellow-medium transition-colors">
                    💛
                </a>
                <div class="flex gap-1 md:gap-2 text-sm">
                    <a href="{{ route('home') }}" class="px-3 py-2 text-text-dark hover:text-yellow-medium hover:bg-yellow-soft rounded-md transition-all">Home</a>
                    <a href="{{ route('games.index') }}" class="px-3 py-2 text-text-dark hover:text-yellow-medium hover:bg-yellow-soft rounded-md transition-all">Games</a>
                    <a href="{{ route('poem') }}" class="px-3 py-2 text-text-dark hover:text-yellow-medium hover:bg-yellow-soft rounded-md transition-all">Poetry</a>
                    <a href="{{ route('gallery') }}" class="px-3 py-2 text-text-dark hover:text-yellow-medium hover:bg-yellow-soft rounded-md transition-all">Gallery</a>
                    <a href="{{ route('message') }}" class="px-3 py-2 text-text-dark hover:text-yellow-medium hover:bg-yellow-soft rounded-md transition-all">Message</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-8 mt-12">
        <p class="text-text/70 text-sm">Made with 💛 love</p>
    </footer>

    @yield('scripts')
</body>
</html>
