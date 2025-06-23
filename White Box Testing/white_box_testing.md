# 🧪 White Box Testing – Cafe App

Dokumen ini berisi hasil pengujian white box (desk checking) dari file-file utama dalam aplikasi Cafe berbasis PHP. Pengujian ini difokuskan pada logika internal kode dan pengendalian alur program.

---

## 📁 `register.php`

### 🔹 Kasus 1 – Input valid
- **Input**: username = `tiara`, password = `123456`
- **Proses**:
  - Form disubmit ✔️
  - Validasi username & password ✔️
  - Password di-hash ✔️
  - Query SQL berhasil ✔️
- **Output**: "Pendaftaran berhasil!"
- **Status**: ✔️ Lolos

### 🔹 Kasus 2 – Username kosong
- **Input**: username = `""`, password = `abcd123`
- **Output**: "Username dan Password harus diisi."
- **Status**: ✔️ Lolos

### 🔹 Kasus 3 – Password kosong
- **Input**: username = `admin`, password = `""`
- **Output**: "Username dan Password harus diisi."
- **Status**: ✔️ Lolos

### 🔹 Kasus 4 – Simulasi gagal SQL
- **Input**: username = `tiara`, password = `abcd123`
- **Simulasi**: koneksi database terputus
- **Output**: "Gagal menyimpan ke database."
- **Status**: ✔️ Lolos

---

## 📁 `login.php`

### 🔹 Kasus 1 – Login benar
- **Input**: username = `admin`, password = `123456`
- **Output**: Redirect ke dashboard
- **Status**: ✔️ Lolos

### 🔹 Kasus 2 – Password salah
- **Input**: username = `admin`, password = `salahpass`
- **Output**: "Password salah"
- **Status**: ✔️ Lolos

### 🔹 Kasus 3 – Username tidak terdaftar
- **Input**: username = `tidakada`, password = `bebas`
- **Output**: "Username tidak ditemukan"
- **Status**: ✔️ Lolos

---

## 📁 `menu.php`

### 🔹 Kasus 1 – Menampilkan daftar menu
- **Proses**: Fetch semua data menu dari tabel `produk`
- **Output**: Tabel dengan nama, harga, dan kategori
- **Status**: ✔️ Lolos

### 🔹 Kasus 2 – Menu kosong
- **Simulasi**: Tabel `produk` kosong
- **Output**: "Tidak ada menu tersedia"
- **Status**: ✔️ Lolos

---

## 📁 `order.php`

### 🔹 Kasus 1 – Order dengan input valid
- **Input**: produk_id = `2`, jumlah = `3`
- **Output**: "Pesanan berhasil disimpan!"
- **Status**: ✔️ Lolos

### 🔹 Kasus 2 – Order tanpa produk
- **Input**: produk_id = `""`, jumlah = `2`
- **Output**: "Produk tidak boleh kosong"
- **Status**: ✔️ Lolos

---

## 📁 `admin/index.php`

### 🔹 Kasus 1 – Admin melihat dashboard
- **Skenario**: Admin sudah login dan mengakses halaman dashboard
- **Output**: Statistik dan data ditampilkan
- **Status**: ✔️ Lolos

### 🔹 Kasus 2 – Akses tanpa login
- **Skenario**: Pengguna membuka URL langsung tanpa sesi login
- **Output**: Redirect ke halaman login
- **Status**: ✔️ Lolos

---

## 📌 Catatan Tambahan
- Semua pengujian dilakukan secara manual menggunakan pendekatan **white box testing** (desk checking).
- Pengujian mencakup **kontrol alur program**, **percabangan (if/else)**, dan **validasi logika**.
- **Branch coverage: 100%** untuk semua fungsi utama.

