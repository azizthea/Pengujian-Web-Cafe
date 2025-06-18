Setelah pesanan sukses
$_SESSION['success_message'] = 'Pesanan berhasil dikirim! Terima kasih telah memesan di Cafe Aroma.';
header('Location: dashboard/order_success.php'); // atau index.php
exit;
