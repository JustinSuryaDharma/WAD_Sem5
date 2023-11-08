<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "latihan_wad_week7");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form
$id = $_POST['id'];


// SQL query to insert the data into the database
$sql = "DELETE FROM data_lagu WHERE id = $id";


if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully.";
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
    <p>Data Anda telah dihapus.</p>
    <button onclick="bukaHalamanLain()">Kembali</button>
</div>

<script>
function tampilkanCustomAlert() {
    document.getElementById("custom-alert").style.display = "block";
}

function bukaHalamanLain() {
    window.location.href = "1.php"; 
}
</script>


</body>
</html>