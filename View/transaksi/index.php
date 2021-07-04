<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
</head>

<body>
        <div class="form-inline">
            <a class=" btn btn-primary " href="index.php?page=tiket&aksi=View">Kembali</a>
        </div>
    <center>
        <div class="container">
            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Transaksi</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Kode Transaksi</td>
                                <td>Admin</td>
                                <td>Costumer</td>
                                <td>Tanggal Transaksi</td>
                                <td>Jumlah Satuan</td>
                                <td>Total Transaksi</td>
                                <th>pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <td><?=$no ?></td>
                                <td><?=$row['Admin'] ?></td>
                                <td><?=$row['Costumer'] ?></td>
                                <td><?=$row['tanggalTransaksi'] ?></td>
                                <td><?=$row['jumlahSatuan'] ?></td>
                                <td><?=$row['total'] ?></td>
                                <th>
                                    <a href="index.php?page=transaksi&aksi=struk&kode_transaksi=<?=$row['idTransaksi'] ?>" class="btn btn-success">Cetak Tiket</a>
                                </th>
                            </tr>
                            <?php $no++;
                            endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>
</html>