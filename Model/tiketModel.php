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

	// public function index(){
	// 	$data = $this->get();
    //     extract($data);
    //   	require_once("View/tiket/index.php");
    // }

    // public function InsertData(){
    //     $data = $this->getKategori();
    //     $data2 = $this->getTujuan();
    //     $data3 = $this->getNamaKereta();
    //     extract($data);
    //     extract($data2);
    //     extract($data3);
    //     require_once("View/tiket/InsertData.php");
    // }

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

    // public function storeDataKereta(){
    //     $nama_kereta = $_POST['nama_kereta'];
    //     $kelas = $_POST['kelas'];
    //     $harga = $_POST['harga'];
    //     $jam_keberangkatan = $_POST['jam_keberangkatan'];
    //     $tujuan = $_POST['tujuan'];
    //     if ($this->prosesStoreDataKereta($nama_kereta,$kelas,$harga,$jam_keberangkatan,$tujuan)){
    //         header("location: index.php?page=tiket&aksi=InsertData&pesan=Berhasil Menambahkan Data Kereta");
    //     }else{
    //         header("location: index.php?page=tiket&aksi=InsertData&pesan=Gagal Menambahkan Data Kereta");
    //     }
    // }

    public function prosesStoreDataKereta($nama_kereta,$kelas,$harga,$jam_keberangkatan,$tujuan){
        $sql = "INSERT INTO tiket(id_kereta,id_kelas,harga,jam_keberangkatan,id_keberangkatan) VALUES ($nama_kereta,$kelas,$harga,'$jam_keberangkatan',$tujuan)";
        return koneksi()->query($sql);
    }

    // public function InsertDataKelas(){
    //     require_once("View/tiket/InsertDataKelas.php");
    // }

    // public function InsertKereta(){
    //     require_once("View/tiket/InsertKereta.php");
    // }

    // public function InsertTujuan(){
    //     require_once("View/tiket/InsertTujuan.php");
    // }

    // public function storeDataKelasKereta(){
    //     $kelas = $_POST['kelas'];
    //     if ($this->prosesStoreDataKelasKereta($kelas)){
    //         header("location: index.php?page=tiket&aksi=InsertDataKelas&pesan=Berhasil Menambahkan Data Kelas");
    //     }else{
    //         header("location: index.php?page=tiket&aksi=InsertDataKelas&pesan=Gagal Menambahkan Data Kelas");
    //     }
    // }

    public function prosesStoreDataKelasKereta($kelas){
        $sql = "INSERT INTO kategori(kelas) VALUES ('$kelas')";
        return koneksi()->query($sql);
    }

    // public function storeDataNamaKereta(){
    //     $nama_kereta = $_POST['nama_kereta'];
    //     if ($this->prosesStoreDataNamaKereta($nama_kereta)){
    //         header("location: index.php?page=tiket&aksi=InsertKereta&pesan=Berhasil Menambahkan Data Nama Kereta");
    //     }else{
    //         header("location: index.php?page=tiket&aksi=InsertKereta&pesan=Gagal Menambahkan Data Nama Kereta");
    //     }
    // }

    public function prosesStoreDataNamaKereta($nama_kereta){
        $sql = "INSERT INTO jenis(nama_kereta) VALUES ('$nama_kereta')";
        return koneksi()->query($sql);
    }

    // public function storeDataTujuan(){
    //     $tujuan = $_POST['tujuan'];
    //     if ($this->prosesStoreDataTujuan($tujuan)){
    //         header("location: index.php?page=tiket&aksi=InsertTujuan&pesan=Berhasil Menambahkan Data Tujuan");
    //     }else{
    //         header("location: index.php?page=tiket&aksi=InsertTujuan&pesan=Gagal Menambahkan Data Tujuan");
    //     }
    // }

    public function prosesStoreDataTujuan($tujuan){
        $sql = "INSERT INTO keberangkatan(tujuan) VALUES ('$tujuan')";
        return koneksi()->query($sql);
    }

    // public function delete(){
    //     $no_tiket = $_GET['No'];
    //     if ($this->prosesDelete($no_tiket)){
    //         header("location: index.php?page=tiket&aksi=View&pesan=Berhasil Delete Data");
    //     }else{
    //         header("location: index.php?page=tiket&aksi=EditData&pesan=Gagal Delete Data");
    //     }
    // }

    public function prosesDelete($no_tiket){
        $sql = "DELETE FROM tiket WHERE no_tiket = $no_tiket";
        return koneksi()->query($sql);
    }

    // public function EditData(){
    //     $data = $this->get();
    //     extract($data);
    //     require_once("View/tiket/EditData.php");
    // }

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


<<<<<<< HEAD
    // public function FormEditData(){
    //     $No = $_GET['No'];
    //     $data = $this->getById($No);
    //     $keberangkatan = $this->getKeberangkatan();
    //     $kereta = $this->getKereta();
    //     $tiket = $this->getTiket();
    //     $kelas = $this->getKelas();
    //     extract($keberangkatan);
    //     extract($tiket);
    //     extract($kelas); // here
    //     extract($kereta);
    //     extract($data);
    //     require_once("View/tiket/FormEditData.php");
    // }

    public function prosesUpdate($no_tiket, $jam_keberangkatan, $harga)
    {
        $sql = "UPDATE tiket SET jam_keberangkatan = '$jam_keberangkatan', harga = '$harga' WHERE no_tiket = $no_tiket";
        $query = koneksi()->query($sql);

        return $query;
        
    }

    // public function update()
    //   {
    //       $no_tiket = $_POST['no_tiket'];
    //       $jam_keberangkatan = $_POST['jam_keberangkatan'];
    //       $harga = $_POST['harga'];

    //       if ($this->prosesUpdate($no_tiket, $jam_keberangkatan, $harga)) {
    //           header("location: index.php?page=tiket&aksi=EditData&pesan=Berhasil Ubah Data");
    //       } else {
    //           header("location: index.php?page=tiket&aksi=EditData&pesan=Gagal Ubah Data");
    //       }
    //   }
