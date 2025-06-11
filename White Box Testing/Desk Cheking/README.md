📋 White Box Testing – Desk Checking Aplikasi Web Cafe
Bagian	Komponen	Deskripsi Pemeriksaan	Hasil Pemeriksaan	Screenshot Code	Screenshot Tampilan
Autentikasi	register.php	Input disimpan ke database users setelah hash password dengan password_hash()	Data user tersimpan, password dalam hash	
Autentikasi	login.php	Validasi login: ambil user dari database, verifikasi password dengan password_verify()	Login berhasil jika data benar	
Menu Makanan	menu.php	Menampilkan daftar produk dari tabel produk menggunakan mysqli_fetch_assoc()	Produk ditampilkan dengan benar	
Manajemen Pesanan	order.php	Input pesanan disimpan ke tabel orders dan order_items	Pesanan tersimpan, relasi dengan menu sesuai	
Dashboard Admin	admin/index.php	Menampilkan total pesanan, produk, user, dan lainnya dari beberapa tabel (pakai SQL JOIN)	Statistik muncul sesuai data di database	
Hapus Produk	delete_produk.php	Produk dihapus berdasarkan id yang dikirim lewat URL (GET method)	Produk terhapus dari database	

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

Catatan Tambahan
Jenis testing: Desk Checking (White Box Testing)
Lingkup: Memastikan setiap fungsi dalam file PHP sesuai dengan alur logika dan struktur database
Alat bantu: phpMyAdmin, XAMPP, browser
Versi pengujian: Versi 2 (rinci dan terstruktur
