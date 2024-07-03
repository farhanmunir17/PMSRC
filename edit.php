<?php
require 'function.php';
$id = $_GET["id"];
$mekah = naon("SELECT * FROM register WHERE id = $id")[0];
if(isset($_POST["submit"])){
    
    if(edit($_POST) > 0){

        echo"
        <script>
        alert('Data berhasil diubah');
        document.location.href='dashboard.php';
        </script>
        ";
    }else{
        echo"
        <script>
        alert('Data gagal diubah');
        document.location.href='dashboard.php';
        </script>
        ";   
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit data</title>
</head>
<body>
    <h1 class="tambahdata2">Edit data</h1>
    
    <!-- <form action="" method="POST">
        <ul>
            <li>
                <input type="hidden" name="id" id="id" value="<?= $mekah["id"]; ?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mekah["nama"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required value="<?= $mekah["alamat"]; ?>">
            </li>
            <li>
                <label for="umur">Umur :</label>
                <input type="text" name="umur" id="umur" required value="<?= $mekah["umur"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mekah["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Tekan ini!</button>
            </li>
        </ul>
    </form> -->

    <form action="" method="POST">
        <fieldset>
        <p>
            <input type="hidden" name="id" id="id" value="<?= $mekah["id"]; ?>">
        </p>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama"placeholder="nama..." required  value="<?= $mekah["nama"]; ?>">
        </p>
        <p>
            <label for="email">email</label>
            <input type="text" name="email" id="email" placeholder="email..." required  value="<?= $mekah["email"]; ?>">
        </p>
        <p>
            <label for="kategori">kategori</label>
            <input type="text" name="kategori" id="kategori" placeholder="kategori..." required  value="<?= $mekah["kategori"]; ?>">
        </p>
        <p>
        <button type="submit" name="submit">Tekan ini!</button>
        </p>
        </fieldset>
    </form>
    
</body>
</html>