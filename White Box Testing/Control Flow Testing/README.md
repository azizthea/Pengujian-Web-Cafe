# Control Flow Testing – `login.php` (Cafe Aroma Web App)

## Tujuan
Mengidentifikasi seluruh jalur logika dalam file `login.php`, serta menguji semua skenario alur kontrol yang mungkin terjadi saat pengguna mencoba login ke aplikasi **Cafe Aroma**.

---

## 🔄 Jalur Logika yang Dianalisis

| No | Jalur Kontrol                                                                                 |
|----|-----------------------------------------------------------------------------------------------|
| 1  | Form dikirim dengan metode `POST` → `$_SERVER['REQUEST_METHOD'] === 'POST'`                   |
| 2  | Ambil `username` & `password` dari input form                                                 |
| 3  | Jalankan query `SELECT * FROM users WHERE username = ?` menggunakan **PDO prepared statement**|
| 4  | Jika user ditemukan → lanjut ke `password_verify($password, $user['password'])`               |
| 5  | Jika password cocok → simpan `$_SESSION` dan redirect ke `index.php`                          |
| 6  | Jika password salah atau user tidak ditemukan → tampilkan pesan error                         |
| 7  | Jika tidak ada POST → halaman hanya menampilkan form login                                    |

---

## 🧪 Skenario Pengujian

| No | Skenario                             | Input                         | Expected Output                                      | Status |
|----|--------------------------------------|-------------------------------|------------------------------------------------------|--------|
| 1  | Login berhasil                       | Username & password valid     | Redirect ke `index.php` dengan session login aktif   | ✅     |
| 2  | Password salah                       | Username valid, password salah| Pesan error: `Username atau password salah!`         | ✅     |
| 3  | Username tidak ditemukan             | Username tidak terdaftar      | Pesan error: `Username atau password salah!`         | ✅     |
| 4  | Form tidak dikirim (akses GET biasa) | Tidak ada input                | Tampilkan halaman form login                         | ✅     |

---

## 🧾 Kesimpulan

- Proses login bekerja dengan baik untuk user valid ✅
- Password diverifikasi aman menggunakan `password_verify()` 🔐
- Penanganan error jelas dan memberi feedback ke user ⚠️
- Session tersimpan dengan benar dan diarahkan ke halaman utama 🏠
