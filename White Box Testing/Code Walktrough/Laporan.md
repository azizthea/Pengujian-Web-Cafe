# ✅ White Box Testing – Fungsi `addMenu()`

## 📌 Desk Checking – Fungsi addMenu()

**Deskripsi:**
Desk Checking dilakukan secara manual dengan membaca alur kode dan mengevaluasi logika dari fungsi `addMenu()` untuk menemukan kesalahan logika dan potensi bug.

**Tim Penguji:**
- Tiara Putri Latifani Dianata  
- Miftah  
- Iqbal Yudiana  
- Abdul Aziz  

**Hasil Evaluasi:**

| Baris     | Kode/Deskripsi                               | Hasil Evaluasi                                   |
|-----------|-----------------------------------------------|--------------------------------------------------|
| 1–3       | Ambil nilai dari input form                   | ✅ Sesuai, data dibaca dan dibersihkan (trim)     |
| 6         | Validasi input kosong dan harga tidak valid   | ✅ Sudah memadai                                  |
| 10        | Validasi panjang nama menu                    | ✅ Sudah sesuai aturan                            |
| 14        | Validasi harga harus lebih dari 0             | ✅ Aman                                           |
| 18–23     | Objek `menuBaru` dengan ID unik               | ✅ Format ID cukup unik                           |
| 26        | Menambahkan ke array `daftarMenu`             | ✅ Sudah benar                                    |
| 29–33     | Simpan dan render ulang data                  | ✅ Sudah ditangani dengan try-catch               |
| 36–39     | Reset form input                              | ✅ Formulir dikosongkan setelah submit            |

**Kesimpulan:**  
Tidak ditemukan kesalahan logika. Fungsi aman digunakan.

---

## 📌 Formal Inspection – Fungsi `addMenu()`

**Moderator:** Tiara Putri Latifani Dianata  
**Pembaca Kode:** Iqbal Yudiana  
**Pencatat:** Abdul Aziz  
**Reviewer Tambahan:** Miftah  
**Tanggal:** [Tanggal Kegiatan]

**Checklist yang diperiksa:**
- ✅ Validasi input sudah mencakup semua kasus penting
- ✅ ID menu unik dan aman untuk penyimpanan
- ✅ Penanganan error disiapkan (`try-catch`)
- ✅ Form reset setelah eksekusi berhasil
- ✅ Tidak ada variabel global tidak dikenal

**Catatan Tambahan:**
- Bisa ditambahkan validasi untuk harga menu yang sangat besar.
- Perlu dokumentasi untuk skenario error `simpanData()` jika terjadi kegagalan.

