<?php
require_once('login.php');

// Handle form submission from login.html
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Panggil fungsi login untuk memeriksa kredensial
    if (login($username, $password)) {
        // Redirect ke halaman setelah login berhasil
        header('Location: dashboard.php');
        exit;
    } else {
        // Redirect kembali ke login.html dengan pesan error
        header('Location: login.html?error=1');
        exit;
    }
}

// Handle logout action
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    logout();
}
?>
