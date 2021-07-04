<?php
class tiketController
{
    private $model;
    public function __construct()
    {
        $this->model = new tiketModel();
    }

    public function index(){
		$data = $this->model->get();
        extract($data);
      	require_once("View/tiket/index.php");
    }

    public function InsertData(){
        $data = $this->model->getKategori();
        $data2 = $this->model->getTujuan();
        $data3 = $this->model->getNamaKereta();
        extract($data);
        extract($data2);
        extract($data3);
        require_once("View/tiket/InsertData.php");
    }

    public function storeDataKereta(){
        $nama_kereta = $_POST['nama_kereta'];
        $kelas = $_POST['kelas'];
        $harga = $_POST['harga'];
        $jam_keberangkatan = $_POST['jam_keberangkatan'];
        $tujuan = $_POST['tujuan'];
        if ($this->model->prosesStoreDataKereta($nama_kereta,$kelas,$harga,$jam_keberangkatan,$tujuan)){
            header("location: index.php?page=tiket&aksi=InsertData&pesan=Berhasil Menambahkan Data Kereta");
        }else{
            header("location: index.php?page=tiket&aksi=InsertData&pesan=Gagal Menambahkan Data Kereta");
        }
    }

    public function InsertDataKelas(){
        require_once("View/tiket/InsertDataKelas.php");
    }

    public function InsertTujuan(){
        require_once("View/tiket/InsertTujuan.php");
    }

    public function InsertKereta(){
        require_once("View/tiket/InsertKereta.php");
    }

    public function storeDataKelasKereta(){
        $kelas = $_POST['kelas'];
        if ($this->model->prosesStoreDataKelasKereta($kelas)){
            header("location: index.php?page=tiket&aksi=InsertDataKelas&pesan=Berhasil Menambahkan Data Kelas");
        }else{
            header("location: index.php?page=tiket&aksi=InsertDataKelas&pesan=Gagal Menambahkan Data Kelas");
        }
    }

    public function storeDataTujuan(){
        $tujuan = $_POST['tujuan'];
        if ($this->model->prosesStoreDataTujuan($tujuan)){
            header("location: index.php?page=tiket&aksi=InsertTujuan&pesan=Berhasil Menambahkan Data Tujuan");
        }else{
            header("location: index.php?page=tiket&aksi=InsertTujuan&pesan=Gagal Menambahkan Data Tujuan");
        }
    }

    public function storeDataNamaKereta(){
        $nama_kereta = $_POST['nama_kereta'];
        if ($this->model->prosesStoreDataNamaKereta($nama_kereta)){
            header("location: index.php?page=tiket&aksi=InsertKereta&pesan=Berhasil Menambahkan Data Nama Kereta");
        }else{
            header("location: index.php?page=tiket&aksi=InsertKereta&pesan=Gagal Menambahkan Data Nama Kereta");
        }
    }

    public function delete(){
        $no_tiket = $_GET['No'];
        if ($this->model->prosesDelete($no_tiket)){
            header("location: index.php?page=tiket&aksi=View&pesan=Berhasil Delete Data");
        }else{
            header("location: index.php?page=tiket&aksi=EditData&pesan=Gagal Delete Data");
        }
    }

    public function EditData(){
        $data = $this->model->get();
        extract($data);
        require_once("View/tiket/EditData.php");
    }

    public function FormEditData(){
        $No = $_GET['No'];
        $data = $this->model->getById($No);
        $keberangkatan = $this->model->getKeberangkatan();
        $kereta = $this->model->getKereta();
        $tiket = $this->model->getTiket();
        $kelas = $this->model->getKelas();
        extract($keberangkatan);
        extract($tiket);
        extract($kelas); // here
        extract($kereta);
        extract($data);
        require_once("View/tiket/FormEditData.php");
    }

    public function update()
    {
        $no_tiket = $_POST['no_tiket'];
        $jam_keberangkatan = $_POST['jam_keberangkatan'];
        $harga = $_POST['harga'];

        if ($this->model->prosesUpdate($no_tiket, $jam_keberangkatan, $harga)) {
            header("location: index.php?page=tiket&aksi=EditData&pesan=Berhasil Ubah Data");
        } else {
            header("location: index.php?page=tiket&aksi=EditData&pesan=Gagal Ubah Data");
        }
    }

    public function DataCostumer(){
        $no_tiket = $_GET['No'];
        require_once("VIew/tiket/DataCostumer.php");
    }

    public function Costumer(){
        $no_tiket = $_GET['No'];
        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];
        $gambar_sementara=$_FILES['foto_ktp']['tmp_name'];
        $lokasi =__DIR__ . '/../img/';
        $gambar=$_FILES['foto_ktp']['name'];
        $gambar=$gambar.".jpg";
        if(move_uploaded_file($gambar_sementara, $lokasi . $gambar)){
            if ($this->model->prosesCostumer($nama, $no_telp, $gambar)) {
                header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket."&pesan=Berhasil Daftar");
            } else {
                header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket."&pesan=Gagal Daftar");
            }
        }
    }
}