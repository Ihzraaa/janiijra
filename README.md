# 💛 Website Pacarku yang Gemash

Website romantis dengan Laravel & Tailwind CSS yang berisi games, puisi, gallery, dan pesan spesial untuk pacar tercinta! 🌼

## ✨ Fitur

- 🏠 **Halaman Home** - Landing page dengan quote romantis dan love counter
- 🧩 **Mini Games**:
  - Puzzle Geser (3x3 sliding puzzle) - FULLY FUNCTIONAL ✅
  - Tebak Kata (word guessing game tentang pasangan) - FULLY FUNCTIONAL ✅
  - Memory Card (matching card game) - FULLY FUNCTIONAL ✅
- ✍️ **Halaman Puisi** - Koleksi puisi romantis dengan animasi bunga
- 📸 **Gallery** - Grid foto dengan lightbox viewer
- 💌 **Pesan Spesial** - Pesan romantis dengan animasi bunga jatuh

## 🎨 Tema Desain

- Background: Kuning pastel lembut (#FFF8C7)
- Aksen: Kuning cerah (#F9E65A)
- Font: Playful & Friendly
- Animasi: Bunga melayang, hover effects, pulse animations

## 📋 Requirement

- PHP >= 8.2
- Composer
- Node.js & NPM
- Database (MySQL/PostgreSQL/SQLite)

## 🚀 Cara Install & Menjalankan

### 1. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies  
npm install
```

### 2. Setup Database

Untuk SQLite (paling simple):
```bash
# Buat file database
New-Item database\database.sqlite -ItemType File -Force

# Run migrations (optional, tidak ada table untuk project ini)
php artisan migrate
```

### 3. Generate App Key

```bash
php artisan key:generate
```

### 4. Build & Run

**Opsi 1: Development (Recommended untuk coding)**
```bash
# Terminal 1: Run Laravel
php artisan serve

# Terminal 2: Run Vite (hot reload)
npm run dev
```

**Opsi 2: Production Build**
```bash
# Build assets
npm run build

# Run Laravel
php artisan serve
```

### 5. Buka Browser

Akses: `http://localhost:8000`

## 🎮 Customization

### 1. Ganti Tanggal Jadian

Edit `resources/views/home.blade.php`, line ~85:

```javascript
const startDate = new Date('2024-01-01T00:00:00'); // Ganti dengan tanggal jadian kalian
```

### 2. Tambah Foto di Gallery

**Cara 1: Gunakan Foto Asli**
1. Buat folder `public/images/`
2. Upload foto dengan nama `photo1.jpg`, `photo2.jpg`, dst.
3. Edit `resources/views/gallery/index.blade.php`:

Ganti baris ini (sekitar line 15):
```blade
@for($i = 1; $i <= 12; $i++)
<div class="...">
    <!-- Hapus bagian emoji, uncomment bagian img -->
    <img src="/images/photo{{ $i }}.jpg" alt="Photo {{ $i }}" class="w-full h-full object-cover">
</div>
@endfor
```

Dan di lightbox (sekitar line 75):
```javascript
content.innerHTML = `<img src="/images/photo${currentImage}.jpg" alt="Photo ${currentImage}" class="max-w-full max-h-screen rounded-xl">`;
```

### 3. Edit Puisi

Edit `resources/views/poem/index.blade.php` - tambah/ubah puisi sesuai keinginan.

### 4. Edit Pesan Romantis

Edit `resources/views/message/index.blade.php` - ubah pesan dan timing animasi.

### 5. Customisasi Warna

Edit `tailwind.config.js`:

```javascript
colors: {
  'yellow-pastel': '#FFF8C7',  // Background utama
  'yellow-accent': '#F9E65A',  // Warna aksen tombol
  'brown-text': '#7A4F2E',     // Warna text
},
```

### 6. Edit Kata di Game Tebak Kata

Edit `resources/views/games/tebakkata.blade.php`, sekitar line 57:

```javascript
const words = [
    { word: 'SAYANG', hint: 'Kata yang sering aku panggil untuk kamu 💛' },
    // Tambah kata-kata baru di sini
];
```

## 📁 Struktur Project

```
love-website/
├── app/Http/Controllers/     # Controllers
│   ├── HomeController.php
│   ├── GameController.php
│   ├── PoemController.php
│   ├── GalleryController.php
│   └── MessageController.php
├── resources/
│   ├── css/app.css          # Tailwind CSS
│   └── views/               # Blade templates
│       ├── layouts/app.blade.php
│       ├── home.blade.php
│       ├── games/           # Game views
│       ├── poem/
│       ├── gallery/
│       └── message/
├── routes/web.php           # Routes
├── tailwind.config.js       # Tailwind config
└── vite.config.js          # Vite config
```

## 🎯 Fitur Games (100% Fungsional)

### 🧩 Puzzle Geser
- Algoritma shuffle yang memastikan puzzle solvable
- Click tile untuk geser
- Counter langkah otomatis
- Win detection
- Reset button

### 🔤 Tebak Kata
- 8 kata tentang pasangan dengan hint
- Virtual keyboard interaktif
- Wrong guess limit (6 kesalahan)
- Score tracking
- Auto next word

### 🃏 Memory Card
- 16 kartu (8 pasang emoji bunga)
- Flip animation 3D
- Match detection otomatis
- Counter attempts
- Win celebration

## 💡 Tips Development

1. **Hot Reload**: Gunakan `npm run dev` agar perubahan langsung terlihat
2. **Debug**: Check browser console (F12) untuk error JavaScript
3. **Tailwind**: Gunakan class Tailwind yang sudah ada, lihat di `tailwind.config.js`
4. **Foto**: Compress foto sebelum upload agar loading cepat (gunakan TinyPNG)

## 🌐 Deployment

### Shared Hosting (cPanel)

1. Build production:
   ```bash
   npm run build
   ```

2. Upload semua file KECUALI:
   - `node_modules/`
   - `.env`
   - `storage/` dan `bootstrap/cache/`

3. Di server:
   - Buat `.env` baru (copy dari `.env.example`)
   - Set permission 755 untuk `storage/` dan `bootstrap/cache/`
   - Run `composer install --no-dev`
   - Run `php artisan key:generate`
   - Set document root ke folder `public/`

4. Setup database di cPanel dan update `.env`

### Vercel/Railway (Advanced)

Untuk deployment ke platform modern, bisa menggunakan Docker atau serverless configuration.

## 🔧 Troubleshooting

### "Page not found" atau "500 error"
- Pastikan sudah run `php artisan key:generate`
- Check permission folder `storage/` dan `bootstrap/cache/`
- Pastikan `.env` file ada

### CSS tidak muncul
- Run `npm run build` atau `npm run dev`
- Clear browser cache
- Check apakah Vite server running

### Game tidak jalan
- Buka browser console (F12) untuk lihat error JavaScript
- Pastikan sudah include `@yield('scripts')` di layout

### Foto tidak muncul di Gallery
- Pastikan folder `public/images/` ada
- Pastikan nama file sesuai: `photo1.jpg`, `photo2.jpg`, dst.
- Check file extension (harus `.jpg` atau ubah di code)

## ❤️ Personalisasi Lebih Lanjut

### Tambah Halaman Baru

1. Buat Controller:
   ```bash
   php artisan make:controller NamaController
   ```

2. Tambah route di `routes/web.php`:
   ```php
   Route::get('/halaman-baru', [NamaController::class, 'index']);
   ```

3. Buat view di `resources/views/`

4. Tambah link di navigation (`layouts/app.blade.php`)

### Tambah Animasi

Edit `tailwind.config.js` untuk custom animations atau tambah CSS di `resources/css/app.css`

## 📝 Catatan

- **Love Counter**: Otomatis menghitung waktu sejak tanggal jadian
- **Animasi Bunga**: Ada di semua halaman untuk efek romantis
- **Responsive**: Semua halaman responsive untuk mobile & desktop
- **Interactive**: Click effect, hover animations, dll.

## 🎁 Bonus Features

- ✅ Falling flowers animation
- ✅ Floating flowers background
- ✅ Interactive hearts on click (halaman Message)
- ✅ Smooth page transitions
- ✅ Keyboard navigation (Gallery lightbox)
- ✅ Auto-shuffle puzzle algorithm
- ✅ Progressive message reveal (Message page)

---

**❤️ Dibuat dengan cinta untuk pacar tercinta!**

**Semoga dia suka! 💛🌼🌸**

## 📞 Support

Jika ada yang ingin ditambah atau diubah:
1. Edit file blade yang sesuai
2. Refresh browser
3. Enjoy! 🎉

**Happy Coding & Happy Loving! 💕**
