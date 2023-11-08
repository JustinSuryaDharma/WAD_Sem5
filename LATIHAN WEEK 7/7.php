<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data Musik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                    <form action="7_delete.php" method="POST">
                        <h2 class="mb-4" style="text-align: center;">Hapus Data Musik</h2>
                        <div class="mb-3">
                          <label for="id" class="form-label">Id</label>
                          <input
                            type="text"
                            id="id"
                            name="id"
                            class="form-control"
                            required
                          >
                        </div>
                        <div class="d-grid">
                          <button
                            type="submit"
                            class="btn btn-primary btn-block"
                          >
                            Delete
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
