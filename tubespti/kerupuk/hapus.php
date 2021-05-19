<?php
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";

$id_kerupuk=$_GET['id_kerupuk'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($conect, "DELETE FROM kerupukm where id_kerupuk='$id_kerupuk'");
$pusha = mysqli_query($conect, "DELETE FROM kerupukkeluar where id_kerupuk='$id_kerupuk'");
if($hapus){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');'</script>";
}else if($pusha){
    echo "<script>alert('Data Berhasil Di Hapus');'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');'</script>";
}
?>