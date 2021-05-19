<?php
//Include file koneksi ke database
include "../koneksi/koneksi.php";

//menerima nilai dari kiriman form input-barang 
$id_kerupuk              =$_POST["id_kerupuk"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$kerupuk_masuk           =$_POST["kerupuk_masuk"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$jenis_kerupuk           =$_POST["jenis_kerupuk"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$merek		             =$_POST["merek"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$warna         			 =$_POST["warna"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$tanggal_kerupuk_masuk = date("Y-m-d");

//Query input menginput data kedalam tabel barang
  $sql="insert into kerupukm (id_kerupuk,kerupuk_masuk,jenis_kerupuk,merek,warna,tanggal_kerupuk_masuk) values
		('$id_kerupuk','$kerupuk_masuk','$jenis_kerupuk','$merek','$warna','$tanggal_kerupuk_masuk')";


//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:../kerupuk/riwayatjum");
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}

?>