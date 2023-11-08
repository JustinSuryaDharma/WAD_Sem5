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
    header("Location: 7_popup.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

