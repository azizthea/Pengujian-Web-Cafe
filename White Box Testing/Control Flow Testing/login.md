# White Box Testing – login.php

## Tujuan:
Memastikan proses autentikasi berjalan sesuai logika, aman dari kesalahan, dan sesuai alur kontrol.

## Control Flow:
1. [Start]
2. Cek method POST?
3. Ambil input username & password
4. Query tabel `users` berdasarkan username
5. Jika user ditemukan:
   - password cocok? → [Ya: login & redirect] / [Tidak: tampilkan error]
6. [End]

## Hasil:
✅ Alur login sesuai kontrol logika dan aman dari SQL Injection.
