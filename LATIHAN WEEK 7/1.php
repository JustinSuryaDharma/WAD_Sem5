<?php
    $conn = mysqli_connect("localhost", "root", "", "latihan_wad_week7");
    $result = mysqli_query($conn, "SELECT * FROM data_lagu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lagu</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto Album</th>
            <th>Judul</th>
            <th>Penyanyi</th>
            <th>Album</th>
            <th>Tahun</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo '<td><a href="5.php?id=' . $row['id'] . '">Ubah</a> <a href="7.php?id=' . $row['id'] . '">Hapus</a></td>';
            echo '<td><img src="' . $row['foto_album'] . '" alt="" width="100px" height="100px"></td>';
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . $row['penyanyi'] . "</td>";
            echo "<td>" . $row['album'] . "</td>";
            echo "<td>" . $row['tahun'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <button onclick="bukaHalamanTambah()">Tambah Data</button>
    <script>
        function bukaHalamanTambah() {
            window.location.href = "3.php"; // Ganti dengan URL halaman yang ingin Anda tuju.
        }
    </script>
</body>
</html>
