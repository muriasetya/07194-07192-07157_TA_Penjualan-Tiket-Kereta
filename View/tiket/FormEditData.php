<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <title>INPUT TIKET</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistem Pemesanan | Tiket Kereta Api </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="form-inline">
            <a class=" btn btn-primary " href="index.php?page=tiket&aksi=EditData">Kembali</a>
        </div>
        
    </nav>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Update Data Tiket</h2>
            </div>
             <div class="card-body">
             <form action="index.php?page=tiket&aksi=update" method="POST">
                <input type="hidden" class="form-control" name="no_tiket" value="<?= $data['No']?>" required>
                    <div class="form-group">
                    <label>No - Tiket : </label>
                    <input type="text" class="form-control" name="no_tiket" disabled value="<?= $data['No']?>" />
                    </div>
                    <div class="form-group">
                    <label>tujuan : </label>
                    <input type="text" class="form-control" name="tujuan" disabled value="<?= $data['tujuan']?>" />
                    </div>
                    <div class="form-group">
                    <label>Nama Kereta </label>
                    <input type="text" class="form-control" name="nama_kereta" disabled value="<?= $data['kereta']?>" />
                    </div>
                    <div class="form-group">
                    <label>kelas : </label>
                    <input type="text" class="form-control" name="kelas" disabled value="<?= $data['kelas']?>" />
                    </div>
                    <div class="form-group">
                    <label>Jam Keberangkatan : </label>
                    <input type="text" class="form-control" name="jam_keberangkatan" value="<?= $data['jadwal']?>" required>
                    </div>
                    <div class="form-group">
                    <label for="">Harga : </label>
                    <input type="text" class="form-control" name="harga" value="<?= $data['harga']?>" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Input</button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>