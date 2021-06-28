<?php
class tiketModel
{	
	public function get(){
        $sql = "SELECT tiket.no_tiket AS No, tiket.jam_keberangkatan AS jadwal, jenis.nama_kereta AS kereta, kategori.kelas AS kelas, 
		transaksi.harga AS harga FROM tiket 
		JOIN jenis ON jenis.id_kereta  = tiket.id_kereta
		JOIN kategori ON kategori.id_kelas = tiket.id_kelas
		JOIN transaksi ON transaksi.kode_transaksi = tiket.kode_transaksi" ;

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    
    }

	public function index(){
		$data = $this->get();
        extract($data);
      	require_once("View/tiket/index.php");
    }

    public function InsertData(){
        require_once("View/tiket/InsertData.php");
    }

    public function storeDataKereta(){
        $nama_kereta = $_POST['nama_kereta'];
        if ($this->prosesStoreDataKereta($nama_kereta)){
            header("location: index.php?page=tiket&aksi=InsertData&pesan=Berhasil Menambahkan Data Kereta");
        }else{
            header("location: index.php?page=tiket&aksi=InsertData&pesan=Gagal Menambahkan Data Kereta");
        }
    }

    public function prosesStoreDataKereta($nama_kereta){
        $sql = "INSERT INTO jenis(nama_kereta) VALUES ('$nama_kereta')";
        return koneksi()->query($sql);
    }

    public function storeDataKelasKereta(){
        $kelas = $_POST['kelas'];
        if ($this->prosesStoreDataKelasKereta($kelas)){
            header("location: index.php?page=tiket&aksi=InsertDataKelas&pesan=Berhasil Menambahkan Data Kereta");
        }else{
            header("location: index.php?page=tiket&aksi=InsertDataKelas&pesan=Gagal Menambahkan Data Kereta");
        }
    }

    public function prosesStoreDataKelasKereta($kelas){
        $sql = "INSERT INTO kategori(kelas) VALUES ('$kelas')";
        return koneksi()->query($sql);
    }

    public function delete(){
        $No = $_GET['No'];
        if ($this->prosesDelete($No)){
            header("location: index.php?page=tiket&aksi=View&pesan=Berhasil Delete Data");
        }else{
            header("location: index.php?page=tiket&aksi=EditData&pesan=Gagal Delete Data");
        }
    }

    public function prosesDelete($no_tiket){
        $sql = "DELETE FROM tiket WHERE No = $no";
        return koneksi()->query($sql);
    }

    public function InsertDataKelas(){
        require_once("View/tiket/InsertDataKelas.php");
    }

    public function InsertHarga(){
        require_once("View/tiket/InsertHarga.php");
    }

    public function InsertJamKeberangkatan(){
        require_once("View/tiket/InsertJamKeberangkatan.php");
    }

    public function EditData(){
        $data = $this->get();
        extract($data);
        require_once("View/tiket/EditData.php");
    }

    public function FormEditData(){
        require_once("View/tiket/FormEditData.php");
    }

    public function DataCostumer(){
        require_once("VIew/tiket/DataCostumer.php");
    }
}

// Author @Muriasetya.R