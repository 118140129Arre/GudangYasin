<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<title>Riwayat|Kerupuk</title>
<link rel="stylesheet" type="text/css" href="../css/algoritma.css">
    <link rel="stylesheet" type="text/css" href="../css/inet.css">
    <script  src=https://code.jquery.com/jquery-3.5.1.js></script>
    <script src=https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js></script>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
</head>

<body>
<p class="fs-1 text-center">Riwayat Pengurangan Kerupuk</p><br><br>


<?php
include "../koneksi/koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM kerupukkeluar ORDER BY id_kerupuk ASC");
?>
<form action="" method="post">
    <table border="2" id="example" class="table table-bordered border-primary table-responsive-sm table-sm">
        <thead><tr >
            <th class="ukf">No</th>
            <th class="ukf">Inp</th>
            <th class="ukf">Jenis</th>
            <th class="ukf">Merek</th>
            <th class="ukf">Warna</th>
            <th class="ukf">Pengorder</th>
            <th class="ukf">Tanggal</th>
            <th class="ukf">Action</th>
        </tr></thead><tbody>
            
        
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
        
            $no = 0 ;
            
            while($data = mysqli_fetch_array($query)){
            $no++;
        ?>
        <tr >
            <td class="ukf"><?php echo $no ?></td>
            <td class="ukf"><?php echo $data["kerupuk_keluar"];?></td>
            <td class="ukf"><?php echo $data["jenis_kerupuk"];?></td>
            <td class="ukf"><?php echo $data["merek"];?></td>
            <td class="ukf"><?php echo $data["warna"];?></td>
            <td class="ukf"><?php echo $data["pengorder"];?></td>
            <td class="ukf"><?php echo $data["tanggal_kerupuk_keluar"];?></td>
            <td class="ukf"><a href="khapus2.php?no= <?php echo $data["no"];?>">Hapus</a></td>
        </tr>
        <?php  } ?>
        <?php } ?></tbody>
    </table>
</form><br><br>

<?php
include "../koneksi/koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM stock_kerupuk ORDER BY id_kerupuk2 ASC");
?>
<form action="" method="post">
    <table border="4" cellpadding="0" cellspacing="0" class="table table-striped">
        <tr>
            
            <th>Id Kerupuk</th>
            <th>Jenis Kerupuk</th>
            <th>Merek</th>
            <th>Warna</th>
            <th>Stock</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
        
            $no = 0 ;
            
            while($data = mysqli_fetch_array($query)){
            $no++;
        ?>
        <tr>
            
            <td><?php echo $data["id_kerupuk2"];?></td>
            <td><?php echo $data["jenis_kerupuk"];?></td>
            <td><?php echo $data["merek"];?></td>
            <td><?php echo $data["warna"];?></td>
            <td><?php echo $data["stock_total"];?></td>
        </tr>
        <?php  } ?>
        <?php } ?>
    </table>
</form>
<br><br><br>


<form action="../kerupuk/riwayatjum" method="post">
&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="Kembali">
</form>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>

</body>
</html>