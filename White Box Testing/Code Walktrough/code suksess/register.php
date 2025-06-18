Tambahkan setelah registrasi sukses
$_SESSION['success_message'] = 'Registrasi berhasil! Silakan login untuk mulai memesan.';
header('Location: login.php');
exit;
