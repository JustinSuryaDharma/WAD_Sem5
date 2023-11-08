<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Musik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Tambah Data Musik</h1>
    <form action="2_add.php" method="POST">


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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
