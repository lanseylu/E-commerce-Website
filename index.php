<?php
	
?>
<html>
	<head>
		<title>Venusian</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		
		
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="mycss.css"\>
		
	</head>
	<body>
			<div class="text-center">
					<div
					  class="img-fluid bg-image text-white"
					  style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('imgs/venusian.jpg');height:100vh;
					  background-size:cover;" 
					>
					<div>
						  <nav class="navbar mx-5 pt-4">
							<div class="navbar" style="font-size:11pt;">
								<a class="nav-item nav-link text-light navlabels" href="pages/mens_section.php">Men</a>
							  <a class="nav-item nav-link text-light navlabels" href="pages/womens_section.php">Women</a>
							  <a class="nav-item nav-link text-light navlabels" href="pages/sports.php">Sports</a>
							  <a class="nav-item nav-link text-light navlabels" href="pages/underwear.php">Underwear</a>
							</div>
							<div>
								<?php
									$count=0;
									if (isset($_SESSION['cart'])) 
									{
										$count=count($_SESSION['cart']);
									}
								?>
								<a style="font-size:12pt;" class="btn text-light" type="button" href="pages/mycart.php"><h4><i class="bi bi-cart"></i></h4></a>
							</div>
						  </nav>
					</div>
					
					  
					  <h1 class="text-uppercase" style="padding-top:16%;font-size:90;font-family: 'Poppins', sans-serif;">Venusian</h1>
					  <p style="font-family: 'Montserrat', sans-serif;" >
						Feel luxury. Feel elegance. Feel authentic.
					  </p>
					  <a style="font-size:13pt;border-radius:0;font-family: 'Montserrat', sans-serif;" class="btn btn-outline-light mx-1" href="pages/mens_section.php" type="button">SHOP MEN</a>
						<a style="font-size:13pt;border-radius:0;font-family: 'Montserrat', sans-serif;" class="btn btn-outline-light mx-1" href="pages/womens_section.php" type="button">SHOP WOMEN</a>
					</div>
			</div>
			<div class="col-12">
					<div
					  class="img-fluid bg-image text-white"
					  style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)),url('imgs/sports.jpg');height:100vh;
					  background-size:cover;" 
					>
					
						<div style="padding-right:5%;"class="float-end">
							<h2 style="padding-top:50%;font-size:50;font-family: 'Poppins', sans-serif;">Be Stylish and Active</h2>
							  <p style="font-family: 'Montserrat', sans-serif;">
								NEW YEAR SALE. GET THE BEST DEALS NOW!
							  </p>
							 <div class="col-12">
								<a style="font-size:13pt;border-radius:0;font-family: 'Montserrat', sans-serif;" class="btn btn-outline-light btn-block" href="pages/sports.php" type="button">SHOP ON SPORTS COLLECTION</a> 
							</div>
						</div>
					</div>
			</div>
			<div class="col-12">
					<div
					  class="img-fluid bg-image text-white"
					  style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.6)),url('imgs/underwear.jpg');height:100vh;
					  background-size:cover;" 
					>
					
						<div style="margin-left:8%;">
							<h2 style="padding-top:25%;font-size:50;font-family: 'Poppins', sans-serif;">Feel True Comfort</h2>
							  <p style="font-family: 'Montserrat', sans-serif;">
								NEW YEAR SALE: UP TO 60% OFF. GET THE BEST DEALS NOW!
							  </p>
							 <div class="col-12">
								<a style="font-size:13pt;border-radius:0;font-family: 'Montserrat', sans-serif;" class="btn btn-outline-light btn-block" href="pages/underwear.php" type="button" >SHOP MEN'S AND WOMEN'S UNDERWEAR</a>
							</div>
						</div>
					</div>
			</div>
			
		<?php
				include("pages/footer.php");
			?>
	</body>

</html>