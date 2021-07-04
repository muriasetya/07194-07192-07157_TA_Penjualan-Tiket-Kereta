<?php

require_once("koneksi.php");

require_once("Model/authAdmin.php");
require_once("Model/tiketModel.php");
require_once("Model/transaksiModel.php");

require_once("Controller/AuthAdminController.php");
require_once("Controller/tiketController.php");
require_once("Controller/transaksiController.php");

if (isset($_GET['page']) && isset($_GET['aksi'])){

	session_start();

	$page = $_GET['page'];
	$aksi = $_GET['aksi'];

	if ($page == "login"){
		$login = new authAdminController();
		if ($aksi == 'View'){
			$login->index();
		}
		else if ($aksi == 'tiket') {
            $login->authAdminz();
		}else{
			echo "Invalid Argument";
		}

	}else if($page == "tiket"){
		$tiket = new tiketController();
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
		else if ($aksi == 'storeDataKelasKereta') {
            $tiket->storeDataKelasKereta();
		}
		else if ($aksi == 'delete') {
            $tiket->delete();
		}
		else if ($aksi == 'InsertTujuan') {
            $tiket->InsertTujuan();
		}
		else if ($aksi == 'storeDataTujuan') {
            $tiket->storeDataTujuan();
		}
		else if ($aksi == 'costumer') {
            $tiket->Costumer();
		}
		else if ($aksi == 'InsertKereta') {
            $tiket->InsertKereta();
		}
		else if ($aksi == 'storeDataNamaKereta') {
            $tiket->storeDataNamaKereta();
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
		else if ($aksi == 'update') {
            $tiket->update();
		}
		else if ($aksi == 'costumer') {
            $tiket->Costumer();
		}
		else if ($aksi == 'index') {
            $tiket->index();
		}
		else{
			echo "Invalid Argument";
		}

	}else if ($page == "transaksi"){
		$transaksi = new transaksiController();
		if ($aksi == 'View'){
			$transaksi->index();
		}
		else if ($aksi == 'struk') {
            $transaksi->struk();
		}
		else if ($aksi == 'storetiket') {
            $transaksi->storetiket();
		}
		else if ($aksi == 'storetransaksi') {
            $transaksi->storetransaksi();
		}
		else{
			echo "Invalid Argument";
		}
	}
}else{
	header("location: index.php?page=login&aksi=View");
}