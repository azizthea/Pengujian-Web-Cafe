# 📋 White Box Testing – Desk Checking Aplikasi Web Cafe

| Bagian             | Komponen           | Deskripsi Pemeriksaan                                                                 | Hasil Pemeriksaan                               | Screenshot Code                  | Screenshot Tampilan              |
|--------------------|--------------------|----------------------------------------------------------------------------------------|--------------------------------------------------|----------------------------------|----------------------------------|
| Autentikasi        | `register.php`     | Input disimpan ke database `users` setelah hash password dengan `password_hash()`     | ✔️ Data user tersimpan, password dalam hash     | ![code_register](screens/register_code.png) | ![ui_register](screens/register_ui.png) |
| Autentikasi        | `login.php`        | Validasi password dengan `password_verify()` dan session login                        | ✔️ Login berhasil jika data benar               | ![code_login](screens/login_code.png)       | ![ui_login](screens/login_ui.png)       |
| Menu Makanan       | `menu.php`         | Menampilkan daftar produk dari tabel `produk` menggunakan `mysqli_fetch_assoc()`      | ✔️ Produk ditampilkan dengan benar              | ![code_menu](screens/menu_code.png)         | ![ui_menu](screens/menu_ui.png)         |
| Manajemen Pesanan  | `order.php`        | Input pesanan disimpan ke tabel `orders` dan `order_items`                            | ✔️ Pesanan tersimpan, relasi dengan menu OK     | ![code_order](screens/order_code.png)       | ![ui_order](screens/order_ui.png)       |
| Dashboard Admin    | `admin/index.php`  | Menampilkan total pesanan, produk, user, dll dari beberapa tabel (pakai SQL JOIN)     | ✔️ Statistik muncul sesuai data di DB           | ![code_admin](screens/admin_code.png)       | ![ui_admin](screens/admin_ui.png)       |
| Hapus Produk       | `delete_produk.php`| Produk dihapus berdasarkan `id` yang dikirim lewat URL (GET method)                   | ✔️ Produk terhapus dari DB                      | ![code_delete](screens/delete_produk_code.png) | ![ui_delete](screens/delete_produk_ui.png) |

---

## 📌 Catatan Tambahan

- **Jenis testing**: Desk Checking (White Box Testing)
- **Lingkup**: Memastikan setiap fungsi dalam file PHP sesuai dengan alur logika dan struktur database
- **Alat bantu**: phpMyAdmin, XAMPP, browser
- **Versi pengujian**: Versi 2 (rinci dan terstruktur)

Desk Checking Detail – login.php
Tujuan
Memastikan logika autentikasi login pengguna berjalan sesuai alur dan aman.

Langkah Desk Checking
Pemeriksaan apakah form login dikirim (via POST).
Pengambilan input username dan password.
Query ke database untuk mencari username yang sesuai.
Verifikasi password menggunakan password_verify().
Jika cocok, login berhasil dan diarahkan ke index.php.
Jika tidak cocok, login gagal dan muncul pesan error.
Hasil
Alur login berjalan baik dan sesuai logika.
Tidak ditemukan error pada struktur atau proses autentikasi.

Catatan Tambahan:

Jenis testing: Desk Checking (White Box Testing)

Lingkup: Memastikan setiap fungsi dalam file PHP sesuai dengan alur logika dan struktur database

Alat bantu: phpMyAdmin, XAMPP, browser

Versi pengujian: Versi 2 (rinci dan terstruktur)
