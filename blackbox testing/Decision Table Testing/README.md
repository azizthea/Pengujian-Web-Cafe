# Decision Table Testing 


## Kondisi yang Diuji

| Kondisi            | Keterangan                                  |
|--------------------|--------------------------------------------|
| Username Valid     | Username tidak kosong dan minimal 4 karakter |
| Username Unik      | Username belum terdaftar di database       |
| Email Valid        | Email sesuai format yang benar             |
| Email Unik         | Email belum terdaftar di database          |
| Password Valid     | Password tidak kosong dan minimal 6 karakter |
| Confirm Password   | Password dan konfirmasi password cocok     |

## Tabel Keputusan Registrasi

| No | Username Valid | Username Unik | Email Valid | Email Unik | Password Valid | Confirm Password | Ekspektasi Hasil                       | Status (True/False) |
|----|----------------|---------------|-------------|------------|----------------|------------------|--------------------------------------|---------------------|
| 1  | True           | True          | True        | True       | True           | True             | Registrasi berhasil                   | True                |
| 2  | False          | -             | True        | True       | True           | True             | Error: Username minimal 4 karakter   | True                |
| 3  | True           | False         | True        | True       | True           | True             | Error: Username sudah digunakan      | True                |
| 4  | True           | True          | False       | -          | True           | True             | Error: Email tidak valid             | True                |
| 5  | True           | True          | True        | False      | True           | True             | Error: Email sudah digunakan         | True                |
| 6  | True           | True          | True        | True       | False          | True             | Error: Password minimal 6 karakter   | True                |
| 7  | True           | True          | True        | True       | True           | False            | Error: Password tidak cocok          | True                |
| 8  | False          | -             | False       | -          | False          | False            | Error pada semua input yang tidak valid | True             |

## Tabel Keputusan Login
| Test Case | Username Diisi | Password Diisi | Username Valid | Password Benar | Login Berhasil | Pesan Error                    |
| --------- | -------------- | -------------- | -------------- | -------------- | -------------- | ------------------------------ |
| T1        | True           | True           | True           | True           |  True          |  Tidak                        |
| T2        | True           | True           | False          | -              | False          |  Username atau password salah |
| T3        | True           | False          | True           | -              | False          |  silakan isi kolom ini        |
| T4        | False          | True           | -              | -              | False          |  silakan isi kolom ini        |
| T5        | False          | False          | -              | -              | False          |  Username atau password salah |
| T6        | True           | True           | True           | False          | False          |  Username atau password salah |

## Tabel Keputusan troli
| No | C1 (Hapus) | C2 (Update) | C3 (Ada?) | C4 (Jumlah Valid?) | Hasil                   |
| -- | ---------- | ----------- | --------- | ------------------ | ----------------------- |
| 1  | True          | False           | True         | -                  | A1: Item dihapus        |
| 2  | True          | False           | False         | -                  | A3: Tidak ada perubahan |
| 3  | False          | True           | True         | True                  | A2: Jumlah diperbarui   |
| 4  | False          | True           | True         | False                  | A3: Tidak ada perubahan |
| 5  | False          | True           |False         | True                  | A3: Tidak ada perubahan |
| 6  | False          | False           | -         | -                  | A3: Tidak ada perubahan |


## Penjelasan Status

- **True** berarti aplikasi berhasil menampilkan hasil yang diharapkan (baik berhasil registrasi atau menampilkan error yang sesuai).
- **False** berarti aplikasi tidak sesuai dengan ekspektasi.


