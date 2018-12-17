<!doctype html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<meta http-eqiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" href="icon.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/core.css">   

	<title>ACCIO</title>
</head>
<body>
	<?php include "header.php" ?>
	<!-- CARROUSEL -->
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
		  <li data-target="#carousel" data-slide-to="0" class="active"></li>
		  <li data-target="#carousel" data-slide-to="1"></li>
		  <li data-target="#carousel" data-slide-to="2"></li>
		  <li data-target="#carousel" data-slide-to="3"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/carrosel/1.jpg" alt="banner">
			</div>

		<div class="carousel-item">
			<a href="categorias/informatica/acessorios">
				<img src="img/carrosel/2.jpg" alt="PC gamer">
			</a>
			<div class="carousel-caption"></div>   
		</div>
			
			<div class="carousel-item">
				<a href="">
					<img src="img/carrosel/3.jpg" alt="galaxy s8">
				</a>
				<div class="carousel-caption"></div>
			</div>
			
			<div class="carousel-item">
				<a href="">
					<img src="img/carrosel/4.jpg" alt="iphone x">
				</a>
				<div class="carousel-caption"></div>
			</div>
		</div>

		<a class="carousel-control-prev" href="#carousel" data-slide="prev">
			<span><i class="far fa-caret-square-left fa-3x"></i></span>
		</a>
		<a class="carousel-control-next" href="#carousel" data-slide="next">
			<span><i class="far fa-caret-square-right fa-3x"></i></span>
		</a>
	</div>

<main><?php include "caraousel.php" ?></main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/script.js"></script>
</body>
</html>