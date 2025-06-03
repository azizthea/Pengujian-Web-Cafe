# 📋 Sample Testing Form 

Dokumen ini berisi hasil pengujian input pada halaman registrasi (`register.php`) untuk menguji validasi, stabilitas aplikasi, dan keamanan terhadap input tidak biasa.

## 🧪 Tabel Hasil Uji Coba `register`

| No | Input Username         | Input Email        | Password     | Konfirmasi Password | Jenis Masukan           | Expected Result                                        | Actual Result                   | Status | Bukti Gambar |
|----|------------------------|--------------------|--------------|----------------------|--------------------------|-------------------------------------------------------|----------------------------------|--------|--------------|
| 1  | 300 karakter huruf     | user@mail.com      | password123  | password123          | Panjang ekstrem          | Aplikasi tetap stabil (boleh gagal simpan)            | Tidak crash, input berhasil        | ✅     | ![image](https://github.com/user-attachments/assets/5827c0a9-2884-42c0-9092-44109ae17e9b)
#)    |
| 2  | 😊🔥👩‍💻📚🚀              | emoji@mail.com     | password123  | password123          | Emoji                    | Aplikasi menerima/menolak tanpa crash                 | error pesan: should not contain the symbol '😊'       | ✅     | ![image](https://github.com/user-attachments/assets/b0092acc-325e-459f-a4fa-f31cb84657c7)
#)    |
| 3  | (spasi kosong)         | user@mail.com      | password123  | password123          | Spasi saja               | Aplikasi tampilkan error "Username diperlukan"        | error muncul       | ✅     | ![image](https://github.com/user-attachments/assets/e367ddc3-26c6-478f-b616-bf11aca26a49)
(#)    |
| 4  | `<script>alert(1)</script>` | user@gmail.com | password123  | password123          | Karakter aneh/injeksi    | Aplikasi aman, tidak error                  | Tidak ada error           | ✅     | ![image](https://github.com/user-attachments/assets/2e608b71-666d-4cbb-858b-dcdd7a184c28)
#)    |
| 5  | normaluser             | invalid-email      | password123  | password123          | Format email salah       | Tampilkan error "Email tidak valid"                   | Error muncul sesuai harapan     | ✅     | ![image](https://github.com/user-attachments/assets/9af521d0-2c36-4c10-9b75-8eb0bc9d5094)
#)    |
| 6  | user123                | user@mmail.com      | pass         | pass                 | Password terlalu pendek  | Error "Password minimal 6 karakter"                   | Validasi tampil                 | ✅     | ![image](https://github.com/user-attachments/assets/a268c908-78ad-4f38-bc61-3c82174f6510)
#)    |
| 7  | user123                | user@mail.com      | password123  | password321          | Konfirmasi tidak cocok   | Error "Password tidak cocok"                          | Validasi tampil                 | ✅     | ![image](https://github.com/user-attachments/assets/d56ee2a1-d475-4b2f-9ede-e25a8f4048d7)
#)    |
| 8  | user123                | user@mail.com      | password123  | password123          | Input valid              | Data berhasil disimpan, redirect ke login             | Redirect berhasil               | ✅     | ![image](https://github.com/user-attachments/assets/845d4820-411f-4a6b-99c9-66a1a4d439d4)
#)    |

## 🧪 Tabel Hasil Uji Coba `Login`
| No | Input Username         | Input Password      | Jenis Masukan           | Expected Result                                      | Actual Result                      | Status | Bukti Gambar |
|----|------------------------|---------------------|--------------------------|-----------------------------------------------------|-------------------------------------|--------|--------------|
| 1  | user1234                | password123         | Input valid              | Login berhasil, redirect ke index.php               | Berhasil login dan redirect         | ✅     | ![image](https://github.com/user-attachments/assets/52667b55-c176-4f8a-95c3-bd6083e1158a)
#)    |
| 2  | user123                | salahpassword       | Password salah           | Tampilkan error "Username atau password salah"      | Pesan error tampil sesuai harapan  | ✅     | ![image](https://github.com/user-attachments/assets/ab7e53d6-5158-4904-b8d7-e94c79533b96)
#)    |

## 🧪 Tabel Hasil Uji Coba 'troli'
| Test Case No | Action                     | Input                                                                            | Expected Result                                                                                 | Notes                                           | Contoh Gambar (Visualisasi)                                  |
| ------------ | -------------------------- | -------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------- | ------------------------------------------------------------ |
| 1            | Tambah produk ke keranjang | Simulasi produk dengan id=3, name="Kopi Espresso", price="Rp 25.000", quantity=2 | Produk masuk ke `$_SESSION['cart']` dengan quantity 2 dan harga 25.000                          | Pastikan `$_SESSION['cart']` berisi produk      | ![image](https://github.com/user-attachments/assets/6295d80d-7942-4f80-a759-8852ce26a04c)
)       |
| 2            | Update quantity            | POST `product_id=3`, `quantity=3`, `update_quantity`                             | Quantity produk id=3 berubah jadi 3, `$_SESSION['cart_count']` bertambah sesuai selisih jumlah  | Hitung `cart_count` benar setelah update        | ![image](https://github.com/user-attachments/assets/8e5b3b74-2a51-42ef-93be-c9e56d3142b0)
)          |
| 3            | Hapus produk               | POST `product_id=3`, `remove_item`                                               | Produk dengan id=3 hilang dari `$_SESSION['cart']`, `cart_count` berkurang sesuai jumlah produk | Produk dihapus dari session dengan benar        | ![image](https://github.com/user-attachments/assets/b0240f51-b78f-4daa-80c5-d465e9ca80b7)
)             |
| 4            | Tampilkan keranjang        | Session berisi 2 produk, masing-masing quantity dan harga berbeda                | Tabel muncul dengan nama produk, harga, jumlah, total tiap item, total keseluruhan              | Tampilan tabel sesuai desain dan harga diformat | ![image](https://github.com/user-attachments/assets/d63829cf-801d-4d68-9fb3-0a389409ef0d)
) |
| 5            | Checkout button visible    | Keranjang tidak kosong                                                           | Tombol "Checkout Sekarang" muncul                                                               | Tombol muncul hanya jika ada produk             | ![image](https://github.com/user-attachments/assets/851d0785-9577-4f55-9a0f-82b6502f82bd)
)          |
| 6            | Keranjang kosong           | `$_SESSION['cart']` kosong atau tidak ada                                        | Muncul pesan "Keranjang Anda kosong."                                                           | Pesan muncul saat keranjang kosong              | ![image](https://github.com/user-attachments/assets/70701717-bc42-49ef-b3f6-1a76ba39467b)
)         |



---

