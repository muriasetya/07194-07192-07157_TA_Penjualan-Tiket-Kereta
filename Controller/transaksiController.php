<?php
class transaksiController
{
    private $model;
    public function __construct()
    {
        $this->model = new transaksiModel();
    }

    public function index(){
        $data = $this->model->get();
        extract($data);
        require_once("View/transaksi/index.php");
    }

    public function struk(){
        $kode_transaksi = $_GET['kode_transaksi'];
        $data = $this->model->getDataStruk($kode_transaksi);
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
        $costumer = $this->model->getLastData();
        $tanggal_transaksi = date('Y-m-d');
        $harga = $this->model->getHarga($no_tiket);
        $total = 1*$harga;
        if ($this->model->datatiket($no_tiket,$costumer['id_costumer'],$tanggal_transaksi,$total)){
            header("location: index.php?page=transaksi&aksi=View&pesan= BERHASIL TAMBAH DATA");
        } else {
            header("location: index.php?page=transaksi&aksi=View&pesan= GAGAL TAMBAH DATA");
        }
    }
}