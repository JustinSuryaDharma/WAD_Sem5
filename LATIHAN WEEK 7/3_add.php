<?php

$conn = mysqli_connect("localhost", "root", "", "latihan_wad_week7");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$judul = $_POST['judul'];
$penyanyi = $_POST['penyanyi'];
$album = $_POST['album'];
$tahun = $_POST['tahun'];
$foto_album = $_POST['foto_album']; 


$sql = "INSERT INTO data_lagu (Judul, Penyanyi, Album, Tahun, Foto_Album) VALUES ('$judul', '$penyanyi', '$album', '$tahun', '$foto_album')";

if (mysqli_query($conn, $sql)) {
    header("Location: 3_popup.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>