=======
    public function FormEditData(){
        $No = $_GET['No'];
        $data = $this->getById($No);
        $keberangkatan = $this->getKeberangkatan();
        $kereta = $this->getKereta();
        $tiket = $this->getTiket();
        $kelas = $this->getKelas();
        extract($keberangkatan);
        extract($tiket);
        extract($kelas); // here
        extract($kereta);
        extract($data);
        require_once("View/tiket/FormEditData.php");
    }

    public function prosesUpdate($no_tiket, $jam_keberangkatan, $nama_kereta, $kelas, $harga)
    {
        $sql = "UPDATE tiket set id_keberangkatan =  $jam_keberangkatan, id_kereta = $nama_kereta, id_kelas = $kelas, no_tiket = $harga where no_tiket = $no_tiket";
        $query = koneksi()->query($sql);
        return $query;
    }

    // public function updateJamKeberangkatan($jam_keberangkatan, $no_tiket)
    // {
    //     $sql = "UPDATE tiket SET jam_keberangkatan = '$jam_keberangkatan' where no_tiket = $no_tiket ";

    //     $query = koneksi()->query($sql);
    //     return $query;
    // }

    // public function updateNamaKereta($nama_kereta, $id_kereta)
    // {
    //     $sql = "UPDATE jenis set nama_kereta = '$nama_kereta' where id_kereta = $id_kereta ";

    //     $query = koneksi()->query($sql);
    //     return $query;
    // }

    // public function updateKelas($kelas, $id_kelas)
    // {
    //     $sql = "UPDATE kategori set kelas = '$kelas' where id_kelas = $id_kelas";

    //     $query = koneksi()->query($sql);
    //     return $query;
    // }

    // public function updateHarga($harga, $no_niket)
    // {
    //     $sql = "UPDATE tiket set harga = '$harga' where no_tiket = $no_tiket";

    //     $query = koneksi()->query($sql);
    //     return $query;
    // }

    public function update()
      {
          $no_tiket = $_POST['no_tiket'];
          $jam_keberangkatan = $_POST['jam_keberangkatan'];
          $nama_kereta = $_POST['nama_kereta'];
          $kelas = $_POST['kelas'];
          $harga = $_POST['harga'];

          if ($this->prosesUpdate($no_tiket, $jam_keberangkatan, $nama_kereta, $kelas, $harga)) {
              header("location: index.php?page=tiket&aksi=EditData&pesan=Berhasil Ubah Data");
          } else {
              header("location: index.php?page=tiket&aksi=EditData&pesan=Gagal Ubah Data");
          }
      }
>>>>>>> 6860eaddff6e1ee2bde80dfc6ef758442d334358

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

<<<<<<< HEAD
    // public function DataCostumer(){
    //     $no_tiket = $_GET['No'];
    //     require_once("VIew/tiket/DataCostumer.php");
    // }
=======
    public function DataCostumer(){
        $no_tiket = $_GET['No'];
        require_once("VIew/tiket/DataCostumer.php");
    }
>>>>>>> 6860eaddff6e1ee2bde80dfc6ef758442d334358

    public function prosesCostumer($nama, $no_telp, $gambar)
        {
               $sql = "INSERT INTO costumer(nama, no_telp, foto_ktp) VALUES ('$nama', '$no_telp', '$gambar')";
               $query = koneksi()->query($sql);
                return $query;
        }
    
<<<<<<< HEAD
        // public function Costumer(){
        //     $no_tiket = $_GET['No'];
        //     $nama = $_POST['nama'];
        //     $no_telp = $_POST['no_telp'];
        //     $gambar_sementara=$_FILES['foto_ktp']['tmp_name'];
        //     $lokasi =__DIR__ . '/../img/';
        //     $gambar=$_FILES['foto_ktp']['name'];
        //     $gambar=$gambar.".jpg";
        //     if(move_uploaded_file($gambar_sementara, $lokasi . $gambar)){
        //         if ($this->prosesCostumer($nama, $no_telp, $gambar)) {
        //             header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket."&pesan=Berhasil Daftar");
        //         } else {
        //             header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket."&pesan=Gagal Daftar");
        //         }
        //     }
        // }
=======
        public function Costumer(){
            $no_tiket = $_GET['No'];
            $nama = $_POST['nama'];
            $no_telp = $_POST['no_telp'];
            $gambar_sementara=$_FILES['foto_ktp']['tmp_name'];
            $lokasi =__DIR__ . '/../img/';
            $gambar=$_FILES['foto_ktp']['name'];
            $gambar=$gambar.".jpg";
            if(move_uploaded_file($gambar_sementara, $lokasi . $gambar)){
                if ($this->prosesCostumer($nama, $no_telp, $gambar)) {
                    header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket."&pesan=Berhasil Daftar");
                } else {
                    header("location: index.php?page=tiket&aksi=DataCostumer&No=".$no_tiket."&pesan=Gagal Daftar");
                }
            }
        }
>>>>>>> 6860eaddff6e1ee2bde80dfc6ef758442d334358
}

