<?php
class authAdminController
{
    private $model;
    public function __construct()
    {
        $this->model = new authAdmin();
    }

    public function index(){
        require_once("View/login/index.php");
    }

    public function authAdminz(){
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        if ($this->model->prosesAuth($nama,$password)){
            header("location: index.php?page=tiket&aksi=View&pesan=Berhasil login");
        }else{
            echo "<script type='text/javascript'>
            alert('Username Atau Password Anda Salah');
            window.location='index.php';
            </script>";
            
        }
    }
}