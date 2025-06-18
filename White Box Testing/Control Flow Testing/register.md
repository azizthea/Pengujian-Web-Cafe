# White Box Testing – register.php

## Tujuan:
Memastikan validasi form, penyimpanan aman ke DB, dan kontrol alur berjalan baik.

## Control Flow:
1. [Start]
2. Cek method POST?
3. Validasi input:
   - username, email, password, konfirmasi
4. Query cek username/email sudah ada?
5. Jika valid:
   - hash password
   - insert ke DB
   - redirect ke `login.php`
6. [End]

## Hasil:
✅ Validasi lengkap, flow aman, penyimpanan password dengan hash.
