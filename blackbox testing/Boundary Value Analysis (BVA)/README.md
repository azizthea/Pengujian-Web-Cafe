
## Parameter

Fitur yang diuji: register, login, troli

## 🧪 1. Boundary Value Analysis (BVA)
## Register
| No. | Parameter          | Nilai Uji              | Ekspektasi                                 | Realita                            | Status | Gambar Bukti |
| --- | ------------------ | ---------------------- | ------------------------------------------ | ---------------------------------- | ------ | ------------ |
| 1   | `username`         | `abc` (3 karakter)     | Ditolak karena < 4 karakter                | Form menolak input                 | ✅      | ![image](https://github.com/user-attachments/assets/6fa6f043-e31f-411b-bce9-46051f30a835)
#)   |
| 2   | `username`         | `20 karakter`          | Ditolak karena username terlalu panjang    | Form menerima input                | ❌      | ![image](https://github.com/user-attachments/assets/90a5f12f-9b26-4c20-971a-b6626a7c4733)
#)   |
| 3   | `username`         | `5 karakter`           | Diterima karena di atas batas minimal      | Form menerima input                | ✅      | ![image](https://github.com/user-attachments/assets/71982da2-9878-4a73-bb16-b18f101987af)
#)   |
| 4   | `email`            | `abc`                  | Ditolak karena format tidak valid          | muncul pesan (please include '@') | ✅      | ![image](https://github.com/user-attachments/assets/85c83558-15f5-4df2-978a-bdf945c74334)
#)   |
| 5   | `email`            | `20 karakter sebelum gmail`          | Ditolak karena format tidak valid          | Form menerima input | ❌      | ![image](https://github.com/user-attachments/assets/d099ab2e-a9b7-4abe-b350-c24651786af7)
#)   |
| 6   | `email`            | `abc@example.com`      | Ditolak karena bukan domain gmail          | Validasi berhasil                  | ❌      | ![image](https://github.com/user-attachments/assets/7597d27a-c1e0-4e13-9d41-e805789270cc)
(#)   |
| 7   | `password`         | `12345` (5 karakter)   | Ditolak karena < 6 karakter                | Form menolak input                 | ✅      | ![image](https://github.com/user-attachments/assets/50b1628e-5edb-490e-b196-2ade1ec6821f)
#)   |
| 8   | `password`         | `20 karakter`          | Ditolak karena password terlalu panjang    | Form menerima input                | ❌      | ![image](https://github.com/user-attachments/assets/144dc967-d6c8-4f79-bb33-3939697a6908)
#)   |
| 9   | `password`         | `1234567` (7 karakter) | Diterima karena di atas batas minimal      | Form menerima input                | ✅      | ![image](https://github.com/user-attachments/assets/cf5591cb-053b-49be-ba71-6003ab7a2875)
(#)   |
| 10  | `confirm_password` | `abcdef`, `abcdef`     | Diterima karena cocok dengan password      | Validasi berhasil                  | ✅      | ![image](https://github.com/user-attachments/assets/60ff54c7-d71f-45ea-8563-2147ef2731e4)
#)  |
| 11  | `confirm_password` | `abcdef`, `abcdeg`     | Ditolak karena tidak cocok dengan password | Validasi gagal (tidak cocok)       | ✅      | !![image](https://github.com/user-attachments/assets/2098532c-8adf-4660-803d-5665b4cad22e)
#)  |



---
## login
| No. | Username          | Password        | Ekspektasi                | Realita                                                                | Status | Gambar Bukti |
| --- | ----------------- | --------------- | ------------------------- | ---------------------------------------------------------------------- | ------ | ------------ |
| 1   | valid (ada di DB) | password benar  | Login berhasil            | Masuk ke index                                                         | ✅      | ![image](https://github.com/user-attachments/assets/1a8af54c-ef68-4509-88b0-f8e681fb50dd)
#)   |
| 2   | valid (ada di DB) | password salah  | Login gagal (pesan error) | Menampilkan error                                                      | ✅      | ![image](https://github.com/user-attachments/assets/4189f6ea-79c2-489a-a1a3-5888163726d9)
#)   |
| 3   | username kosong   | password apapun | username wajib diisi      | Form menolak submit dan menampilkan pesan error "Username wajib diisi" | ✅      | ![image](https://github.com/user-attachments/assets/74c1bf63-5c06-4c98-96e4-352630f20909)#)   |


## troli
| **Test Case** | **Deskripsi**                                | Input            | **Ekpetasi**                                            | **Realita**                                          |
| ------------- | -------------------------------------------- | -------------------- | -------------------------------------------------------- | ---------------------------------------------------------------------- |
| TC01          | Nilai batas minimum valid                    | 1                    | Jumlah produk diubah ke 1, total harga berubah           | ✅ Jumlah diubah ke 1, total terupdate dengan benar                     |
| TC02          | Nilai tepat di atas minimum                  | 2                    | Jumlah produk diubah ke 2, total harga berubah           | ✅ Berfungsi dengan baik                                                |
| TC03          | Nilai tepat di bawah minimum (**invalid**)   | 0                    | Input ditolak atau dikembalikan ke 1                     | ❌ Nilai input tidak brubah dan Browser menampilkan pesan “value must be greater than or equal to 1” |
| TC04          | Nilai batas atas valid (misalnya 100)        | 100                  | Jumlah diubah ke 100, total dikalikan dengan benar       | ✅ Jumlah 100 berhasil, total sesuai                                    |
| TC05          | Nilai tepat di bawah batas atas              | 99                   | Jumlah diubah ke 99, total dikalikan dengan benar        | ✅ Sama seperti TC04                                                    |
| TC06          | Nilai tepat di atas batas atas (**invalid**) | 101                  | Input ditolak atau dibatasi ke 100 (jika ada batas atas) | ❌ Masih bisa input 101 karena tidak ada batas atas di HTML maupun PHP |

