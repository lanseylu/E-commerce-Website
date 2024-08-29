<?php
	session_start();
?>

<html>
	<head> 
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="header.css"\>
	</head>
	
	
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light navigation ">
				<a class="navbar-brand text-dark  brandname" href="../index.php">
					<img src="imgs/logo.png" width="30" height="30" class="d-inline-block"/> Venusian</a>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav" style="font-size:10pt;">
							  <a class="nav-item nav-link text-dark navlabels" href="mens_section.php">Men</a>
							  <a class="nav-item nav-link text-dark navlabels" href="womens_section.php">Women</a>
							  <a class="nav-item nav-link text-dark navlabels" href="sports.php">Sports</a>
							  <a class="nav-item nav-link text-dark navlabels" href="underwear.php">Underwear</a>
							</div>
						</div>
						<div>
							
							<?php
								$count=0;
								if (isset($_SESSION['cart'])) 
								{
									$count=count($_SESSION['cart']);
								}
							?>
							<a style="font-size:10pt;" class="btn btn-outline-dark  navlabels" type="button" href="mycart.php"><i class="bi bi-cart"></i>  Cart: <?php echo $count; ?></a>
						</div>
			</nav>
		</div>
	
	</body>

</html>