# 🧪 Comparison Testing: Fitur Register & Keranjang

Dokumen ini berisi hasil pengujian *Comparison Testing* terhadap dua fitur utama dalam sistem, yaitu **Register (Pendaftaran Pengguna)** dan **Keranjang (Shopping Cart)**. Pengujian ini bertujuan untuk membandingkan hasil antara versi lama dan versi baru dari sistem guna memastikan adanya perbaikan dan peningkatan fungsionalitas.

---

## 📋 Tabel Perbandingan Hasil Pengujian

| No | Fitur     | Aspek Diuji           | Versi Lama                                      | Versi Baru                                      | Status     |
|----|-----------|------------------------|--------------------------------------------------|--------------------------------------------------|------------|
| 1  | Register  |  username              | isi kolom > 15 karakter tanpa error             | isi kolom maksimal 15 karakter                    | ✅ Lulus    |
| 2  | Register  | email                  | Minimal 4 karakter                              | Minimal 8 karakter + kombinasi                  | ✅ Lulus    |
| 3  | Register  | Notifikasi Berhasil    | Tidak ada                                       | Menampilkan pesan sukses                       | ✅ Lulus    |
| 4  | Register  | Duplikasi Email        | Tidak dicek                                     | Muncul pesan error jika email sudah terdaftar  | ✅ Lulus    |
| 5  | Keranjang | Tambah Produk          | Produk bertambah tapi tidak tampil langsung     | Produk langsung tampil di keranjang             | ✅ Lulus    |
| 6  | Keranjang | Hapus Produk           | Tidak bisa hapus produk                         | Bisa hapus produk dengan konfirmasi             | ✅ Lulus    |
| 7  | Keranjang | Total Harga            | Total tidak update otomatis                     | Total langsung update saat produk berubah       | ✅ Lulus    |
| 8  | Keranjang | Jumlah Produk Sama     | Tidak menggabungkan jumlah, malah dobel entry   | Menggabungkan produk yang sama                  | ✅ Lulus    |

---

## ✅ Kesimpulan

Berdasarkan hasil Comparison Testing, seluruh aspek dari fitur **Register** dan **Keranjang** telah menunjukkan peningkatan signifikan dibanding versi sebelumnya. Versi baru berhasil meningkatkan validasi data, efisiensi interaksi pengguna, dan pengalaman pengguna secara keseluruhan.

