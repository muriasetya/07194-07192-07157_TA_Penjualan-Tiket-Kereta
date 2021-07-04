<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Data Costumer</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Input Data Customer</h2>
            </div>
            <div class="card-body">
                <form action="index.php?page=tiket&aksi=costumer&No=<?php echo $no_tiket ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>No. Telp : </label>
                        <input type="text" class="form-control" name="no_telp">
                    </div>

                    <label for="inputGambar" class="col-sm-4 col-form-label">Masukkan Gambar</label>
                        <div class="col-sm-8 mb-2">
                            <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto_ktp" id="inputGambar">
                                    <label class="custom-file-label" for="inputGambar">Pilih File</label>
                                </div>
                            </div>
                        </div>

                    <button type="submit" class="btn btn-success btn-lg btn-block">Selesai</button>
                    <a href="index.php?page=transaksi&aksi=storetransaksi&No=<?php echo $no_tiket ?>" class="btn btn-info btn-lg btn-block">Next</a>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>