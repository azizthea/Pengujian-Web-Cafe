# Desk Checking - login.php (Cafe App)

## Tujuan
Memeriksa logika login Cafe App secara manual dengan fokus pada:
- Proses input username dan password dari user.
- Pengecekan user di database.
- Verifikasi password.
- Penanganan kesalahan login.

## Langkah Desk Checking
1. Cek apakah form login dikirim (via POST).
2. Ambil nilai `username` dan `password`.
3. Jalankan query ke database untuk mencari username.
4. Jika ditemukan, ambil hash password.
5. Verifikasi password menggunakan `password_verify()`.
6. Jika cocok → login dan redirect ke `index.php`.
7. Jika tidak cocok → tampilkan pesan error.

## Hasil
Logika login Cafe App berjalan sesuai ekspektasi tanpa kesalahan struktur.
