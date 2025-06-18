Tambahkan saat login sukses
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['success_message'] = 'Login berhasil! Selamat datang, ' . $user['username'];
    header('Location: index.php');
    exit;
}
