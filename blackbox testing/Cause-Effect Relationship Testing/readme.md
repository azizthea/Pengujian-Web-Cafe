## Cause Effect Testing 
Cause-Effect Relationship Testing (atau sering disebut juga Cause-Effect Graphing) adalah salah satu metode dalam pengujian perangkat lunak (software testing) yang digunakan untuk mengidentifikasi dan memverifikasi hubungan sebab-akibat (cause-effect) antara berbagai kondisi input (sebab) dan output atau hasil yang diharapkan (akibat) pada suatu sistem.

# Test Case untuk Sistem Café Library

| **Cause (Input/Kondisi)**                                   | **Effect (Output/Respons yang Diharapkan)**                         | **Status (Pass/Fail)** |
|-------------------------------------------------------------|---------------------------------------------------------------------|-------------------------|
| **register.php**                                            |                                                                     |                         |
| Username kosong                                             | Gagal registrasi, muncul error "Username diperlukan"                | ![Pass](https://github.com/user-attachments/assets/098680d3-df6f-46c3-976b-6111ab65937d) |
| Username < 4 karakter                                       | Gagal registrasi, muncul error "Username minimal 4 karakter"        | |
| Email tidak valid                                           | Gagal registrasi, muncul error "Email tidak valid"                  |  |
| Password < 6 karakter                                       | Gagal registrasi, muncul error "Password minimal 6 karakter"        |  |
| Password dan confirm_password tidak cocok                   | Gagal registrasi, muncul error "Password tidak cocok"               |  |
| Username sudah terdaftar                                    | Gagal registrasi, muncul error "Username sudah digunakan"           |  |
| Email sudah terdaftar                                       | Gagal registrasi, muncul error "Email sudah digunakan"              |  |
| Data registrasi valid                                       | Registrasi berhasil, redirect ke login.php dengan pesan sukses      | |
| **login.php**                                               |                                                                     |                         |
| Username benar, password benar                              | Login berhasil, redirect ke index.php                               |  |
| Username benar, password salah                              | Gagal login, muncul error "Username atau password salah"            |  |
| Username tidak terdaftar                                    | Gagal login, muncul error "Username atau password salah"            |  |
| **keranjang.php**                                           |                                                                     |                         |
| Keranjang kosong                                            | Menampilkan pesan "Keranjang Anda kosong"                           |  |
| Menghapus item dari keranjang                               | Item dihapus, jumlah keranjang diperbarui                           |  |
| Mengupdate jumlah item                                      | Jumlah dan total harga diperbarui                                   |  |
| Klik tombol checkout                                        | Redirect ke checkout.php (jika ada)                                 |  |
| **Cross-Site Scripting (XSS)**                              |                                                                     |                         |
| Input mengandung tag script                                 | Input disanitasi (htmlspecialchars), tidak mengeksekusi script      |  |
