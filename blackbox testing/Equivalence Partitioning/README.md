## 🧪 2. Equivalence Partitioning

# register

| No   | Parameter                        | Kelas Equivalen (Input)                                          | Valid / Invalid | Expected Output             | Actual Output      | Status |
| ---- | -------------------------------- | ---------------------------------------------------------------- | --------------- | --------------------------- | ------------------ | ------ |
  | EP1  | Username                         | "" (kosong)                                                      | Invalid         | Username diperlukan  | benar |    ✅    |
| EP2  | Username                         | "abc" (kurang dari 4 karakter)                                   | Invalid         | minimal 4 karakter   | benar |    ✅    |
| EP3  | Username                         | "user123" (>=4 karakter)                                         | Valid           | sukses                      | benar | ✅       |
| EP4  | Email                            | "" (kosong)                                                      | Invalid         | Email diperlukan     | benar |     ✅   |
| EP5  | Email                            | "abc.com" (format tidak valid)                                   | Invalid         | Email tidak valid    | benar |    ✅    |
| EP6  | Email                            | "email@email.com" (valid format)           | Valid           | sukses                      | benar |  ✅      |
| EP7  | Password                         | "" (kosong)                                                      | Invalid         | Password diperlukan  | benar |     ✅   |
| EP8  | Password                         | "12345" (<6 karakter)                                            | Invalid         | minimal 6 karakter   | benar |   ✅     |
| EP9  | Password                         | "abcdefg" (>=6 karakter)                                         | Valid           | sukses                      | benar  | ✅       |
| EP10 | Konfirmasi Password              | Tidak sama dengan password                                       | Invalid         | Password tidak cocok | benar |   ✅     |
| EP11 | Konfirmasi Password              | Sama dengan password                                             | Valid           | sukses                      | benar |✅        |
| EP12 | Username & Email sudah terdaftar | "userlama" / "email@email.com" | Invalid         | user/email sudah digunakan      | benar        |✅

# login
| No  | Parameter          | Nilai Input                       | Expected Output                | Actual Output | Status |
| --- | ------------------ | --------------------------------- | ------------------------------ | ------------- | ------ |
| EP1 | username |  ""                           | error                          | error         |  ✅     |
| EP2 | username | "12345" | sukses                          | error         | ✅      |
| EP3 | password |  "salah"              | error                          | error         | ✅      |
| EP4 |  password |  "benar"              | sukses (redirect ke index.php) | sukses        | ✅      |

# troli

| **ID** | **Tujuan Tes**                               | **Input**                        | **Expected (Harapan)**                               | **Realita (Kenyataan)**           |
| ------ | -------------------------------------------- | -------------------------------- | ---------------------------------------------------- | --------------------------------- |
| TC01   | Update jumlah produk dengan angka valid      | quantity = 3                     | Jumlah produk berubah jadi 3, total harga diperbarui | ✅ Jumlah berubah dan total sesuai |
| TC02   | Update jumlah dengan angka minimum valid     | quantity = 1                     | Tetap bisa, tidak error                              | ✅ Berfungsi normal                |
| TC03   | Update jumlah dengan angka tidak valid (nol) | quantity = 0                     | tidak diterima dikembalikan ke 1                     | ❌ jumlah tetap tidak ada perubahan   |
| TC04   | Update jumlah dengan angka negatif           | quantity = -2                    | Tidak boleh diterima, muncul error atau ditolak      | ✅  Nilai input tidak brubah dan Browser menampilkan pesan “value must be greater than or equal to 1”  |
| TC05   | Update jumlah dengan angka sangat besar      | quantity = 999                   | Jumlah berubah jadi 999 jika tidak dibatasi          | ✅ Jumlah berubah, total besar     |
| TC06   | Hapus produk yang ada di keranjang           | Klik tombol hapus                | Produk hilang dari tabel, total berkurang            | ✅ Produk terhapus, total berubah  |
| TC07   | Hitung total dari 2 produk                   | Produk A (Rp 35.000 x2) + B (Rp 25.000 x1)  | Total = Rp 95.000                                      | ✅ Total benar                     |
| TC8   | Keranjang kosong                             | $\_SESSION\['cart'] tidak di-set | Muncul tulisan “Keranjang Anda kosong”               | ✅ Tulisan muncul dengan benar     |
