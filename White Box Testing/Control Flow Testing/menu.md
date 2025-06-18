# White Box Testing – menu.php

## Tujuan:
Menampilkan data menu dari DB, proteksi akses, dark mode, dan interaksi.

## Control Flow:
1. [Start]
2. Cek session login
3. Ambil data user dari `users`
4. Ambil data `menu`
5. Tampilkan menu:
   - Grid Cards
   - Tabel
6. Klik "Add to Cart" → alert
7. Mode Gelap → toggle & simpan di `localStorage`
8. [End]

## Hasil:
✅ Tampilan dinamis, proteksi login aktif, data ditarik dari DB dengan aman.
