<?php
	include("header.php");
?>

<html>
	<head>
		<title>Underwear</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			
		<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="cards.css"\>
	</head>
	
	<body>
		<div 
			class="img-fluid bg-image text-white"
					  style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0)),url('imgs/Covers/underwear.jpg');height:80vh;
					  background-size:cover;"
		>
			<div style="padding-right:9%;"class="float-end">
				<h1 style="padding-top:24%;padding-bottom:3pt;font-size:12;font-family: 'Montserrat', sans-serif;">Discover Underwear Collection with a New Year Sale Special!</h1>
				<h1 style="font-size:58;font-family: 'Abel', sans-serif;">GET UP TO 60% OFF<br>ON UNDERWEARS!</h1>
				<a style="font-size:10pt;margin-top:10;;border-radius:0;font-family: 'Montserrat', sans-serif;" class="btn btn-danger mx-1" href="#tag" type="button">EXPLORE UNDERWEAR COLLECTION  <i class="bi bi-arrow-right"></i></a>
						
			</div>
		
		</div>
		
		<div class="container">
			<div class="col-md-12">
				<div class="row pt-3">
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img id="tag" class="card-img-top imgs" src="imgs/Underwears/1.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 599.00 <small><s class="text-secondary">750.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Thalia Panty Set  <span class="badge bg-primary" style="font-weight:bold;">NEW!</span> <span class="badge bg-danger" style="font-weight:bold;">20% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(122)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Thalia Panty Set">
									<input type="hidden" name="Price" value="599">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Underwears/2.jpg" style="height:60vh;object-fit:cover;" alt="img-2">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 479.00<small><s class="text-secondary">799.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="price card-design"  style="font-size:16;font-weight:light;">Psyche Panty Set  <span class="badge bg-primary" style="font-weight:bold;">NEW!</span>  <span class="badge bg-danger" style="font-weight:bold;">40% OFF!</span> </span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(57)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Polyhymnia Panty Set">
									<input type="hidden" name="Price" value="479">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Underwears/3.jpg" style="height:60vh;object-fit:cover;" alt="img-3">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 489.00<small><s class="text-secondary">689.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Melpomene Panty Set </span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(507)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Melpomene Panty Set">
									<input type="hidden" name="Price" value="489">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Underwears/4.jpg" style="height:60vh;object-fit:cover;" alt="img-4">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 719.00 <small><s class="text-secondary">899.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Calliope Panty Set  <span class="badge bg-danger" style="font-weight:bold;">20% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>  
										(1,777)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Calliope Panty Set">
									<input type="hidden" name="Price" value="719">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row pb-4">
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img id="tag" class="card-img-top imgs" src="imgs/Underwears/5.jpg" style="height:60vh;object-fit:cover;" alt="img-1">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 350.00 <small><s class="text-secondary">699.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Anchises Brief Set <span class="badge bg-primary" style="font-weight:bold;">NEW!</span> <span class="badge bg-danger" style="font-weight:bold;">50% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(109)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Anchises Brief Set">
									<input type="hidden" name="Price" value="350">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Underwears/6.jpg" style="height:60vh;object-fit:cover;" alt="img-2">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 275.00 <small><s class="text-secondary">789.00</s></small> </div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Aeneas Brief Set</span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(2,022)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Aeneas Brief Set">
									<input type="hidden" name="Price" value="275">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Underwears/7.jpg" style="height:60vh;object-fit:cover;" alt="img-3">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 320.00<small><s class="text-secondary">799.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Adonis Brief Set <span class="badge bg-danger" style="font-weight:bold;">60% OFF!</span></span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(965)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Adonis Brief Set">
									<input type="hidden" name="Price" value="320">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<form action="manage_cart.php" method="POST">
							<div class="card">
								<img class="card-img-top imgs" src="imgs/Underwears/8.jpg" style="height:60vh;object-fit:cover;" alt="img-4">
								<div class="card-body style="font-family: 'Poppins:wght@900&display', sans-serif;"">
									<h5 class="card-title">
										<div class="row">
											<div class="col-8 price d-flex justify-content-start card-design" style="font-weight:bold;">PHP. 459.00 <small><s class="text-secondary">559.00</s></small></div>
											<div class="col-4 d-flex justify-content-end card-design" >XS-3XL</div>
										</div>
									</h5>
									<p class="card-text card-design"  style="font-size:13;">
									   <span class="card-design"  style="font-size:16;font-weight:light;">Eros Brief Set   </span> <br>
									   <i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-half text-warning"></i>
										<i class="bi bi-star text-warning"></i>  
										(3,354)
									</p>
									<button type="submit" name="Add_to_Cart" class="btn btn-warning card-design" style="font-size:16;">Add to Cart <i class="bi bi-cart"></i></button>
									<input type="hidden" name="Item_Name" value="Eros Brief Set">
									<input type="hidden" name="Price" value="459">
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
