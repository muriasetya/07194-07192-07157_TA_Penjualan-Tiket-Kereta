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
		else if ($aksi == 'Tiket') {
            $login->Tiket();
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