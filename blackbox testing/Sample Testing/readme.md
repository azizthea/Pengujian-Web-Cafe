# 📋 Sample Testing Form `register.php`

Dokumen ini berisi hasil pengujian input pada halaman registrasi (`register.php`) untuk menguji validasi, stabilitas aplikasi, dan keamanan terhadap input tidak biasa.

## 🧪 Tabel Hasil Uji Coba

| No | Input Username         | Input Email        | Password     | Konfirmasi Password | Jenis Masukan           | Expected Result                                        | Actual Result                   | Status | Bukti Gambar |
|----|------------------------|--------------------|--------------|----------------------|--------------------------|-------------------------------------------------------|----------------------------------|--------|--------------|
| 1  | 300 karakter huruf     | user@mail.com      | password123  | password123          | Panjang ekstrem          | Aplikasi tetap stabil (boleh gagal simpan)            | Tidak crash, input gagal        | ✅     | ![img](#)    |
| 2  | 😊🔥👩‍💻📚🚀              | emoji@mail.com     | password123  | password123          | Emoji                    | Aplikasi menerima/menolak tanpa crash                 | Task berhasil ditambahkan       | ✅     | ![img](#)    |
| 3  | (spasi kosong)         | user@mail.com      | password123  | password123          | Spasi saja               | Aplikasi tampilkan error "Username diperlukan"        | Tidak crash, error muncul       | ✅     | ![img](#)    |
| 4  | `<script>alert(1)</script>` | xss@mail.com | password123  | password123          | Karakter aneh/injeksi    | Aplikasi aman, tidak ada popup/error                  | Tidak ada popup/error           | ✅     | ![img](#)    |
| 5  | normaluser             | invalid-email      | password123  | password123          | Format email salah       | Tampilkan error "Email tidak valid"                   | Error muncul sesuai harapan     | ✅     | ![img](#)    |
| 6  | user123                | user@mail.com      | pass         | pass                 | Password terlalu pendek  | Error "Password minimal 6 karakter"                   | Validasi tampil                 | ✅     | ![img](#)    |
| 7  | user123                | user@mail.com      | password123  | password321          | Konfirmasi tidak cocok   | Error "Password tidak cocok"                          | Validasi tampil                 | ✅     | ![img](#)    |
| 8  | user123                | user@mail.com      | password123  | password123          | Input valid              | Data berhasil disimpan, redirect ke login             | Redirect berhasil               | ✅     | ![img](#)    |

## 📌 Catatan

- Uji coba dilakukan pada tanggal: `2025-01-01`
- Bukti gambar di kolom terakhir dapat diisi dengan screenshot sesuai hasil testing.
- Semua input berhasil ditangani tanpa menyebabkan crash atau perilaku tidak diinginkan.

---

