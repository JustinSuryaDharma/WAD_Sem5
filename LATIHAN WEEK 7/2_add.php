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
