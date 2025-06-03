
## Parameter

Fitur yang diuji: register, login, troli

## 🧪 1. Boundary Value Analysis (BVA)
## Register
| No. | Parameter          | Nilai Uji              | Ekspektasi                                 | Realita                            | Status | Gambar Bukti |
| --- | ------------------ | ---------------------- | ------------------------------------------ | ---------------------------------- | ------ | ------------ |
| 1   | `username`         | `abc` (3 karakter)     | Ditolak karena < 4 karakter                | Form menolak input                 | ✅      | ![img1](#)   |
| 2   | `username`         | `20 karakter`          | Ditolak karena username terlalu panjang    | Form menerima input                | ❌      | ![img2](#)   |
| 3   | `username`         | `5 karakter`           | Diterima karena di atas batas minimal      | Form menerima input                | ✅      | ![img3](#)   |
| 4   | `email`            | `abc`                  | Ditolak karena format tidak valid          | Validasi gagal (email tidak valid) | ✅      | ![img4](#)   |
| 5   | `email`            | `20 karakter`          | Ditolak karena format tidak valid          | Validasi gagal (email tidak valid) | ✅      | ![img5](#)   |
| 6   | `email`            | `abc@example.com`      | Ditolak karena bukan domain gmail          | Validasi berhasil                  | ❌      | ![img6](#)   |
| 7   | `password`         | `12345` (5 karakter)   | Ditolak karena < 6 karakter                | Form menolak input                 | ✅      | ![img7](#)   |
| 8   | `password`         | `20 karakter`          | Ditolak karena password terlalu panjang    | Form menerima input                | ❌      | ![img8](#)   |
| 9   | `password`         | `1234567` (7 karakter) | Diterima karena di atas batas minimal      | Form menerima input                | ✅      | ![img9](#)   |
| 10  | `confirm_password` | `abcdef`, `abcdef`     | Diterima karena cocok dengan password      | Validasi berhasil                  | ✅      | ![img10](#)  |
| 11  | `confirm_password` | `abcdef`, `abcdeg`     | Ditolak karena tidak cocok dengan password | Validasi gagal (tidak cocok)       | ✅      | ![img11](#)  |



---
## login
| No. | Username           | Password        | Ekspektasi                | Realita            | Status |
| --- | ------------------ | --------------- | ------------------------- | ------------------ | ------ |
| 1   | valid (ada di DB)  | password benar  | Login berhasil            | Masuk ke index     | ✅      |
| 2   | valid (ada di DB)  | password salah  | Login gagal (pesan error) | Menampilkan error  | ✅      |
| 3   | username kosong    | password apapun | username wajib diisi      | Form menolak submit dan menampilkan pesan error "Username wajib diisi" | ✅ |


## troli
| **Test Case** | **Deskripsi**                                | Input            | **Ekpetasi**                                            | **Realita**                                          |
| ------------- | -------------------------------------------- | -------------------- | -------------------------------------------------------- | ---------------------------------------------------------------------- |
| TC01          | Nilai batas minimum valid                    | 1                    | Jumlah produk diubah ke 1, total harga berubah           | ✅ Jumlah diubah ke 1, total terupdate dengan benar                     |
| TC02          | Nilai tepat di atas minimum                  | 2                    | Jumlah produk diubah ke 2, total harga berubah           | ✅ Berfungsi dengan baik                                                |
| TC03          | Nilai tepat di bawah minimum (**invalid**)   | 0                    | Input ditolak atau dikembalikan ke 1                     | ❌ Nilai input tidak brubah dan Browser menampilkan pesan “value must be greater than or equal to 1” |
| TC04          | Nilai batas atas valid (misalnya 100)        | 100                  | Jumlah diubah ke 100, total dikalikan dengan benar       | ✅ Jumlah 100 berhasil, total sesuai                                    |
| TC05          | Nilai tepat di bawah batas atas              | 99                   | Jumlah diubah ke 99, total dikalikan dengan benar        | ✅ Sama seperti TC04                                                    |
| TC06          | Nilai tepat di atas batas atas (**invalid**) | 101                  | Input ditolak atau dibatasi ke 100 (jika ada batas atas) | ❌ Masih bisa input 101 karena tidak ada batas atas di HTML maupun PHP |

