<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Flow Testing & DFD – Aplikasi Web Cafe</title>
  <style>
    *, *::before, *::after {
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 20px;
      line-height: 1.6;
      background-color: #f9f9f9;
      color: #333;
    }
    h1, h2, h3 {
      color: #004d7a;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 30px;
      overflow-x: auto;
      display: block;
    }
    th, td {
      border: 1px solid #999;
      padding: 10px;
      text-align: left;
      font-size: 14px;
    }
    th {
      background-color: #004d7a;
      color: #fff;
    }
    pre {
      background: #272822;
      color: #f8f8f2;
      padding: 15px;
      overflow-x: auto;
      border-radius: 6px;
      font-size: 14px;
    }
    code {
      font-family: monospace;
    }
    ul {
      padding-left: 20px;
    }
  </style>
</head>
<body>

  <h1>🔄 Data Flow Testing – Aplikasi Web Cafe</h1>

  <p>Model ini menganalisis bagaimana data dan variabel mengalir dalam sistem — mulai dari deklarasi, modifikasi, hingga penggunaannya.</p>

  <table>
    <thead>
      <tr>
        <th>Variabel / Entitas</th>
        <th>Definisi</th>
        <th>Penggunaan</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>username</td><td>Input dari form <code>register</code> dan <code>login</code></td><td>Autentikasi dan identifikasi pengguna</td><td>Digunakan saat login, disimpan di tabel <code>users</code>.</td></tr>
      <tr><td>password</td><td>Input dari form <code>register</code> dan <code>login</code></td><td>Verifikasi login</td><td>Disimpan dalam bentuk hash, diverifikasi saat login.</td></tr>
      <tr><td>email</td><td>Input dari form <code>register</code></td><td>Validasi & penyimpanan kontak pengguna</td><td>Dicek keunikan dan disimpan di tabel <code>users</code>.</td></tr>
      <tr><td>produk</td><td>Data dari tabel <code>produk</code></td><td>Ditampilkan dan dipilih dalam pemesanan</td><td>Berisi nama, harga, deskripsi makanan/minuman.</td></tr>
      <tr><td>produk_id</td><td>Parameter URL / query</td><td>Identifikasi produk edit/hapus</td><td>Digunakan saat proses <code>edit_produk</code>, <code>delete_produk</code>, pemesanan.</td></tr>
      <tr><td>order</td><td>Data pesanan baru</td><td>Disimpan ke tabel <code>orders</code> dan <code>order_items</code></td><td>Menyimpan transaksi: total harga, tanggal, dan <code>user_id</code>.</td></tr>
      <tr><td>order_id</td><td>Otomatis saat pesanan dibuat</td><td>Relasi antar tabel</td><td>Digunakan untuk menandai satu transaksi.</td></tr>
      <tr><td>session</td><td>Dibentuk saat login berhasil</td><td>Menjaga status login</td><td>Menyimpan <code>username</code> dan <code>user_id</code> selama sesi aktif.</td></tr>
      <tr><td>date</td><td>Input atau otomatis</td><td>Tanggal transaksi</td><td>Untuk laporan berdasarkan waktu.</td></tr>
      <tr><td>orders</td><td>Hasil query admin</td><td>Ditampilkan sebagai laporan</td><td>Data penjualan yang ditampilkan di <code>admin/index.php</code>.</td></tr>
    </tbody>
  </table>

  <h2>📊 DFD Level 0 – Aplikasi Web Cafe</h2>
  <pre><code>          +-----------------+
          |     Pengguna    |
          +--------+--------+
                   |
                   v
          +--------+--------+
          |  Sistem Cafe Web |
          +--------+--------+
                   |
         +---------+---------+---------+
         |                   |         |
         v                   v         v
+----------------+  +----------------+  +----------------+
|   Data User    |  |   Data Produk  |  |   Data Pesanan |
+----------------+  +----------------+  +----------------+</code></pre>

  <p><strong>Deskripsi Level 0:</strong></p>
  <ul>
    <li>Pengguna berinteraksi dengan Sistem Cafe Web.</li>
    <li>Sistem mengelola: Data User, Produk, dan Pesanan.</li>
  </ul>

  <h2>📊 DFD Level 1 – Fokus: Sistem Cafe Web</h2>
  <pre><code>                          +---------------------+
                          |      Pengguna       |
                          +----------+----------+
                                     |
      +------------------------------+------------------------------+
      |                                                             |
      v                                                             v
+------------+        +------------------+              +-----------------+
| Register   |------->| Validasi & Simpan|<-------------|      Login      |
+------------+        +------------------+              +-----------------+
                          |                                     |
                          v                                     v
                  +---------------+                      +--------------+
                  |   Data Users  |<----------------------+  Cek Session |
                  +---------------+                      +--------------+
                                                           |
                                                           v
         +-------------------------+             +-----------------------+
         |   Menu Produk (View)   |<------------>|      order.php        |
         +-----------+-------------+             +-----------+-----------+
                     |                                       |
                     v                                       v
             +--------------+                        +------------------+
             | Data Produk  |<---------------------->|   Data Pesanan   |
             +--------------+                        +------------------+

                     |
                     v
            +-----------------------+
            |    Admin Dashboard    |
            +----------+------------+
                       |
                       v
                +-------------+
                |  Statistik  |
                +-------------+</code></pre>

  <h3>📝 Penjelasan Komponen:</h3>
  <table>
    <thead>
      <tr>
        <th>Proses</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Register</td><td>Form input user baru disimpan ke database users</td></tr>
      <tr><td>Login</td><td>Autentikasi pengguna via username dan password</td></tr>
      <tr><td>Validasi & Simpan</td><td>Proses hashing password, cek keunikan username/email</td></tr>
      <tr><td>Cek Session</td><td>Memastikan user telah login sebelum akses menu atau order</td></tr>
      <tr><td>Menu Produk (View)</td><td>Menampilkan daftar makanan/minuman dari tabel produk</td></tr>
      <tr><td>order.php</td><td>Menyimpan data pesanan ke tabel orders dan order_items</td></tr>
      <tr><td>Admin Dashboard</td><td>Melihat statistik total user, produk, dan transaksi</td></tr>
      <tr><td>Statistik</td><td>Hasil agregat data dari tabel terkait</td></tr>
    </tbody>
  </table>

</body>
</html>
