<?php 
	include 'koneksi.php';
	session_start();

	if (isset($_SESSION["login"])) {
		header("location: index.php");
	}

	if (isset($_POST["submit"])) {
		$email = htmlspecialchars($_POST["email"]);
		$passwordBaru = htmlspecialchars($_POST["passwordBaru"]);
		$result = query("SELECT * from user WHERE email = '$email' ");

		// mengecek apakah email yang diinput ada di database
		if (count($result) > 0) {
			// enkripsi password baru
			$passwordBaru = password_hash($passwordBaru, PASSWORD_DEFAULT);

			// mengganti pasword lama dengan password baru
			$query = "UPDATE user SET password = '$passwordBaru' WHERE email = '$email' ";

			mysqli_query($koneksi,$query);
			if (mysqli_error($koneksi)) {
				echo(mysqli_error($koneksi));
			}
			header("location: login.php");
		}
		else{
			$error = true;
		}
		
	}


 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
	<title>Reset Password</title>
	<style>
		h1{
			font-family: 'Secular One', sans-serif;
			font-size: 36px;
			text-align: center; 
		}
		a{
			color: #000;
		}
		label{
			font-family: 'Secular One', sans-serif;
		}
	</style>
	
</head>
<body>
	<div class="card mx-auto bg-light" style="width: 24rem; margin-top: 100px;">
		<div class="card-body">
			<h1>Lupa Password ?</h1>
			<p class="text-center mb-4">Masukkan email yang telah anda daftarkan sebelumnya dan password baru</p>

			<?php if (isset($error)): //pengecekan error ?>
				<p class="font-italic text-danger">Email yang anda masukkan tidak terdaftar</p>
			<?php endif;  ?>

			<form method="post">
				<div class="form-group">
					<label for="email">Email Adress</label>
		    		<input type="text" class="form-control" name="email" id="email" placeholder="Email Adress" autocomplete="off" required="">
		  		</div>
		  		<div class="form-group">
		  			<label for="password">Password</label>
		    		<input type="password" class="form-control" name="passwordBaru" id="password" placeholder="Password baru" required="">
		 		 </div>
		  		<button type="submit" class="btn btn-dark" name="submit" style="width: 100%;">Submit</button>
			</form>
			<p>Kembali ke
				<span class="badge badge-info">
					<a href="login.php">Login</a>
				</span>
			</p>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>