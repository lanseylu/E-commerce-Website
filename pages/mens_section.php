<?php
	include("header.php");
?>

<html>
	<head>
		<title>Men</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			
		<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="cards.css"\>
	</head>
	
	<body>
		<div 
			class="img-fluid bg-image text-white"
					  style="background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url('imgs/Covers/men.jpg');height:80vh;
					  background-size:cover;"
		>
			<div style="padding-right:55%;text-align:right;">
				<h1 style="padding-top:24%;padding-bottom:3pt;font-size:12;font-family: 'Montserrat', sans-serif;">Discover Men's Collection with a New Year Sale Special!</h1>
				<h1 style="font-size:53;font-family: 'Abel',sans-serif;">GET UP TO 50% OFF<br>ON NEW ARRIVALS</h1>
				<a style="font-size:10pt;margin-top:10;;border-radius:0;font-family: 'Montserrat', sans-serif;" class="btn btn-danger mx-1" href="#tag" type="button">EXPLORE MEN'S COLLECTION  <i class="bi bi-arrow-right"></i></a>
						
			</div>
		
		</div>
		
		<div class="container">
			<div class="col-md-12">
				<div class="row pt-3">
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img id="tag" class="card-img-top imgs" src="imgs/Men/1.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 399.00 <small><s class="text-secondary">799.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Hector Polo <span class="badge bg-danger" style="font-weight:bold;">50% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>  
										(2,442)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Hector Polo">
									<input type="hidden" name="Price" value="399">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Men/2.jpg" style="height:60vh;object-fit:cover;" alt="img-2">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 399.00</div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="price card-design"  style="font-size:16;font-weight:light;">Labyrinth Pattern Tee</span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(931)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Labyrinth Pattern Tee">
									<input type="hidden" name="Price" value="399">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Men/3.jpg" style="height:60vh;object-fit:cover;" alt="img-3">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 599.00 <small><s class="text-secondary">999.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Perseus '97 Polo <span class="badge bg-primary" style="font-weight:bold;">NEW!</span>  <span class="badge bg-danger" style="font-weight:bold;">40% OFF!</span>  </span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(57)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Perseus '97 Polo">
									<input type="hidden" name="Price" value="599">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Men/4.jpg" style="height:60vh;object-fit:cover;" alt="img-4">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 712.00 <small><s class="text-secondary">889.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Poseidon Slim Tee <span class="badge bg-primary" style="font-weight:bold;">NEW!</span>  <span class="badge bg-danger" style="font-weight:bold;">40% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(77)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Poseidon Slim Tee">
									<input type="hidden" name="Price" value="712">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row pb-4">
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img id="tag" class="card-img-top imgs" src="imgs/Men/5.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 299.00</div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Aeolus Slim Fit Tee <span class="badge bg-primary" style="font-weight:bold;">NEW!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(37)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Aeolus Slim Fit Tee">
									<input type="hidden" name="Price" value="299">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Men/6.jpg" style="height:60vh;object-fit:cover;" alt="img-2">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 275.00 <small><s class="text-secondary">675.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Atlas Block Tee <span class="badge bg-danger" style="font-weight:bold;">50% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>  
										(1,111)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Atlas Block Tee">
									<input type="hidden" name="Price" value="275">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Men/7.jpg" style="height:60vh;object-fit:cover;" alt="img-3">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 875.00</div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Bacchus Leaf Tee</span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(875)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Bacchus Leaf Tee">
									<input type="hidden" name="Price" value="875">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Men/8.jpg" style="height:60vh;object-fit:cover;" alt="img-4">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 710.00 <small><s class="text-secondary">789.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Leander Tee  <span class="badge bg-primary" style="font-weight:bold;">NEW!</span>  <span class="badge bg-danger" style="font-weight:bold;">10% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>  
										(554)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Leander Tee">
									<input type="hidden" name="Price" value="710">
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
