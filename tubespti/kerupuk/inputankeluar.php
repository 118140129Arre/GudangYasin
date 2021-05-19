<?php
//Include file koneksi ke database
include "../koneksi/koneksi.php";

//menerima nilai dari kiriman form input-barang 
$id_kerupuk              =$_POST["id_kerupuk"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$kerupuk_keluar           =$_POST["kerupuk_keluar"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$jenis_kerupuk           =$_POST["jenis_kerupuk"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$merek		             =$_POST["merek"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$warna         			 =$_POST["warna"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$pengorder         			 =$_POST["pengorder"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$tanggal_kerupuk_keluar = date("Y-m-d");

//Query input menginput data kedalam tabel barang
  $sql="insert into kerupukkeluar (id_kerupuk,kerupuk_keluar,jenis_kerupuk,merek,warna,pengorder,tanggal_kerupuk_keluar) values
		('$id_kerupuk','$kerupuk_keluar','$jenis_kerupuk','$merek','$warna','$pengorder','$tanggal_kerupuk_keluar')";


//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:../kerupuk/riwayatmin");
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}

?>