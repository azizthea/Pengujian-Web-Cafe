# 🧪 Black Box Testing

## 📌 Pengertian

**Black Box Testing** adalah metode pengujian perangkat lunak yang menguji fungsionalitas aplikasi tanpa mengetahui struktur internal, kode program, atau logika implementasinya. Pengujian ini berfokus pada input dan output sistem.

---

## 🎯 Tujuan Utama

- Memastikan perangkat lunak sesuai dengan kebutuhan dan spesifikasi pengguna.
- Mengidentifikasi kesalahan atau bug dari sisi pengguna.
- Menguji sistem berdasarkan fungsionalitas, bukan kode.

---

## 🧱 Jenis-Jenis Black Box Testing

Berikut adalah 10 jenis pengujian dalam Black Box Testing:

1. **Boundary Value Analysis**  
   Menguji batas atas dan batas bawah dari input yang diterima sistem.

2. **Equivalence Partitioning**  
   Mengelompokkan data input menjadi partisi ekuivalen, lalu menguji satu nilai dari setiap partisi.

3. **Comparison Testing**  
   Membandingkan hasil dari dua sistem atau versi berbeda untuk memastikan konsistensi output.

4. **Decision Table Testing**  
   Menggunakan tabel keputusan untuk memeriksa berbagai kombinasi input dan output.

5. **Sample Testing**  
   Mengambil sampel dari data atau kasus penggunaan untuk diuji.

6. **Robustness Testing**  
   Menguji seberapa kuat sistem menangani input yang tidak valid atau ekstrem.

7. **Behaviour Testing**  
   Memeriksa bagaimana sistem merespons berbagai aksi pengguna.

8. **Performance Testing**  
   Menilai kinerja sistem dalam kondisi tertentu, seperti beban tinggi.

9. **Endurance Testing**  
   Menguji stabilitas sistem jika dijalankan terus-menerus dalam jangka waktu lama.

10. **Cause-Effect Relationship Testing**  
    Mengidentifikasi hubungan sebab-akibat antara input dan output sistem.

---

## ✅ Kelebihan

- Tidak perlu memahami kode program.
- Efektif untuk menguji fitur utama aplikasi.
- Cocok digunakan oleh QA tester non-programmer.

## ❌ Kekurangan

- Tidak bisa menguji logika internal atau jalur kode.
- Tidak menjamin cakupan pengujian yang lengkap.
- Beberapa bug internal bisa saja terlewat.

---

## 📄 Contoh Skenario Pengujian

**Fitur yang diuji:** Form login  
**Input:** Username dan password  
**Output yang diharapkan:**  
- Jika valid: masuk ke sistem.  
- Jika tidak valid: pesan kesalahan.  

Jenis pengujian yang cocok:  
- **Boundary Value Analysis** untuk panjang karakter  
- **Equivalence Partitioning** untuk grup input valid dan tidak valid  
- **Behaviour Testing** untuk respons sistem

---

> _Black Box Testing berfokus pada hasil akhir, bukan cara kerjanya. Ini menjadikannya alat penting dalam menjamin kualitas dari sudut pandang pengguna._

