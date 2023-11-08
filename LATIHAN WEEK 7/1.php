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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="text-align: center;">
    <table class="table table-striped table-hover" >
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
    <div style="text-align: center;">
        <button onclick="bukaHalamanTambah()" class="btn btn-primary">Tambah Data</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function bukaHalamanTambah() {
            window.location.href = "3.php"; // Ganti dengan URL halaman yang ingin Anda tuju.
        }
    </script>
</body>
</html>
