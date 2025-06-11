📋 White Box Testing – Desk Checking Aplikasi Web Cafe
Bagian	Komponen	Deskripsi Pemeriksaan	Hasil Pemeriksaan	Screenshot Tampilan
Autentikasi	register.php	Input disimpan ke database users setelah password di-hash menggunakan password_hash()	✔️ Data pengguna tersimpan, password dalam bentuk hash	
Autentikasi	login.php	Validasi password menggunakan password_verify() dan inisialisasi session login	✔️ Login berhasil jika data valid	
Menu Makanan	menu.php	Menampilkan daftar produk dari tabel produk menggunakan mysqli_fetch_assoc()	✔️ Produk ditampilkan dengan benar	
Manajemen Pesanan	order.php	Input pesanan disimpan ke tabel orders dan order_items	✔️ Pesanan tersimpan, relasi dengan menu valid	
Dashboard Admin	admin/index.php	Menampilkan statistik total pesanan, produk, user, dll dari beberapa tabel (SQL JOIN)	✔️ Statistik muncul sesuai data di database	
Hapus Produk	delete_produk.php	Menghapus produk berdasarkan id yang dikirim melalui URL (metode GET)	✔️ Produk berhasil dihapus dari database	

📌 Catatan Tambahan
Jenis Pengujian: Desk Checking (White Box Testing)

Lingkup: Memastikan setiap fungsi dalam file PHP berjalan sesuai alur logika dan struktur database

Alat Bantu: phpMyAdmin, XAMPP, browser

Versi Pengujian: Versi 2 (rinci dan terstruktur)

🧪 Desk Checking Detail – login.php
🎯 Tujuan
Memastikan logika autentikasi login pengguna berjalan sesuai alur dan aman.

🔍 Langkah Pemeriksaan
Memastikan form login dikirim menggunakan metode POST.

Mengambil input username dan password.

Melakukan query ke database untuk mencari username yang sesuai.

Melakukan verifikasi password menggunakan password_verify().

Jika cocok, login berhasil dan pengguna diarahkan ke index.php.

Jika tidak cocok, login gagal dan ditampilkan pesan kesalahan.

✅ Hasil
Alur login berjalan dengan baik dan sesuai logika.

Tidak ditemukan error dalam struktur atau proses autentikasi.
