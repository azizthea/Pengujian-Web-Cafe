# 🧪 Comparison Testing: Fitur Register & Keranjang

Dokumen ini berisi hasil pengujian *Comparison Testing* terhadap dua fitur utama dalam sistem, yaitu **Register (Pendaftaran Pengguna)** dan **Keranjang (Shopping Cart)**. Pengujian ini bertujuan untuk membandingkan hasil antara versi lama dan versi baru dari sistem guna memastikan adanya perbaikan dan peningkatan fungsionalitas.

---

## 📋 Tabel Perbandingan Hasil Pengujian

| No | Fitur     | Aspek Diuji           | Versi Lama                                      | Versi Baru                                      | Status     |
|----|-----------|------------------------|--------------------------------------------------|--------------------------------------------------|------------|
| 1  | Register  |  username              | isi kolom > 15 karakter tanpa error             | isi kolom maksimal 15 karakter                    | ✅ Lulus    |
| 2  | Register  | email                  | isi kolom > 15 karakter tanpa error dan tidak domain gmail| isi kolom 15 karakter sebelum gmail dan sudah domain gamil                  | ✅ Lulus    |
| 3  | Register  | Password               | isi kolom > 10 karakter tanpa error             | isi kolom maksimal 10 karakter                    | ✅ Lulus    |
| 4  | troli     | nilai input 0          | tidak ada perubahan/tidak dikembalikan ke 1    | Saat nilai input 0 maka dikembalikan ke 1            | ✅ Lulus    |
| 5  | troli     | nilai input 1-100      | nilai input tidak dibatas                        | nilai input dibatas sampai 100            | ✅ Lulus    |

---

## ✅ Kesimpulan

Berdasarkan hasil Comparison Testing, seluruh aspek dari fitur **Register** dan **Keranjang** telah menunjukkan peningkatan signifikan dibanding versi sebelumnya. Versi baru berhasil meningkatkan validasi data, efisiensi interaksi pengguna, dan pengalaman pengguna secara keseluruhan.

