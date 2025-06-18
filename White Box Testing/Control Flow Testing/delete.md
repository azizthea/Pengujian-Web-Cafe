# White Box Testing – delete_produk.php

## Tujuan
Memastikan proses penghapusan produk dari database berjalan sesuai logika dan aman terhadap parameter input.

## Control Flow:
1. [Start]
2. (Opsional) Cek session dan hak akses admin
3. Ambil parameter id dari $_GET
4. Validasi id (FILTER_VALIDATE_INT)
5. Siapkan prepared statement DELETE
6. Execute statement dengan id
7. Redirect ke menu.php setelah sukses
8. [End]

## Hasil:
✅ Menggunakan prepared statement untuk keamanan.  
❌ Perlu validasi input dan proteksi akses admin.  
❌ Disarankan tambahkan blok try-catch untuk error handling.

## Rekomendasi:
- Gunakan filter_input untuk validasi id.
- Bungkus operasi DB dalam try-catch.
- Pastikan hanya admin yang bisa menjalankan delete.
