<?php
include 'function.php';

// Memeriksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kategori = $_POST['kategori'];

    // Menyiapkan pernyataan SQL
    $sql = "INSERT INTO register (nama, email, kategori) VALUES (?, ?, ?)";

    // Menginisialisasi dan mengeksekusi pernyataan
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $nama, $email, $kategori);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!'); window.location.href='index.html';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Menutup pernyataan
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>
