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

	public function index(){
        $data = $this->get();
        extract($data);
        require_once("View/transaksi/index.php");
    }
}

// Author @Muriasetya.R