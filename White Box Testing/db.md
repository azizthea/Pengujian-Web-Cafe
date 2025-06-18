# White Box Testing – db.php

## Tujuan:
Menyediakan koneksi database yang stabil dan aman.

## Control Flow:
1. [Start]
2. Buat DSN dengan config DB
3. Jalankan PDO dengan opsi keamanan
4. Cek koneksi berhasil?
   - Ya → lanjut
   - Tidak → tangani error
5. [End]

## Hasil:
✅ Koneksi aman, siap dipakai di semua file lain via `require`.
