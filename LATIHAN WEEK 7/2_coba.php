<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Musik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                    <form action="2_add.php" method="POST">
                        <h2 class="mb-4" style="text-align: center;">Tambah Data Musik</h2>
                        <div class="mb-3">
                          <label for="judul" class="form-label">Judul</label>
                          <input
                            type="text"
                            id="judul"
                            name="judul"
                            class="form-control"
                            required
                          >
                        </div>
                        <div class="mb-3">
                          <label for="penyanyi" class="form-label">Penyanyi</label>
                          <input
                            type="text"
                            id="penyanyi"
                            name="penyanyi"
                            class="form-control"
                            required
                          >
                        </div>
                        <div class="mb-3">
                            <label for="album" class="form-label">Album</label>
                            <input
                              type="text"
                              id="album"
                              name="album"
                              class="form-control"
                              required
                            ></input>
                          </div>
                          <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input
                              type="text"
                              id="tahun"
                              name="tahun"
                              class="form-control"
                              required
                            ></input>
                          </div>
                          <div class="mb-3">
                            <label for="foto_album" class="form-label">Foto_album</label>
                            <input
                              type="text"
                              id="foto_album"
                              name="foto_album"
                              class="form-control"
                              required
                            ></input>
                          </div>
                        <div class="d-grid">
                          <button
                            type="submit"
                            class="btn btn-primary btn-block"
                          >
                            Tambah
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="modal" tabindex="-1">



    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
