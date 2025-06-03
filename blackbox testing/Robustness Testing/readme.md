
### 📋 Tabel Pengujian Robustness Terpadu

| Halaman     | No | Jenis Uji                     | Input Khusus                          | Expected Result                                      | Actual Result                    | Status | Bukti Visual |
|-------------|----|-------------------------------|---------------------------------------|-----------------------------------------------------|----------------------------------|--------|--------------|
| **register.php** | 1  | Input panjang (300 karakter)  | Username: 300 huruf 'a'               | Stabil (boleh gagal validasi)                      | Tidak crash, input diproses      | ✅     | [Gambar] |
|             | 2  | Karakter emoji                | Username: `😊🔥👩‍💻`                  | Error/Tolak tanpa crash                            | Error: "Tidak boleh emoji"       | ✅     | [Gambar] |
|             | 3  | Spasi kosong                  | Username: (spasi)                     | Error "Username diperlukan"                        | Error muncul                     | ✅     | [Gambar] |
|             | 4  | XSS attempt                   | Username: `<script>alert(1)</script>` | Aman (escape karakter)                             | Tidak dieksekusi                 | ✅     | [Gambar] |
|             | 5  | Email invalid                 | Email: `invalid-email`                | Error "Email tidak valid"                          | Error muncul                     | ✅     | [Gambar] |
|             | 6  | Password pendek               | Password: `pass`                      | Error "Minimal 6 karakter"                         | Error muncul                     | ✅     | [Gambar] |
|             | 7  | Konfirmasi salah              | Password ≠ Confirm                    | Error "Password tidak cocok"                       | Error muncul                     | ✅     | [Gambar] |
|             | 8  | Data valid                    | Semua input benar                     | Redirect ke login                                  | Berhasil redirect                | ✅     | [Gambar] |
| **login.php** | 9  | Password salah                | Password: `salah123`                  | Error "Username/password salah"                    | Error muncul                     | ✅     | [Gambar] |
|             | 10 | Login valid                   | Data terdaftar                        | Redirect ke index.php                              | Berhasil login                   | ✅     | [Gambar] |
| **keranjang.php** | 11 | Tambah item                   | Produk: Espresso, Qty: 2              | Item masuk session cart                            | Cart terupdate                   | ✅     | [Gambar] |
|             | 12 | Update quantity               | Ubah Qty: 2 → 3                       | Subtotal berubah                                   | Harga terupdate                  | ✅     | [Gambar] |
|             | 13 | Hapus item                    | Klik tombol hapus                     | Item hilang dari cart                              | Cart_count berkurang             | ✅     | [Gambar] |
|             | 14 | Keranjang kosong              | Kosongkan cart                        | Pesan "Keranjang kosong"                           | Tombol checkout hilang           | ✅     | [Gambar] |

