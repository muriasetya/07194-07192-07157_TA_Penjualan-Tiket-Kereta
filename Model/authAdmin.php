<?php
class authAdmin
{

    public function prosesAuth($nama,$password){
        $sql = "SELECT * FROM admin where nama = '$nama' AND password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}