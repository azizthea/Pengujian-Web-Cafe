# 🔍 Code Walkthrough - `login.php` (Cafe Aroma Web App)

## 🎯 Tujuan  
Melakukan tinjauan menyeluruh terhadap proses login pengguna pada aplikasi **Cafe Aroma**, khususnya pada file `login.php`, untuk memastikan **keamanan, efisiensi logika, dan pengelolaan sesi pengguna** berjalan dengan baik.

---

## 👥 Tim Reviewer – Kelompok 7

- **Miftah Rizkia Aldira** – 20221310025  
- **Abdul Aziz Nurahmat** – 20221310019  
- **Iqbal Yudiana** – 20221310020  
- **Tiara Putri Latifani Dianata** – 20221310086  

---

## 🧪 Fokus Review

| Aspek                    | Hasil Pemeriksaan                                                                 |
|--------------------------|-----------------------------------------------------------------------------------|
| Validasi Input           | ❌ Belum ada `htmlspecialchars()` atau filter eksplisit pada input username       |
| Keamanan Query           | ✅ Sudah menggunakan **Prepared Statement PDO**, aman dari SQL Injection          |
| Verifikasi Password      | ✅ Menggunakan `password_verify()` untuk membandingkan password dengan hash       |
| Manajemen Session        | ✅ Menyimpan `$_SESSION['user_id']` dan `$_SESSION['username']`                   |
| Redirection Login        | ✅ Redirect ke `index.php` setelah login berhasil                                |
| Feedback Pengguna        | ✅ Menampilkan error jika login gagal                                             |
| Proteksi Brute Force     | ⚠️ Belum ada sistem limitasi percobaan login                                     |

---

## ✅ Rekomendasi Perbaikan

- Tambahkan `htmlspecialchars()` atau filter input untuk keamanan XSS.
- Buat sistem **delay atau blokir sementara** setelah 3x gagal login.
- Tambahkan logging untuk aktivitas login (opsional).
- Tambahkan CSRF token pada form login untuk keamanan tambahan.

---

## 📌 Kesimpulan

Login pada `login.php` **berjalan dengan baik** untuk autentikasi pengguna, dengan penggunaan `password_verify()` dan sesi login. Namun, **pengamanan input dan pembatasan login perlu ditambahkan** agar sistem lebih kuat terhadap serangan XSS dan brute force.

---

## 🔗 Terkait File Lain

- `register.php` – untuk registrasi user baru dengan password hashing  
- `db.php` – koneksi PDO ke database  
- `logout.php` – menghapus sesi login  
- `index.php` – redirect utama setelah login sukses  
