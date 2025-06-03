### 📋 Tabel Pengujian Robustness 

| Halaman     | No | Jenis Uji               | Input Khusus         | Expected Result              | Status | Bukti Gambar |
|-------------|----|-------------------------|----------------------|------------------------------|--------|--------------|
| **register** | 1  | Input kosong            | `Form Kosong` | Error "Username diperlukan" | ✅ | ![Error kosong](https://via.placeholder.com/150?text=Error+Kosong) |
| **register** | 2  | Email invalid           | `invalid-email`      | Error "Email tidak valid"    | ✅ | ![Error email](https://via.placeholder.com/150?text=Error+Email) |
| **register** | 3  | Konfirmasi salah        | `pass123` ≠ `pass456`| Error "Password tidak cocok" | ✅ | ![Error password](https://via.placeholder.com/150?text=Error+Password) |
| **login** | 4  | Password salah          | `salah123`           | Error "Credential salah"     | ✅ | ![Error login](https://via.placeholder.com/150?text=Error+Login) |
| **login** | 5  | Login valid             | Data benar           | Redirect ke index.php        | ✅ | ![Login sukses](https://via.placeholder.com/150?text=Login+Sukses) |
| **Troli** | 6  | Tambah item             | Qty: 2               | Item masuk cart              | ✅ | ![Cart+item](https://via.placeholder.com/150?text=Cart+Item) |
| **Troli** | 7  | Update quantity         | Qty: 2 → 3           | Subtotal update              | ✅ | ![Cart update](https://via.placeholder.com/150?text=Cart+Update) |
| **Troli** | 8  | Hapus item              | Klik hapus           | Item terhapus                | ✅ | ![Cart kosong](https://via.placeholder.com/150?text=Cart+Kosong) |

---

