<?php
class authAdmin
{
    public function index(){
        require_once("View/login/index.php");
    }

    public function authAdminz(){
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        if ($this->prosesAuth($nama,$password)){
            header("location: index.php?page=tiket&aksi=View&pesan=Berhasil login");
        }else{
            header("location: index.php?page=login&aksi=View&pesan=Upaya login digagalkan");
        }
    }

    public function prosesAuth($nama,$password){
        $sql = "SELECT * FROM admin where nama = '$nama' AND password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}
// $tes = new authAdmin();
// //var_export($tes->prosesAuth('KHOIRI',123));
// die();