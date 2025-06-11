# 📋 White Box Testing – Desk Checking Aplikasi Web Cafe

| **Bagian**          | **Komponen**         | **Deskripsi Pemeriksaan**                                                              | **Hasil Pemeriksaan**                            | **Screenshot Tampilan** |
|---------------------|----------------------|------------------------------------------------------------------------------------------|--------------------------------------------------|--------------------------|
| Autentikasi         | `register.php`       | Input disimpan ke database `users` setelah password di-hash menggunakan `password_hash()` | ✔️ Data pengguna tersimpan, password dalam bentuk hash | *(lampirkan gambar)*    |
| Autentikasi         | `login.php`          | Validasi password menggunakan `password_verify()` dan inisialisasi session login         | ✔️ Login berhasil jika data valid               | *(lampirkan gambar)*    |
| Menu Makanan        | `menu.php`           | Menampilkan daftar produk dari tabel `produk` menggunakan `mysqli_fetch_assoc()`        | ✔️ Produk ditampilkan dengan benar              | *(lampirkan gambar)*    |
| Manajemen Pesanan   | `order.php`          | Input pesanan disimpan ke tabel `orders` dan `order_items`                              | ✔️ Pesanan tersimpan, relasi dengan menu valid  | *(lampirkan gambar)*    |
| Dashboard Admin     | `admin/index.php`    | Menampilkan statistik total pesanan, produk, user, dll dari beberapa tabel (SQL JOIN)   | ✔️ Statistik muncul sesuai data di database     | *(lampirkan gambar)*    |
| Hapus Produk        | `delete_produk.php`  | Menghapus produk berdasarkan `id` yang dikirim melalui URL (metode GET)                 | ✔️ Produk berhasil dihapus dari database        | *(lampirkan gambar)*    |

---

## Keterangan

- **Jenis Pengujian**: Desk Checking (White Box Testing)  
- **Lingkup**: Memastikan setiap fungsi dalam file PHP berjalan sesuai alur logika dan struktur database  
- **Alat Bantu**: phpMyAdmin, XAMPP, browser  
- **Versi Pengujian**: Versi 2 (rinci dan terstruktur)  

---

## Desk Checking Detail – `login.php`

### Tujuan
Memastikan logika autentikasi login pengguna berjalan sesuai alur dan aman.

### Langkah Pemeriksaan

1. Memastikan form login dikirim menggunakan metode `POST`.
2. Mengambil input `username` dan `password`.
3. Melakukan query ke database untuk mencari `username` yang sesuai.
4. Melakukan verifikasi password menggunakan `password_verify()`.
5. Jika cocok, login berhasil dan pengguna diarahkan ke `index.php`.
6. Jika tidak cocok, login gagal dan ditampilkan pesan kesalahan.

### Hasil

- Alur login berjalan dengan baik dan sesuai logika.
- Tidak ditemukan error dalam struktur atau proses autentikasi.
