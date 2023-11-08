<!DOCTYPE html>
<html>
<head>
    <title>Update Data Musik</title>
</head>
<body>
    <h1>Update Data Musik</h1>
    <form action="5_update.php" method="POST">
        <label for="id">Id data yang ingin diganti:</label>
        <input type="id" name="id" required><br><br>

        <label for="judul">Judul (baru):</label>
        <input type="text" name="judul" required><br><br>

        <label for="penyanyi">Penyanyi (baru):</label>
        <input type="text" name="penyanyi" required><br><br>

        <label for="album">Album (baru):</label>
        <input type="text" name="album" required><br><br>

        <label for="tahun">Tahun (baru):</label>
        <input type="text" name="tahun" required><br><br>

        <label for="foto_album">Foto Album (nama file baru):</label>
        <input type="text" name="foto_album"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
