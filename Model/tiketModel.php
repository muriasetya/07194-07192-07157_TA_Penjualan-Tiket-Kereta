<?php
class tiketModel
{	
	public function get(){
        $sql = "SELECT tiket.no_tiket AS No, jenis.id_kereta AS id_kereta, kategori.id_kelas AS id_kelas, 
        keberangkatan.id_keberangkatan AS id_keberangkatan, tiket.jam_keberangkatan AS jadwal, jenis.nama_kereta AS kereta, kategori.kelas AS kelas, 
        tiket.harga AS harga, keberangkatan.tujuan AS tujuan FROM tiket 
        JOIN jenis ON jenis.id_kereta  = tiket.id_kereta
        JOIN kategori ON kategori.id_kelas = tiket.id_kelas
        JOIN keberangkatan ON keberangkatan.id_keberangkatan = tiket.id_keberangkatan" ;

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    
    }

    public function getKategori(){
        $sql = "SELECT * FROM kategori";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getTujuan(){
        $sql = "SELECT * FROM keberangkatan";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getNamaKereta(){
        $sql = "SELECT * FROM jenis";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStoreDataKereta($nama_kereta,$kelas,$harga,$jam_keberangkatan,$tujuan){
        $sql = "INSERT INTO tiket(id_kereta,id_kelas,harga,jam_keberangkatan,id_keberangkatan) VALUES ($nama_kereta,$kelas,$harga,'$jam_keberangkatan',$tujuan)";
        return koneksi()->query($sql);
    }

    public function prosesStoreDataKelasKereta($kelas){
        $sql = "INSERT INTO kategori(kelas) VALUES ('$kelas')";
        return koneksi()->query($sql);
    }

    public function prosesStoreDataNamaKereta($nama_kereta){
        $sql = "INSERT INTO jenis(nama_kereta) VALUES ('$nama_kereta')";
        return koneksi()->query($sql);
    }

    public function prosesStoreDataTujuan($tujuan){
        $sql = "INSERT INTO keberangkatan(tujuan) VALUES ('$tujuan')";
        return koneksi()->query($sql);
    }

    public function prosesDelete($no_tiket){
        $sql = "DELETE FROM tiket WHERE no_tiket = $no_tiket";
        return koneksi()->query($sql);
    }

     public function getKeberangkatan(){
        $sql = "SELECT * FROM keberangkatan";

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }


    public function getKereta(){
        $sql = "SELECT * FROM jenis";

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }


    public function getTiket(){
        $sql = "SELECT * FROM tiket";

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getKelas(){
        $sql = "SELECT * FROM kategori";

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesUpdate($no_tiket, $jam_keberangkatan, $harga)
    {
        $sql = "UPDATE tiket SET jam_keberangkatan = '$jam_keberangkatan', harga = '$harga' WHERE no_tiket = $no_tiket";
        $query = koneksi()->query($sql);

        return $query;
        
    }

      public function getById($No)
        {
            $sql = "SELECT tiket.no_tiket AS No, jenis.id_kereta AS id_kereta, kategori.id_kelas AS id_kelas, 
            keberangkatan.id_keberangkatan AS id_keberangkatan, tiket.jam_keberangkatan AS jadwal, jenis.nama_kereta AS kereta, kategori.kelas AS kelas, 
            tiket.harga AS harga, keberangkatan.tujuan AS tujuan FROM tiket 
            JOIN jenis ON jenis.id_kereta  = tiket.id_kereta
            JOIN kategori ON kategori.id_kelas = tiket.id_kelas
            JOIN keberangkatan ON keberangkatan.id_keberangkatan = tiket.id_keberangkatan where tiket.no_tiket = $No";
            $query = koneksi()->query($sql);
            return $query->fetch_assoc();
        }

    public function prosesCostumer($nama, $no_telp, $gambar)
        {
               $sql = "INSERT INTO costumer(nama, no_telp, foto_ktp) VALUES ('$nama', '$no_telp', '$gambar')";
               $query = koneksi()->query($sql);
                return $query;
        }
}

