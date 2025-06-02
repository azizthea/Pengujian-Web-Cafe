<?php
// Start session at the very beginning
session_start();

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
    $_SESSION['cart_count'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $nama = isset($_POST['nama']) ? htmlspecialchars(trim($_POST['nama'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $alamat = isset($_POST['alamat']) ? htmlspecialchars(trim($_POST['alamat'])) : '';

    // Validate required fields
    if (empty($nama) || empty($email) || empty($alamat)) {
        echo "<script>alert('Semua field wajib diisi.'); window.history.back();</script>";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid.'); window.history.back();</script>";
        exit;
    }

    // Prepare checkout data
    $checkout_data = [
        'nama' => $nama,
        'email' => $email,
        'alamat' => $alamat,
        'items' => isset($_SESSION['cart']) ? $_SESSION['cart'] : [],
        'order_date' => date('Y-m-d H:i:s'),
        'order_id' => uniqid('ORD-')
    ];

    // Save to session
    $_SESSION['checkout_data'] = $checkout_data;

    // Clear cart if it exists
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        unset($_SESSION['cart_count']);
    }

    // Set page title
    $page_title = "Checkout Berhasil";
} else {
    // Redirect if not POST request
    header("Location: checkout.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary:rgb(54, 34, 15);
            --secondary: #f8f9fa;
            --accent: #e67e22;
            --text: #333333;
            --light-text: #6c757d;
            --border: #e0e0e0;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--secondary);
            margin: 0;
            padding: 0;
            color: var(--text);
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            margin: 80px auto;
            padding: 0 20px;
        }
        
        .success-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .card-header {
            background-color: var(--primary);
            color: white;
            padding: 30px 20px;
        }
        
        .card-header h1 {
            font-family: 'Playfair Display', serif;
            margin: 0;
            font-size: 2.2rem;
            font-weight: 600;
        }
        
        .card-header .icon {
            font-size: 3.5rem;
            margin-bottom: 15px;
            display: inline-block;
        }
        
        .card-body {
            padding: 40px;
        }
        
        .customer-info {
            text-align: left;
            margin-bottom: 30px;
            padding: 25px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border-left: 4px solid var(--accent);
        }
        
        .info-item {
            margin-bottom: 12px;
            display: flex;
        }
        
        .info-label {
            font-weight: 500;
            min-width: 100px;
            color: var(--light-text);
        }
        
        .info-value {
            flex-grow: 1;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 32px;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 1rem;
            margin-top: 20px;
        }
        
        .btn:hover {
            background-color:rgb(87, 39, 12);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .confirmation-text {
            color: var(--light-text);
            margin-bottom: 30px;
            font-size: 1.05rem;
        }
        
        .thank-you {
            font-size: 1.3rem;
            margin-bottom: 25px;
            color: var(--primary);
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .container {
                margin: 40px auto;
            }
            
            .card-body {
                padding: 25px;
            }
            
            .customer-info {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-card">
            <div class="card-header">
                <div class="icon">✓</div>
                <h1>Pesanan Anda Diterima</h1>
            </div>
            
            <div class="card-body">
                <?php if (isset($_SESSION['checkout_data'])): ?>
                    <p class="thank-you">Terima kasih telah berbelanja dengan kami, <?= htmlspecialchars($_SESSION['checkout_data']['nama']) ?>!</p>
                    
                    <p class="confirmation-text">
                        Pesanan Anda sedang diproses. Kami telah mengirimkan detail konfirmasi ke alamat email Anda.
                        Silakan periksa folder spam jika Anda tidak menemukan email kami dalam beberapa menit.
                    </p>
                    
                    <div class="customer-info">
                        <div class="info-item">
                            <span class="info-label">Nama:</span>
                            <span class="info-value"><?= htmlspecialchars($_SESSION['checkout_data']['nama']) ?></span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Email:</span>
                            <span class="info-value"><?= htmlspecialchars($_SESSION['checkout_data']['email']) ?></span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Alamat:</span>
                            <span class="info-value"><?= htmlspecialchars($_SESSION['checkout_data']['alamat']) ?></span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">No. Pesanan:</span>
                            <span class="info-value"><?= htmlspecialchars($_SESSION['checkout_data']['order_id']) ?></span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Tanggal:</span>
                            <span class="info-value"><?= htmlspecialchars($_SESSION['checkout_data']['order_date']) ?></span>
                        </div>
                    </div>
                    
                    <a href="../index.php" class="btn">Kembali ke Beranda</a>
                <?php else: ?>
                    <p class="thank-you">Terjadi kesalahan dalam pemrosesan pesanan Anda.</p>
                    <p class="confirmation-text">Silakan coba lagi atau hubungi tim dukungan kami.</p>
                    <a href="../index.php" class="btn">Kembali ke Beranda</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>