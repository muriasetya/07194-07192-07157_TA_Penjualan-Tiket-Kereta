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
        require_once("View/tiket/Insertdata.php");
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