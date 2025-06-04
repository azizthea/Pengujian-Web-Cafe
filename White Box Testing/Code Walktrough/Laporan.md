# White Box Testing – Fungsi `addMenu()`

## 📌 Desk Checking – Fungsi `addMenu()`

**Deskripsi:**  
Desk Checking dilakukan secara manual dengan membaca alur kode dan mengevaluasi logika dari fungsi `addMenu()` untuk menemukan kesalahan logika dan potensi bug.

**Tim Penguji:**
- Iqbal Yudiana
- Tiara Putri Latifani Dianata  
- Abdul Aziz
- Miftah  


**Hasil Evaluasi:**
- Fungsi membaca input dari form menu dengan baik.
- ID menu dibuat otomatis dan tidak duplikat.
- Validasi input seperti nama menu, harga, dan kategori berjalan sesuai ketentuan.
- Penanganan kondisi kosong sudah ada.
- Fungsi `simpanData()` dipanggil setelah input valid.

**Kesimpulan:**  
✅ Tidak ditemukan kesalahan logika. Fungsi `addMenu()` aman digunakan.

---

## 📌 Formal Inspection – Fungsi `addMenu()`

**Moderator:** Tiara Putri Latifani Dianata  
**Pembaca Kode:** Iqbal Yudiana  
**Pencatat:** Abdul Aziz  
**Reviewer Tambahan:** Miftah  
**Tanggal:** [Tanggal Kegiatan]

### ✅ Checklist Pemeriksaan:
- [x] Validasi input sudah mencakup semua kasus penting
- [x] ID menu unik dan aman untuk penyimpanan
- [x] Penanganan error disiapkan dengan `try-catch`
- [x] Form di-reset setelah proses input berhasil
- [x] Tidak ada variabel global tidak dikenal

### 📝 Catatan Tambahan:
- Dapat ditambahkan validasi untuk harga menu yang sangat besar (misal > 1.000.000).
- Perlu dokumentasi tambahan untuk skenario error dalam `simpanData()` jika terjadi kegagalan penyimpanan (misal: storage penuh, error koneksi).

---

**Status:**  
✅ Fungsi telah melewati dua tahap pengujian white box (Desk Checking & Formal Inspection) dan dinyatakan **layak digunakan**.

---
