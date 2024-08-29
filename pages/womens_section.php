<?php
	include("header.php");
?>

<html>
	<head>
		<title>Women</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			
		<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Abel=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="mens_section.css"\>
		
		<link rel="stylesheet" type="text/css" href="cards.css"\>
	</head>
	
	<body>
		<div 
			class="img-fluid bg-image text-white"
					  style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.3)),url('imgs/Covers/women.jpg');height:80vh;
					  background-size:cover;"
		>
			<div style="padding-right:11%;"class="float-end">
				<h1 style="padding-top:27%;padding-bottom:3pt;font-size:12;font-family: 'Montserrat', sans-serif;">Discover Women's Collection with a New Year Sale Special!</h1>
				<h1 style="font-size:50;font-family: 'Abel', sans-serif;">GET UP TO 50% OFF<br>ON NEW ARRIVALS</h1>
				<a style="font-size:10pt;margin-top:10;;border-radius:0;font-family: 'Montserrat', sans-serif;" class="btn btn-danger mx-1" href="#tag" type="button">EXPLORE WOMEN'S COLLECTION  <i class="bi bi-arrow-right"></i></a>
						
			</div>
		
		</div>
		
		<div class="container">
			<div class="col-md-12">
				<div class="row pt-3">
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img id="tag" class="card-img-top" src="imgs/Women/1.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 479.00 <small><s class="text-secondary">589.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Phoebe Two-Blocks Tee</span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(357)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Phoebe Two-Blocks Tee">
									<input type="hidden" name="Price" value="479">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top" src="imgs/Women/2.jpg" style="height:60vh;object-fit:cover;" alt="img-2">
								<div class="card-body">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 300.00 <small><s class="text-secondary">600.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Selene B&W Tee <span class="badge bg-primary" style="font-weight:bold;">NEW!</span> <span class="badge bg-danger" style="font-weight:bold;">50% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(224)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Selene B&W Tee">
									<input type="hidden" name="Price" value="300">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top" src="imgs/Women/3.jpg" style="height:60vh;object-fit:cover;" alt="img-3">
								<div class="card-body details">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 675.00</div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Penelope Slit Sleeves  <span class="badge bg-primary" style="font-weight:bold;">NEW!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>  
										(23)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Penelope Slit Sleeves">
									<input type="hidden" name="Price" value="675">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top" src="imgs/Women/4.jpg" style="height:60vh;object-fit:cover;" alt="img-4">
								<div class="card-body details">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 589.00 <small><s class="text-secondary">889.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Iris Striped Tee  <span class="badge bg-danger" style="font-weight:bold;">40% OFF!</span></span><br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(1,354)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Iris Striped Tee">
									<input type="hidden" name="Price" value="589">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row pb-4">
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Women/5.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 499.00</div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Helen Textured Tee  <span class="badge bg-primary" style="font-weight:bold;">NEW!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(56)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Helen Textured Tee">
									<input type="hidden" name="Price" value="499">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Women/6.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 699.00</div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Daphne Off-shoulders</span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(3,034)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Daphne Off-shoulders">
									<input type="hidden" name="Price" value="699">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Women/7.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 350.00 <small><s class="text-secondary">500.00</s></small> </div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Astraea Tee <span class="badge bg-primary" style="font-weight:bold;">NEW!</span>  <span class="badge bg-danger" style="font-weight:bold;">30% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(157)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Astraea Tee">
									<input type="hidden" name="Price" value="350">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img id="tag" class="card-img-top imgs" src="imgs/Women/8.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 899.00</div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Cassandra Off-shoulders <span class="badge bg-primary" style="font-weight:bold;">NEW!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(117)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Cassandra Off-shoulders">
									<input type="hidden" name="Price" value="899">
								</div>
							</div>
						</form>
					</div>
				</div>
		    </div>
		</div>
			<?php
				include("footer.php");
			?>
	</body>

</html>