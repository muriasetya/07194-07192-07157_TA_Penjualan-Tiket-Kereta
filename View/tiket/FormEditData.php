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
                        <label>Jam Keberangkatan : </label>
                        <input type="text" class="form-control" name="jam_keberangkatan" value="<?= $data['jadwal']?>" required>
                        </div>
                    <div class="form-group">
                    <label for="">Tujuan : </label>
                                <select name="tujuan" class="form-control" readonly>
                                    <?php foreach ($keberangkatan as $row) : ?>
                                        <?php if ($data['id_keberangkatan'] == $row['id_keberangkatan']) :  ?>
                                            <option selected value="<?= $row['id_keberangkatan'] ?>"><?= $row['tujuan']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['id_keberangkatan'] ?>"><?= $row['tujuan']; ?></option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                        </select>
                    </div>
                    <div class="form-group">
                    <label for="">Nama Kereta : </label>
                                <select name="kereta" class="form-control" readonly>
                                    <?php foreach ($kereta as $row) : ?>
                                        <?php if ($data['id_kereta'] == $row['id_kereta']) :  ?>
                                            <option selected value="<?= $row['id_kereta'] ?>"><?php echo $row['nama_kereta']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['id_kereta'] ?>"><?= $row['nama_kereta']; ?></option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                        </select>
                    </div>
                    <div class="form-group">
                    <label for="">Kelas : </label>
                                <select name="kelas" class="form-control" readonly>
                                    <?php foreach ($kelas as $row) : ?>
                                        <?php if ($data['id_kelas'] == $row['id_kelas']) :  ?>
                                            <option selected value="<?= $row['id_kelas'] ?>"><?= $row['kelas']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['id_kelas'] ?>"><?= $row['kelas']; ?></option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                        </select>
                    </div>
                    <div class="form-group">
                    <label for="">Harga : </label>
                                <select name="harga" class="form-control" readonly>
                                    <?php foreach ($harga as $row) : ?>
                                        <?php if ($data['kode_transaksi'] == $row['kode_transaksi']) :  ?>
                                            <option selected value="<?= $row['kode_transaksi'] ?>"><?= $row['harga']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['kode_transaksi'] ?>"><?= $row['harga']; ?></option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                        </select>
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