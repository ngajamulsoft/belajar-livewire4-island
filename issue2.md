# 🚀 Issue: Buat file `resources/views/livewire/index.blade.php`

## Deskripsi

Buat halaman utama (`index.blade.php`) untuk Livewire component yang menampilkan **dashboard statistik post** beserta **tabel daftar post**. Tampilan mengacu pada file screenshot di `public/assets/screenshot/1.png` hingga `7.png`.

---

## ✅ Checklist Implementasi

### 1. Struktur Utama Layout
- Bungkus seluruh konten dalam satu `<div class="p-6 space-y-8">`
- Terdapat 2 section utama: **Stats Cards** dan **Posts Table**

### 2. Section Stats Cards
- Buat grid `grid-cols-1 md:grid-cols-2 gap-6` yang berisi card-card statistik berikut:
  - **Total Posts** → tampilkan `{{ $this->totalPostsCount }}`, ada tombol "Refresh Today Posts Count" dan tombol "Refresh" dengan `wire:click="$refresh"`
  - **Today Posts Count** → tampilkan `{{ $this->todayPostsCount }}` di dalam div border biru
  - **This Year** → tampilkan `{{ $this->yearlyPostsCount }}`, tombol "Refresh" dengan `wire:click="$refresh"`
  - **This Month** → tampilkan `{{ $this->monthlyPostsCount }}`, tombol "Refresh" dengan `wire:click="$refresh"`
- Setiap card menggunakan style: `bg-white dark:bg-zinc-900 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700`

### 3. Section Posts Table
- Buat wrapper div dengan `bg-white dark:bg-zinc-800 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700`
- Buat `<table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">`
- **Thead**: background `bg-zinc-50 dark:bg-zinc-900`, kolom: `#` dan `Title` dengan class `px-6 py-3 text-left text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase`
- **Tbody**: `divide-y divide-zinc-200 dark:divide-zinc-700`
  - Loop `@forelse ($this->posts as $post)` dengan `wire:key="post-{{ $post->id }}"` dan class hover
  - Kolom `#`: tampilkan `{{ $post->id }}`
  - Kolom `Title`: tampilkan `{{ $post->title }}`
  - `@empty`: tampilkan "No posts found." dengan `colspan="2"`
  - `@endforelse`
- Tombol "Load More" di bawah tabel: `wire:click="loadMore"` dengan class `bg-blue-700 text-white p-2 rounded-2xl`

### 4. Konvensi Styling (Dark Mode)
- Semua card dan elemen menggunakan class dark mode `dark:` Tailwind
- Warna dasar: zinc palette untuk background dan text, blue untuk aksen/button

---

## 📋 Catatan Teknis

- File yang dibuat: `resources/views/livewire/index.blade.php`
- Component PHP (`App\Livewire\PostIndex` atau sejenisnya) wajib menyediakan property: `$totalPostsCount`, `$todayPostsCount`, `$yearlyPostsCount`, `$monthlyPostsCount`, `$posts`
- Component juga wajib menyediakan method: `loadMore()`, `$refresh`
- Sintaks menggunakan **Livewire 4** (inline component / volt syntax atau class component)

---

## 🎯 Definition of Done

- [x] File `resources/views/livewire/index.blade.php` dibuat dengan struktur lengkap
- [x] Stats cards menampilkan 4 statistik (Total, Today, This Year, This Month)
- [x] Tabel posts tampil dengan loop `@forelse`, kolom `#` dan `Title`
- [x] Empty state "No posts found." tersedia
- [x] Tombol "Load More" ada di bawah tabel dengan `wire:click="loadMore"`
- [x] Dark mode styling konsisten di semua elemen
