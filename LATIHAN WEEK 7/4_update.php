<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "latihan_wad_week7");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form
$id = $_POST['id'];
$judul = $_POST['judul'];
$penyanyi = $_POST['penyanyi'];
$album = $_POST['album'];
$tahun = $_POST['tahun'];
$foto_album = $_POST['foto_album']; 

// SQL query to insert the data into the database
$sql = "UPDATE data_lagu SET judul = '$judul', penyanyi = '$penyanyi', album = '$album', tahun = $tahun, foto_album = '$foto_album' WHERE id = $id;";


if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>