# 🧪 Comparison Testing: Fitur Register & Keranjang

Dokumen ini berisi hasil pengujian *Comparison Testing* terhadap dua fitur utama dalam sistem, yaitu **Register (Pendaftaran Pengguna)** dan **Keranjang (Shopping Cart)**. Pengujian ini bertujuan untuk membandingkan hasil antara versi lama dan versi baru dari sistem guna memastikan adanya perbaikan dan peningkatan fungsionalitas.

---

## 📋 Tabel Perbandingan Hasil Pengujian

| No | Fitur     | Aspek Diuji           | Versi Lama                                      | Versi Baru                                      | Status     |
|----|-----------|------------------------|--------------------------------------------------|--------------------------------------------------|------------|
| 1  | Register  |  username              | isi kolom > 15 karakter tanpa error             | isi kolom maksimal 15 karakter                    | ✅ Lulus    |
| 2  | Register  | email                  | isi kolom > 15 karakter tanpa error dan tidak domain gmail| isi kolom 15 karakter sebelum gmail dan sudah domain gamil                  | ✅ Lulus    |
| 3  | Register  | Password               | isi kolom > 10 karakter tanpa error             | isi kolom maksimal 10 karakter                    | ✅ Lulus    |
| 4  | Keranjang | Tambah Produk          | Produk bertambah tapi tidak tampil langsung     | Produk langsung tampil di keranjang             | ✅ Lulus    |
| 5  | Keranjang | Hapus Produk           | Tidak bisa hapus produk                         | Bisa hapus produk dengan konfirmasi             | ✅ Lulus    |
| 6  | Keranjang | Total Harga            | Total tidak update otomatis                     | Total langsung update saat produk berubah       | ✅ Lulus    |
| 7  | Keranjang | Jumlah Produk Sama     | Tidak menggabungkan jumlah, malah dobel entry   | Menggabungkan produk yang sama                  | ✅ Lulus    |

---

## ✅ Kesimpulan

Berdasarkan hasil Comparison Testing, seluruh aspek dari fitur **Register** dan **Keranjang** telah menunjukkan peningkatan signifikan dibanding versi sebelumnya. Versi baru berhasil meningkatkan validasi data, efisiensi interaksi pengguna, dan pengalaman pengguna secara keseluruhan.

