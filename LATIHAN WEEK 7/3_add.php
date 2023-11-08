<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "latihan_wad_week7");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form
$judul = $_POST['judul'];
$penyanyi = $_POST['penyanyi'];
$album = $_POST['album'];
$tahun = $_POST['tahun'];
$foto_album = $_POST['foto_album']; // Treat it as a string

// SQL query to insert the data into the database
$sql = "INSERT INTO data_lagu (Judul, Penyanyi, Album, Tahun, Foto_Album) VALUES ('$judul', '$penyanyi', '$album', '$tahun', '$foto_album')";

if (mysqli_query($conn, $sql)) {
    echo "Data added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="custom-alert" class="custom-alert">
    <p>Data Anda telah ditambahkan.</p>
    <button onclick="bukaHalamanLain()">Kembali</button>
</div>

<script>
function tampilkanCustomAlert() {
    document.getElementById("custom-alert").style.display = "block";
}

function bukaHalamanLain() {
    window.location.href = "1.php"; // Ganti dengan URL halaman yang ingin Anda tuju.
}
</script>


</body>
</html>
