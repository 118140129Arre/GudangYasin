<?php
include '../koneksi/koneksi.php';
// menyimpan data id kedalam variabel
$no          =$_GET["no"];
// query SQL untuk insert data
$query="DELETE from keluarberas where no='$no'";

mysqli_query($koneksi, $query);

// mengalihkan ke halaman index.php
header("location:../beras/riwayatmin");
?>