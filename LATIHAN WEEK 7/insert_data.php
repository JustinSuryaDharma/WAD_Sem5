<?php
//koneksi ke DBMS mysql
$conn = mysqli_connect("localhost", "root", "", "latihan_wad_week7");

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //ambil data dari tiap elemen dalam form
    $judul = $_POST["judul"];
    $penyanyi = $_POST["penyanyi"];
    $album = $_POST["album"];
    $tahun = $_POST["tahun"];
    $foto_album = $_POST["foto_album"];

    //query insert data
    $query = "INSERT INTO data_lagu (judul, penyanyi, album, tahun, foto_album) VALUES ('$judul', '$penyanyi', '$album', $tahun, '$foto_album')";

    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
