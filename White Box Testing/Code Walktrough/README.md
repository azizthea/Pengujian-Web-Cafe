# Code Walkthrough - login.php (Cafe App)

## Tujuan  
Melakukan review kode login Cafe App bersama tim teknis.

## Tim Reviewer  
- Miftah Rizkia Aldira (20221310025)  
- Abdul Aziz Nurahmat (20221310019)  
- Iqbal Yudiana (20221310020)  
- Tiara Putri Latifani Dianata (20221310086)  

## Fokus Review  
- Validasi dan keamanan input login  
- Kejelasan dan efisiensi logika login  
- Penanganan session dan redirection  

## Catatan  
- Input belum menggunakan `htmlspecialchars()` atau `prepared statement`, rawan SQL Injection.  
- Login berhasil → sesi disimpan dan redirect ke `index.php`.  
- Perlu pembatasan percobaan login untuk keamanan tambahan.  

---

## 👥 Tim Penguji - Kelompok 7  

| No | Nama Anggota                 | NIM         | Tugas Pengujian                                                                        |
|----|-----------------------------|-------------|----------------------------------------------------------------------------------------|
| 1  | Miftah Rizkia Aldira        | 20221310025 |                                                                                        |
| 2  | Abdul Aziz Nurahmat         | 20221310019 |                                                                                        |
| 3  | Iqbal Yudiana               | 20221310020 |                                                                                        |
| 4  | Tiara Putri Latifani Dianata| 20221310086 | ✅ Data Flow Testing<br>✅ Desk Checking<br>✅ Code Walkthrough<br>✅ Control Flow Testing |
