<?php 
	session_start();
	include 'koneksi.php';
	$produk = query("SELECT * FROM product");




 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
	<title>Toko Elji</title>
	<style>
		body{
			animation: color 5s linear 0s infinite alternate running;
		}
		h2{
			font-family: 'Secular One', sans-serif;
		}
		h1{
			font-family: 'Secular One', sans-serif;
		}
		label{
			font-family: 'Secular One', sans-serif;
		}
	</style>
</head>

<body>
	<?php include('navbar.php')?>
	<header class="bg-secondary py-5">
		<div class="container mx-auto my-5">
			<div class="text-center text-white">
				<h1 class="display-4 fw-bolder">E L J I</h1>
				<p class="lead fw-normal text-white-50 mb-0">Your tech shop</p>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<h1>List Produk</h1>
			<!-- menampilkan isi dari database ke dalam bentuk card -->
			<?php for($i = 0;$i < count($produk); $i++) : ?>
				<?php if($i % 3 == 0) : ?>
					<div class="row m-3">
				<?php endif; ?>
				<div class="col-md m-3">
          			<div class="card" style="width: 295px;">
            			<img class="card-img-top" src="img/kirua.jpg" alt="Card image cap">
            			<div class="card-body">
            				<h4><?php echo($produk[$i]['name']); ?> </h4>
             				<p class="card-text"><?php echo($produk[$i]['description']);  ?> </p>
             				<p class="card-text">Harga : <?php echo($produk[$i]['price']);  ?> </p>
              				<a href="">Beli</a>
              				<a href="">gak beli</a>
            			</div>
          			</div>
        		</div>




				<?php if($i % 3 == 2) : ?>
					</div>
				<?php endif; ?>
			<?php endfor;  ?>
		</div>
	</section>

	<footer class="py-5 bg-secondary">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Praktikum Web 2021</p></div>
    </footer>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="script.js"></script>
	</body>
</html>