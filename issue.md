# 🚀 Issue: Setup Laravel 11 dengan Livewire 4, TailwindCSS, dan MySQL

## Deskripsi

Instalasi fresh Laravel 11 di folder ini (`livewire-island`) dengan stack modern:
- **Laravel 11** sebagai backend framework
- **Livewire 4** untuk reaktivitas UI tanpa SPA penuh
- **TailwindCSS** untuk styling
- **MySQL** sebagai database

---

## ✅ Checklist Implementasi

### 1. Instalasi Laravel 11
- Install Laravel 11 via Composer ke folder saat ini
- Pastikan tidak ada konflik dengan folder yang sudah ada

### 2. Konfigurasi Database MySQL
- Set koneksi MySQL di file `.env`
- Sesuaikan `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- Jalankan `php artisan migrate` untuk memastikan koneksi berhasil

### 3. Instalasi & Konfigurasi Livewire 4
- Install package `livewire/livewire` via Composer
- Jalankan perintah publish assets Livewire jika diperlukan
- Pastikan tag `@livewireStyles` dan `@livewireScripts` tersedia di layout utama

### 4. Instalasi & Konfigurasi TailwindCSS
- Install TailwindCSS via NPM (beserta `postcss` dan `autoprefixer`)
- Inisialisasi config Tailwind (`tailwind.config.js`)
- Konfigurasi `content` path di `tailwind.config.js` agar mencakup file Blade dan Livewire
- Import Tailwind directives ke dalam file CSS utama (`app.css`)
- Pastikan Vite sudah dikonfigurasi untuk mengkompilasi assets

### 5. Verifikasi & Testing
- Jalankan `npm run dev` dan `php artisan serve`
- Buat satu Livewire component sederhana sebagai smoke test
- Pastikan component ter-render dengan benar dan styling Tailwind aktif

---

## 📋 Catatan Teknis

- Gunakan **XAMPP** sebagai environment lokal (sudah tersedia)
- Folder target: `c:\xampp\htdocs\belajar-livewire4\livewire-island`
- Gunakan **Vite** (sudah built-in di Laravel 11) sebagai bundler asset
- Livewire 4 memerlukan **Laravel 11** minimum — pastikan versi kompatibel

---

## 🎯 Definition of Done

- [ ] Laravel 11 terinstall dan berjalan tanpa error
- [ ] Koneksi ke MySQL berhasil (`php artisan migrate` sukses)
- [ ] Livewire 4 terinstall dan dapat membuat component
- [ ] TailwindCSS aktif dan class utility dapat digunakan di Blade template
- [ ] Smoke test component Livewire berjalan dengan benar
