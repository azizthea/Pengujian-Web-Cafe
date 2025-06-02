<?php
session_start();
$page_title = "Checkout | Cafe Aroma";

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) === 0) {
    header('Location: keranjang.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #3a2c2a;
            --secondary: #c8a97e;
            --light: #f9f5f0;
            --gray: #eaeaea;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light);
            margin: 0;
            padding: 0;
            color: var(--primary);
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--primary);
        }

        .summary, .form-section {
            margin-bottom: 30px;
        }

        .summary h3 {
            margin-bottom: 15px;
            color: var(--primary);
            font-size: 1.2em;
        }

        .summary ul {
            padding: 0;
            list-style: none;
            border: 1px solid var(--gray);
            border-radius: 8px;
            background-color: #fff;
        }

        .summary li {
            padding: 12px 20px;
            border-bottom: 1px solid var(--gray);
        }

        .summary li:last-child {
            border-bottom: none;
        }

        .total {
            padding-top: 15px;
            font-size: 1.1em;
            font-weight: bold;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        textarea {
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--primary);
            color: #fff;
            padding: 14px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #5a453f;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            input, textarea {
                font-size: 0.95em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout Pesanan Anda</h2>

        <div class="summary">
            <h3>Ringkasan Pesanan</h3>
            <ul>
                <?php
                $grand_total = 0;
                foreach ($_SESSION['cart'] as $item):
                    $harga = intval(str_replace(['Rp ', '.'], '', $item['price']));
                    $sub_total = $harga * $item['quantity'];
                    $grand_total += $sub_total;
                ?>
                    <li>
                        <?php echo $item['name']; ?> x <?php echo $item['quantity']; ?> = 
                        <strong>Rp <?php echo number_format($sub_total, 0, ',', '.'); ?></strong>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="total">Total Bayar: Rp <?php echo number_format($grand_total, 0, ',', '.'); ?></p>
        </div>

        <div class="form-section">
            <form action="proses_checkout.php" method="post">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="alamat">Alamat Pengiriman</label>
                <textarea id="alamat" name="alamat" rows="4" required></textarea>

                <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: flex-end;">
    <a href="keranjang.php" style="
        background-color: #c8a97e;
        color: #3a2c2a;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.3s;
    " onmouseover="this.style.backgroundColor='#b08c67'" onmouseout="this.style.backgroundColor='#c8a97e'">
        ← Kembali ke troli
    </a>

    <button type="submit" class="submit-btn">Konfirmasi Pembayaran</button>
</div>

            </form>
            
        </div>
    </div>
</body>
</html>
