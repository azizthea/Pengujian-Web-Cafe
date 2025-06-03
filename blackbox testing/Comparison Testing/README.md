| **ID** | **Tujuan Tes**                               | **Input**                        | **Expected (Harapan)**                               | **Realita (Kenyataan)**           |
| ------ | -------------------------------------------- | -------------------------------- | ---------------------------------------------------- | --------------------------------- |
| TC01   | Update jumlah produk dengan angka valid      | quantity = 3                     | Jumlah produk berubah jadi 3, total harga diperbarui | ✅ Jumlah berubah dan total sesuai |
| TC02   | Update jumlah dengan angka minimum valid     | quantity = 1                     | Tetap bisa, tidak error                              | ✅ Berfungsi normal                |
| TC03   | Update jumlah dengan angka tidak valid (nol) | quantity = 0                     | Tidak boleh diterima / tetap pada jumlah sebelumnya  | ❌ Jumlah jadi 0 (harus dicegah)   |
| TC04   | Update jumlah dengan angka negatif           | quantity = -2                    | Tidak boleh diterima, muncul error atau ditolak      | ❌ Jumlah bisa jadi negatif (bug)  |
| TC05   | Update jumlah dengan angka sangat besar      | quantity = 999                   | Jumlah berubah jadi 999 jika tidak dibatasi          | ✅ Jumlah berubah, total besar     |
| TC06   | Hapus produk yang ada di keranjang           | Klik tombol hapus                | Produk hilang dari tabel, total berkurang            | ✅ Produk terhapus, total berubah  |
| TC07   | Hapus produk yang tidak ada                  | product\_id tidak valid          | Tidak ada perubahan, tidak error                     | ✅ Tidak ada efek                  |
| TC08   | Hitung total dari 2 produk                   | Produk A (10rb x2) + B (5rb x1)  | Total = 25.000                                       | ✅ Total benar                     |
| TC09   | Harga produk tidak valid (misalnya 'abc')    | price = 'abc'                    | Diharapkan error atau harga 0                        | ✅ Harga dianggap 0                |
| TC10   | Keranjang kosong                             | $\_SESSION\['cart'] tidak di-set | Muncul tulisan “Keranjang Anda kosong”               | ✅ Tulisan muncul dengan benar     |
