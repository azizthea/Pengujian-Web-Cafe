### 📋 Tabel Pengujian Robustness 

| Halaman     | No | Jenis Uji               | Input Khusus         | Expected Result              | Status | Bukti Gambar |
|-------------|----|-------------------------|----------------------|------------------------------|--------|--------------|
| **register** | 1  | Input kosong            | `Form Kosong` | Error "Username diperlukan" | ✅ | ![image](https://github.com/user-attachments/assets/c7f398c2-965a-4c05-a33d-8bb519d1c285)
) |
| **register** | 2  | Email invalid 20 karakter           | `invalid-email`      | Error "Email tidak valid"    | ❌ | ![image](https://github.com/user-attachments/assets/bea9de92-86ef-4850-bc7f-bcf4225548c4)
) |
| **produck** | 3  | produck                 | pesanan              | tidak bisa memesan sebelum login | ❌ |![image](https://github.com/user-attachments/assets/597e8d60-088c-4b7d-a86a-e3f3cc2ac677)
) |
| **produck** | 4  | troli          | `pesanan`           | tidak bisa memesan sebelum login     | ❌ | ![image](https://github.com/user-attachments/assets/9b90ef42-387c-4525-a76d-5387b533f6bb)
) |

---

