<?php
class transaksiModel
{   
    public function get(){
        $sql = "SELECT transaksi.kode_transaksi AS idTransaksi, admin.nama as Admin, 
        costumer.nama AS Costumer, transaksi.tanggal_transaksi AS tanggalTransaksi, 
        transaksi.jumlah_satuan as jumlahSatuan, transaksi.total AS total FROM transaksi
        JOIN admin ON admin.id_admin = transaksi.id_admin
        JOIN costumer ON costumer.id_costumer = transaksi.id_costumer" ;

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    
    }

	// public function index(){
    //     $data = $this->get();
    //     extract($data);
    //     require_once("View/transaksi/index.php");
    // }

    public function getDataStruk($kode_transaksi){
        $sql = "SELECT tiket.no_tiket AS No, jenis.id_kereta AS id_kereta, kategori.id_kelas AS id_kelas, 
        keberangkatan.id_keberangkatan AS id_keberangkatan, tiket.jam_keberangkatan AS jadwal, jenis.nama_kereta AS kereta, kategori.kelas AS kelas, 
        tiket.harga AS harga, keberangkatan.tujuan AS tujuan, admin.nama AS admin,costumer.nama AS costumer,transaksi.kode_transaksi AS kode_transaksi, transaksi.no_tiket AS no_tiket,
        transaksi.tanggal_transaksi AS tanggal_transaksi,transaksi.jumlah_satuan AS jumlah_pembelian,transaksi.total AS total_harga FROM transaksi
        JOIN tiket ON tiket.no_tiket = transaksi.no_tiket
        JOIN admin ON admin.id_admin = transaksi.id_admin
        JOIN costumer ON costumer.id_costumer = transaksi.id_costumer
        JOIN jenis ON jenis.id_kereta  = tiket.id_kereta
        JOIN kategori ON kategori.id_kelas = tiket.id_kelas
        JOIN keberangkatan ON keberangkatan.id_keberangkatan = tiket.id_keberangkatan where transaksi.kode_transaksi = $kode_transaksi";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    // public function struk(){
    //     $kode_transaksi = $_GET['kode_transaksi'];
    //     $data = $this->getDataStruk($kode_transaksi);
    //     extract($data);
    //     require_once("VIew/transaksi/PrintTiket.php");
    // }

    // public function storetiket(){
    //     $no_tiket = $_GET['No'];
    //     header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket);
    // }

    // public function storetransaksi(){
    //     $no_tiket = $_GET['No'];
    //     // $data = $this->getByTiket($no_tiket);
    //     $costumer = $this->getLastData();
    //     $tanggal_transaksi = date('Y-m-d');
    //     $harga = $this->getHarga($no_tiket);
    //     $total = 1*$harga;
    //     if ($this->datatiket($no_tiket,$costumer['id_costumer'],$tanggal_transaksi,$total)){
    //         header("location: index.php?page=transaksi&aksi=View&pesan= BERHASIL TAMBAH DATA");
    //     } else {
    //         header("location: index.php?page=transaksi&aksi=View&pesan= GAGAL TAMBAH DATA");
    //     }

    // }

    public function getTotal($kode_transaksi){
        $sql = "SELECT COALESCE (transaksi.jumlah_satuan*tiket.harga,0) AS total_harga FROM transaksi
        JOIN tiket ON tiket.no_tiket = transaksi.no_tiket WHERE transaksi.kode_transaksi = $kode_transaksi";
           $query = koneksi()->query($sql);
           return $query->fetch_assoc();
    }

    public function getHarga($no_tiket){
        $sql = "SELECT harga AS harga from tiket where no_tiket = $no_tiket";
        $query = koneksi()->query($sql);
        $hasil = $query->fetch_assoc();
        return $hasil['harga'];
    }

    public function prosesCostumer($nama, $no_telp, $gambar)
    {
           $sql = "INSERT INTO costumer(nama, no_telp, gambar) VALUES ('$nama', '$no_telp', '$gambar')";
           $query = koneksi()->query($sql);
    }

    public function getByTiket($No){
        $sql = "SELECT * from tiket where no_tiket = $No";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function datatiket($no_tiket,$id_costumer,$tanggal_transaksi,$total){
        $sql = "INSERT into transaksi (no_tiket,id_costumer,id_admin,tanggal_transaksi,jumlah_satuan,total) values ($no_tiket,$id_costumer,1,'$tanggal_transaksi',1,$total)";
        return koneksi()->query($sql);
    }

    public function getLastData(){
        $sql = "SELECT * from costumer 
        ORDER BY id_costumer DESC LIMIT 1";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getDataStruk($kode_transaksi){
        $sql = "SELECT tiket.no_tiket AS No, jenis.id_kereta AS id_kereta, kategori.id_kelas AS id_kelas, 
        keberangkatan.id_keberangkatan AS id_keberangkatan, tiket.jam_keberangkatan AS jadwal, jenis.nama_kereta AS kereta, kategori.kelas AS kelas, 
        tiket.harga AS harga, keberangkatan.tujuan AS tujuan, admin.nama AS admin,costumer.nama AS costumer,transaksi.kode_transaksi AS kode_transaksi, transaksi.no_tiket AS no_tiket,
        transaksi.tanggal_transaksi AS tanggal_transaksi,transaksi.jumlah_satuan AS jumlah_pembelian,transaksi.total AS total_harga FROM transaksi
        JOIN tiket ON tiket.no_tiket = transaksi.no_tiket
        JOIN admin ON admin.id_admin = transaksi.id_admin
        JOIN costumer ON costumer.id_costumer = transaksi.id_costumer
        JOIN jenis ON jenis.id_kereta  = tiket.id_kereta
        JOIN kategori ON kategori.id_kelas = tiket.id_kelas
        JOIN keberangkatan ON keberangkatan.id_keberangkatan = tiket.id_keberangkatan where transaksi.kode_transaksi = $kode_transaksi";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function struk(){
        $kode_transaksi = $_GET['kode_transaksi'];
        $data = $this->getDataStruk($kode_transaksi);
        extract($data);
        require_once("VIew/transaksi/PrintTiket.php");
    }

    public function storetiket(){
        $no_tiket = $_GET['No'];
        header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket);
    }

    public function storetransaksi(){
        $no_tiket = $_GET['No'];
        // $data = $this->getByTiket($no_tiket);
        $costumer = $this->getLastData();
        $tanggal_transaksi = date('Y-m-d');
        $harga = $this->getHarga($no_tiket);
        $total = 1*$harga;
        if ($this->datatiket($no_tiket,$costumer['id_costumer'],$tanggal_transaksi,$total)){
            header("location: index.php?page=transaksi&aksi=View&pesan= BERHASIL TAMBAH DATA");
        } else {
            header("location: index.php?page=transaksi&aksi=View&pesan= GAGAL TAMBAH DATA");
        }

    }

    public function getTotal($kode_transaksi){
        $sql = "SELECT COALESCE (transaksi.jumlah_satuan*tiket.harga,0) AS total_harga FROM transaksi
        JOIN tiket ON tiket.no_tiket = transaksi.no_tiket WHERE transaksi.kode_transaksi = $kode_transaksi";
           $query = koneksi()->query($sql);
           return $query->fetch_assoc();
    }

    public function getHarga($no_tiket){
        $sql = "SELECT harga AS harga from tiket where no_tiket = $no_tiket";
        $query = koneksi()->query($sql);
        $hasil = $query->fetch_assoc();
        return $hasil['harga'];
    }

    public function prosesCostumer($nama, $no_telp, $gambar)
    {
           $sql = "INSERT INTO costumer(nama, no_telp, gambar) VALUES ('$nama', '$no_telp', '$gambar')";
           $query = koneksi()->query($sql);
    }

    public function getByTiket($No){
        $sql = "SELECT * from tiket where no_tiket = $No";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function datatiket($no_tiket,$id_costumer,$tanggal_transaksi,$total){
        $sql = "INSERT into transaksi (no_tiket,id_costumer,id_admin,tanggal_transaksi,jumlah_satuan,total) values ($no_tiket,$id_costumer,1,'$tanggal_transaksi',1,$total)";
        return koneksi()->query($sql);
    }

    public function getLastData(){
        $sql = "SELECT * from costumer 
        ORDER BY id_costumer DESC LIMIT 1";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}

// Author @Muriasetya.R