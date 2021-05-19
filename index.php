<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="tubespti/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="tubespti/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="tubespti/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="tubespti/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="tubespti/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="tubespti/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="tubespti/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="tubespti/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="tubespti/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="tubespti/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="tubespti/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="tubespti/favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="tubespti/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
	<title>Gudang Yasin</title>
	<link rel="stylesheet" type="text/css" href="tubespti/css/awal.css">
</head>


<body data-rsssl=1>
	
<!-- <h1 class="text-lg-center">GUDANG BARANG YASIN</h1><br><br> -->

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
		else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}
		else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}

	}
	?>
 

 <section class="jumbotron">
  <h1 class="display-2">GUDANG YASIN</h1>
  <p class="lead text-center">Beras dan Kerupuk</p>
  <hr class="my-4">
  <form action="../tubespti/awal/cek_login.php" method="post">
			<label>Username</label>
			<input required type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input required type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input onClick="document.location.reload(true)" type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
</section>
 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>