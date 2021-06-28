<?php

require_once("koneksi.php");

//require_once("View/login/index.php");

require_once("Model/authAdmin.php");
require_once("Model/tiketModel.php");
require_once("Model/transaksiModel.php");


if (isset($_GET['page']) && isset($_GET['aksi'])){

	session_start();

	$page = $_GET['page'];
	$aksi = $_GET['aksi'];

	if ($page == "login"){
		$login = new authAdmin();
		if ($aksi == 'View'){
			$login->index();
		}
		else if ($aksi == 'tiket') {
            $login->authAdminz();
		}
		// else if ($aksi == 'transaksi') {
		// 	$login->transaksi();
		// }
		else{
			echo "Invalid Argument";
		}

	}else if($page == "tiket"){
		$tiket = new tiketModel();
		if ($aksi == 'View'){
			$tiket->index();
		}
		else if ($aksi == 'InsertData') {
            $tiket->InsertData();
		}
		else if ($aksi == 'StoreDataKereta') {
            $tiket->StoreDataKereta();
		}
		else if ($aksi == 'InsertDataKelas') {
            $tiket->InsertDataKelas();
		}
		else if ($aksi == 'StoreDataKelasKereta') {
            $tiket->StoreDataKelasKereta();
		}
		else if ($aksi == 'delete') {
            $tiket->delete();
		}
		else if ($aksi == 'InsertHarga') {
            $tiket->InsertHarga();
		}
		else if ($aksi == 'InsertJamKeberangkatan') {
            $tiket->InsertJamKeberangkatan();
		}
		else if ($aksi == 'EditData') {
            $tiket->EditData();
		}
		else if ($aksi == 'FormEditData') {
            $tiket->FormEditData();
		}
		else if ($aksi == 'DataCostumer') {
            $tiket->DataCostumer();
		}
		else{
			echo "Invalid Argument";
		}

	}else if ($page == "transaksi"){
		$transaksi = new transaksiModel();
		if ($aksi == 'View'){
			$transaksi->index();
		}
		// else if ($aksi == 'Tiket') {
  //           $login->Tiket();
		// }
		else{
			echo "Invalid Argument";
		}
	}
}else{
	header("location: index.php?page=login&aksi=View");
}