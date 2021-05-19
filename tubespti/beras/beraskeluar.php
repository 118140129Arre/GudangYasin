<?php
//Include file koneksi ke database
include "../koneksi/koneksi.php";

//menerima nilai dari kiriman form input-barang 
$id_beras              =$_POST["id_beras"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$beras_keluar           =$_POST["beras_keluar"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$jenis_beras           =$_POST["jenis_beras"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$merek		             =$_POST["merek"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$warna		             =$_POST["warna"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$pengorder         			 =$_POST["pengorder"];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$tanggal_beras_keluar = date("Y-m-d");


//Query input menginput data kedalam tabel barang
  $sql="insert into keluarberas (id_beras,beras_keluar,jenis_beras,merek,warna,pengorder,tanggal_beras_keluar) values
		('$id_beras','$beras_keluar','$jenis_beras','$merek','$warna','$pengorder','$tanggal_beras_keluar')";


// //Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);


//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:../beras/riwayatmin");
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}

?>