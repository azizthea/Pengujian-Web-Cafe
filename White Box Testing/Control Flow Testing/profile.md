# White Box Testing – profile.php

## Tujuan
Memastikan halaman profil pelanggan menampilkan data user dengan benar, memproteksi akses, dan mendukung mode tema.

## Control Flow:
1. [Start]  
2. session_start()  
3. Cek `$_SESSION['user_id']`  
   - Jika tidak ada → redirect ke `../login.php` → [End]  
4. require `../db.php`  
5. Ambil data user berdasarkan `id` dari session (prepared statement)  
6. Ambil 5 pesanan terbaru untuk user yang sama (subquery counter untuk items_count)  
7. Render HTML:
   - Sidebar dan navigasi  
   - Tampilkan info profil (foto, username, email, tanggal bergabung)  
   - Tombol “Edit Profile”  
8. Load toggle Dark Mode (dengan localStorage)  
9. [End]

## Hasil
✅ Akses hanya untuk user yang login.  
✅ Data user dan pesanan diambil aman via PDO + prepared statements.  
✅ UI/UX profil tersaji dengan informasi lengkap.  
✅ Mode tema (gelap/terang) berfungsi dan disimpan ulang.

## Rekomendasi
- **Validasi & Sanitasi**: Pastikan nilai `$_SESSION['user_id']` valid dan integer.  
- **Error Handling**: Bungkus kedua query (`users` dan `orders`) dalam `try-catch` untuk menampilkan/log error jika gagal.  
- **Proteksi File Upload**: Jika user upload foto, validasi ekstensi dan ukuran file.  
- **Optimasi Subquery**: Pertimbangkan JOIN untuk perhitungan `items_count` agar performa lebih baik pada data besar.
