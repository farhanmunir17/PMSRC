<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "pms";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function naon($naon){
    global $conn;
     $result = mysqli_query($conn, $naon);
     $bebas=[];
     while($weh = mysqli_fetch_assoc($result)){
        $bebas[]=$weh;
     }
     return $bebas;
}

// function executeQuery($query) {
//     global $sconn;
    
//     // Cek apakah koneksi valid
//     if (!$sconn) {
//         die("Connection failed: " . mysqli_connect_error());
//     }

//     $result = mysqli_query($sconn, $query);
    
//     // Cek apakah query berhasil
//     if ($result === false) {
//         die("Query failed: " . mysqli_error($sconn));
//     }

//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }
    
//     return $rows;
// }



function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $kategori = htmlspecialchars($data["kategori"]);

    $naon = "INSERT INTO register (nama, email, kategori) VALUES ('$nama', '$email', '$kategori')";

    mysqli_query($conn, $naon);
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $kategori = htmlspecialchars($data["kategori"]);

    $naon = "UPDATE register SET
    nama = '$nama',
    email = '$email',
    kategori = '$kategori'
    WHERE id = $id";

    mysqli_query($conn, $naon);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query( $conn, "DELETE FROM register WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>