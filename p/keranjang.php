<?php
session_start();
$page_title = "Keranjang Belanja | Cafe Aroma";

// Hapus item dari keranjang
if (isset($_POST['remove_item'])) {
    $product_id = $_POST['product_id'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $product_id) {
            $_SESSION['cart_count'] -= $item['quantity'];
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

// Update jumlah produk
if (isset($_POST['update_quantity'])) {
    $product_id = $_POST['product_id'];
    $new_quantity = intval($_POST['quantity']);
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product_id) {
            $_SESSION['cart_count'] += ($new_quantity - $item['quantity']);
            $item['quantity'] = $new_quantity;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #3a2c2a;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 960px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #c8a97e;
            color: #3a2c2a;
        }
        .total {
            font-weight: bold;
            font-size: 1.1em;
        }
        .back-btn, button {
            display: inline-block;
            padding: 10px 16px;
            background-color: #c8a97e;
            color: #fff;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover, button:hover {
            background-color: #b89a6b;
        }
        input[type="number"] {
            width: 60px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .text-right {
            text-align: right;
        }
        header {
    background-color: #3a2c2a;
    color: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.header-container {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 10px; /* Lebih mepet ke pinggir */
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5em;
    font-weight: bold;
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo i {
    font-size: 1.2em;
    color: #c8a97e; /* Icon kopi warna cream */
}

.logo a {
    color: #fff;
    text-decoration: none;
}

.user-menu a {
    color: #fff;
    text-decoration: none;
    margin-left: 20px;
    font-weight: 500;
    transition: color 0.3s ease;
}

.user-menu a:hover {
    color: #c8a97e;
}
.checkout-btn {
    display: inline-block;
    background-color: #3a2c2a;
    color: #fff;
    padding: 12px 20px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.checkout-btn:hover {
    background-color: #5a453f;
}


    </style>
</head>
<body>
    <header>
    <div class="header-container">
        <div class="logo">
            <i class="fas fa-coffee"></i>
            <a href="../index.php">Cafe Aroma</a>
        </div>
    </div>
</header>

    <div class="container">
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($_SESSION['cart'] as $item):
                        $price = intval(str_replace(['Rp ', '.'], '', $item['price']));
                        $quantity = intval($item['quantity']);
                        $item_total = $price * $quantity;
                        $total += $item_total;
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td>Rp <?php echo number_format($price, 0, ',', '.'); ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">
                                <input type="number" name="quantity" value="<?php echo $quantity; ?>" min="1">
                                <button type="submit" name="update_quantity">Update</button>
                            </form>
                        </td>
                        <td>Rp <?php echo number_format($item_total, 0, ',', '.'); ?></td>
                        <td class="actions">
                            <form method="post" onsubmit="return confirm('Hapus item ini dari keranjang?');">
                                <input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">
                                <button type="submit" name="remove_item"><i class="fas fa-trash-alt"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="total text-right">Total</td>
                        <td class="total">Rp <?php echo number_format($total, 0, ',', '.'); ?></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <?php if (count($_SESSION['cart']) > 0): ?>
    <div style="text-align: right; margin-top: 20px;">
        <a href="checkout.php" class="checkout-btn">Checkout Sekarang</a>
    </div>
<?php endif; ?>

        <?php else: ?>
            <p>Keranjang Anda kosong.</p>
        <?php endif; ?>
        <div style="margin-top: 30px;">
            <a href="../index.php" class="back-btn">&larr; Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
