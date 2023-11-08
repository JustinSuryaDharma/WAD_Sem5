<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Musik 3</title>
</head>
<body>
    <h1>Tambah Data Musik 3</h1>
    <form action="3_add.php" method="POST">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" required><br><br>

        <label for="penyanyi">Penyanyi:</label>
        <input type="text" name="penyanyi" required><br><br>

        <label for="album">Album:</label>
        <input type="text" name="album" required><br><br>

        <label for="tahun">Tahun:</label>
        <input type="text" name="tahun" required><br><br>

        <label for="foto_album">Foto Album (nama file):</label>
        <input type="text" name="foto_album"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
