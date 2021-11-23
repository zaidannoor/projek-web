<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<h2><a class="navbar-brand" href="#">E L J I</a></h2>
		<div class="navbar-nav">
			<a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
			<?php if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"):?>
			<a class="nav-item nav-link" href="input_produk.php">Tambah produk<span class="sr-only">(current)</span></a>
			<?php endif; ?>
			<a class="nav-link active" aria-current="page" href="index.php">Home</a>
		</div>
		<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<?php if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"):?>
					<a class="nav-item nav-link" href="input_produk.php">Tambah produk</a>
				<?php endif; ?>
			</div>
			<div class="navbar-nav ms-auto">
				<a class="nav-item nav-link " href="cart.php"><img src="./img/cart.png" width="25px" height="25px"alt=""></a>
				<?php if(isset($_SESSION["login"])): ?>
					<a class="nav-item nav-link " href="logout.php">Logout</a>
				<?php else : ?>
					<a class="nav-item nav-link " href="login.php">Login</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</nav>