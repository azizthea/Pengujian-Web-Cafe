# White Box Testing – index.php

## Tujuan:
Menampilkan halaman utama dengan kontrol akses dan tampilan dinamis.

## Control Flow:
1. [Start]
2. Cek `$_SESSION['user_id']`
   - Jika login → tombol `Profile/Logout`
   - Jika tidak → tombol `Login/Register`
3. Render konten HTML (hero, menu, about, footer)
4. Aktifkan tombol Mode Gelap
5. [End]

## Hasil:
✅ Flow UI sesuai, akses login dikendalikan, UX interaktif.
