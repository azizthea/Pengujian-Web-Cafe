# Laporan Behavior Tasting -  Cafe Aroma  

Berikut adalah rangkuman pengujian fungsionalitas halaman pemesanan produk:

## Tabel Pengujian  

| No. | Fitur            | BDD (Given – When – Then)                                                                                                                                                                | Flowchart                                                                                                                    |
| --- | ---------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| 1   | Register            |**Given**User berada di halaman registrasi, <br>**When**User mengisi form registrasi dengan username, email, password, dan konfirmasi password, kemudian menekan tombol "Masuk", <br>**Then** Sistem memvalidasi input yang dimasukkan.   | ![image](https://github.com/user-attachments/assets/98b7abd3-fd4b-4f77-9178-9bd7ec8c7379) |
| 2   | Login         | **Given**user membuka halaman login Café Library dan belum login ke sistem, <br>**When** user memasukkan username dan password yang valid, kemudian menekan tombol "Masuk", <br>**Then** user berhasil masuk ke sistem dan diarahkan ke halaman utama (index).                           | ![image](https://github.com/user-attachments/assets/a2f5c767-0f39-4662-8b44-4e6d87f6a562) |
| 3   | Tambah produck | **Given** User sudah menambahkan produk ke troli (session cart ada isinya), <br>**When** User membuka halaman troli belanja, <br>**Then** Sistem menampilkan daftar produk dalam troli dengan jumlah dan total harga. | ![image](https://github.com/user-attachments/assets/bfd6ec41-9297-414c-a99f-ec9c66f87b70)
                                                                                

