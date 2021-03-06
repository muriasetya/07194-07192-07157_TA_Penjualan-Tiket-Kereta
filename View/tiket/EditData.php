<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistem Pemesanan | Tiket Kereta Api </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="form-inline">
            <a class=" btn btn-primary " href="index.php?page=tiket&aksi=View">Kembali</a>
        </div>
    </nav>
    <center>
        <div class="container">
            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Data Tiket</h2>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tujuan</th>
                                <th>Jadwal</th>
                                <th>Nama Kereta</th>
                                <th>Kelas</th>
                                <th>Harga</th>
                                <th>pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <th><?=$row['No'] ?></th>
                                <th><?=$row['tujuan'] ?></th>
                                <th><?=$row['jadwal'] ?></th>
                                <th><?=$row['kereta'] ?></th>
                                <th><?=$row['kelas'] ?></th>
                                <th><?=$row['harga'] ?></th>
                                <th>
                                    <a class=" btn btn-warning " href="index.php?page=tiket&aksi=FormEditData&No=<?= $row['No'] ?>">Edit Data</a>
                                    <a href="index.php?page=tiket&aksi=delete&No=<?= $row['No'] ?>" class=" btn btn-danger ">Hapus Data</a>
                                </th>
                            </tr>
                        <?php $no++;
                        endforeach;?>
                    </div>
                </li>
            </ul>
        </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>