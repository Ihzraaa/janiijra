@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="text-center mb-8">
        <div class="text-6xl mb-4 animate-bounce-soft">🧩</div>
        <h2 class="text-4xl font-bold text-text mb-2">
            Puzzle Geser
        </h2>
    </div>

    <div class="card-cute p-8">
        <!-- Game Info -->
        <div class="flex justify-between items-center mb-6">
            <div class="text-text">
                <span class="font-bold">Langkah:</span> <span id="moves" class="text-yellow-warm text-2xl">0</span>
            </div>
            <button onclick="resetGame()" class="btn-cute">
                🔄 Reset
            </button>
        </div>

        <!-- Puzzle Board -->
        <div id="puzzle" class="grid grid-cols-3 gap-2 mb-6 max-w-md mx-auto">
            <!-- Tiles akan di-generate oleh JavaScript -->
        </div>

        <!-- Win Message -->
        <div id="winMessage" class="hidden text-center">
            <div class="text-6xl mb-4 animate-bounce">🎉</div>
            <h3 class="text-3xl font-bold text-text mb-2">Selamat! Kamu Berhasil! 💛</h3>
            <p class="text-text/70 mb-4">Langkah: <span id="finalMoves"></span></p>
            <button onclick="resetGame()" class="btn-cute">
                Main Lagi
            </button>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('games.index') }}" class="text-text hover:text-yellow-warm transition font-medium">
                ← Kembali ke Games
            </a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let tiles = [];
    let emptyIndex = 8;
    let moves = 0;

    function initPuzzle() {
        tiles = [1, 2, 3, 4, 5, 6, 7, 8, 0];
        shufflePuzzle();
        renderPuzzle();
        moves = 0;
        updateMoves();
        document.getElementById('winMessage').classList.add('hidden');
    }

    function shufflePuzzle() {
        // Shuffle dengan memastikan puzzle solvable
        let shuffleCount = 100;
        for (let i = 0; i < shuffleCount; i++) {
            const movableTiles = getMovableTiles();
            const randomTile = movableTiles[Math.floor(Math.random() * movableTiles.length)];
            swapTiles(randomTile, emptyIndex, false);
        }
    }

    function getMovableTiles() {
        const movable = [];
        const row = Math.floor(emptyIndex / 3);
        const col = emptyIndex % 3;

        // Check up
        if (row > 0) movable.push(emptyIndex - 3);
        // Check down
        if (row < 2) movable.push(emptyIndex + 3);
        // Check left
        if (col > 0) movable.push(emptyIndex - 1);
        // Check right
        if (col < 2) movable.push(emptyIndex + 1);

        return movable;
    }

    function renderPuzzle() {
        const puzzleDiv = document.getElementById('puzzle');
        puzzleDiv.innerHTML = '';

        tiles.forEach((tile, index) => {
            const tileDiv = document.createElement('div');
            
            if (tile === 0) {
                tileDiv.className = 'aspect-square bg-yellow-100 rounded-lg';
            } else {
                tileDiv.className = 'aspect-square bg-gradient-to-br from-yellow-soft to-yellow-warm rounded-2xl shadow-lg flex items-center justify-center text-4xl font-bold text-text cursor-pointer hover:scale-105 transition-transform';
                tileDiv.textContent = tile;
                tileDiv.onclick = () => moveTile(index);
            }

            puzzleDiv.appendChild(tileDiv);
        });
    }

    function moveTile(index) {
        const movableTiles = getMovableTiles();
        
        if (movableTiles.includes(index)) {
            swapTiles(index, emptyIndex, true);
            
            if (checkWin()) {
                setTimeout(() => {
                    document.getElementById('finalMoves').textContent = moves;
                    document.getElementById('winMessage').classList.remove('hidden');
                }, 300);
            }
        }
    }

    function swapTiles(index1, index2, countMove) {
        [tiles[index1], tiles[index2]] = [tiles[index2], tiles[index1]];
        emptyIndex = index1;
        renderPuzzle();
        
        if (countMove) {
            moves++;
            updateMoves();
        }
    }

    function updateMoves() {
        document.getElementById('moves').textContent = moves;
    }

    function checkWin() {
        for (let i = 0; i < 8; i++) {
            if (tiles[i] !== i + 1) return false;
        }
        return tiles[8] === 0;
    }

    function resetGame() {
        initPuzzle();
    }

    // Initialize on page load
    initPuzzle();
</script>
@endsection
