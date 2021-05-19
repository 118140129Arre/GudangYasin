<?php
//Include file koneksi ke database
include "../koneksi/koneksi.php";


//menerima nilai dari kiriman form input-barang 
$id_beras              =$_POST["id_beras"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$beras_masuk           =$_POST["beras_masuk"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$jenis_beras           =$_POST["jenis_beras"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$merek		             =$_POST["merek"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$warna         			    =$_POST["warna"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$tanggal_beras_masuk = date("Y-m-d");

//Query input menginput data kedalam tabel barang
  $sql="insert into masukberas (id_beras,beras_masuk,jenis_beras,merek,warna,tanggal_beras_masuk) values
		('$id_beras','$beras_masuk','$jenis_beras','$merek','$warna','$tanggal_beras_masuk')";


//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:../beras/riwayatberas");
  }else {
    echo "Simpan Data Gagal :" . mysqli_error($koneksi);
	//echo "Gagal insert data";
	exit;
  }



?>