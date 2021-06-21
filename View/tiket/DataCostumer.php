<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <title>Data Costumer</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Input Data Customer</h2>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>No. Telp : </label>
                        <input type="text" class="form-control" name="no_hp">
                    </div>
                    
                        <label>Upload KTP : </label>
                        <br><form method="post" enctype="multipart/form-data" action="upload.php">
                        <input type="file" name="gambar"> 
                        <br><input type="submit" value="Upload">
                        </form>
                        <br>

                    <button type="submit" class="btn btn-success btn-lg btn-block">Selesai</button>
                    <a href="index.php?page=tiket&aksi=View" class="btn btn-danger btn-lg btn-block">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>