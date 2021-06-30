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
            <a class=" btn btn-secondary " href="index.php?page=tiket&aksi=EditData">Edit Data Tiket</a>
        </div>
        
    </nav>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Insert Data Tiket</h2>
            </div>
            <div class="card-body">
                <form action="index.php?page=tiket&aksi=StoreDataKereta" method="POST">
                    <div class="form-group">
                        <label>Nama Kereta : </label>
                        <select name="nama_kereta" class="form-control" readonly>
                                    <?php foreach ($data3 as $row) : ?>
                                        
                                            <option value="<?= $row['id_kereta'] ?>"><?= $row['nama_kereta']; ?></option>
                                        
                                        <?php endforeach; ?>
                                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas : </label>
                        <select name="kelas" class="form-control" readonly>
                                    <?php foreach ($data as $row) : ?>
                                        
                                            <option value="<?= $row['id_kelas'] ?>"><?= $row['kelas']; ?></option>
                                        
                                        <?php endforeach; ?>
                                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tujuan : </label>
                        <select name="tujuan" class="form-control" readonly>
                                    <?php foreach ($data2 as $row) : ?>
                                        
                                            <option value="<?= $row['id_keberangkatan'] ?>"><?= $row['tujuan']; ?></option>
                                        
                                        <?php endforeach; ?>
                                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga : </label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="form-group">
                        <label>Jam Keberangkatan : </label>
                        <input type="text" class="form-control" name="jam_keberangkatan">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg ">Submit</button> 
                    <a href="index.php?page=tiket&aksi=InsertDataKelas" class="btn btn-info btn-lg ">Next</a>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>