<?php
	include("header.php");
?>

	<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
	</script>


<html>
	<head>
		<title>Order Form</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	
	<body style="font-size:10pt; font-family: 'Poppins', sans-serif;">
		<div class="pb-3" style="background-color:#ECECEC;">
			<div class="container">
				<div class="col-12 p-4">
							<div class="row my-3">
								  <div class="col-8">
									  <div style="background-color:white;">
										<h5 class="my-1 pt-4 mx-3" style="font-size:13pt;" >Shopping Cart</i>  </h5>
										<hr class="mx-3">
										<div class="container pb-3">
										  <table class="table text-center class="fst-normal"" style="font-size:10pt;"> 
											  <thead>
												<tr class="fst-normal">
												  <th scope="col">Serial No.</th>
												  <th scope="col">Item Name</th>
												  <th scope="col">Price</th>
												  <th scope="col">Quantity</th>
												  <th scope="col">Total</th>
												  <th scope="col"></th>
												</tr>
											   </thead>
												<?php
													if (isset($_SESSION['cart'])) 
													{
														foreach($_SESSION['cart'] as $key => $value) 
														{
															$sr = $key + 1;
															echo"
															<tr>
																<td>$sr</td>
																<td>$value[Item_Name]</td>
																<td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'></td>
																<td>
																	<form action='manage_cart.php' method='POST'>
																		<input name='Mod_Quantity' class='text-center iquantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'> 
																		<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
																	</form>
																</td>
																<td class='itotal'></td>
																<td>
																	<form action='manage_cart.php' method='POST'>
																		<button name='Remove_Item' class='btn btn-sm btn-danger'>REMOVE</button>
																		<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
																	</form>
																</td>
															</tr>
															";
														}
													}
												?>
												
											</table>
										</div>
									   </div>
									</div>
								  <div class="col-4">
										<div class="border rounded p-4" style="background-color:white;">
											<h4 style="font-size:15pt;">TOTAL: <h5 class="float-end" id="gtotal" name="GrandTotal"></h5></h4>
											
											<br>
											<?php
												if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
												{
											?>
											<hr>
												<form action="makePurchase.php" method="POST">
													  <div class="form-group">
														<label>Full Name</label>
														<input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
													  </div>
													  <div class="form-group my-2">
														<label>Contact No.</label>
														<input type="number" class="form-control" name="contactNum" placeholder="Contact No." required>
													  </div>
													  <div class="form-group my-2">
														<label>Address</label>
														<input type="text" class="form-control" name="address" placeholder="Address" required>
													  </div>
													  <div class="form-group my-2">
														<label>Shirt Size</label>
														<select class="form-select" name="shirtSize" required>
														  <option value="XS">XS</option>
														  <option value="S">S</option>
														  <option value="M">M</option>
														  <option value="L">L</option>
														  <option value="XL">XL</option>
														  <option value="2XL">2XL</option>
														  <option value="3XL">3XL</option>
														</select>
													  </div>
													  <div class="form-group my-2">
														<label>Bra Size</label>
														<select class="form-select" name="braSize" required>
														<option value="N/A">Not Applicable</option>
														  <option value="XS" selected>XS</option>
														  <option value="S">S</option>
														  <option value="M">M</option>
														  <option value="L">L</option>
														  <option value="XL">XL</option>
														  <option value="2XL">2XL</option>
														  <option value="3XL">3XL</option>
														</select>
													  </div>
													  <div class="form-group my-2">
														<label>Underwear Size</label>
														<select class="form-select" name="underwearSize" required>
														  <option value="XS">XS</option>
														  <option value="S">S</option>
														  <option value="M">M</option>
														  <option value="L">L</option>
														  <option value="XL">XL</option>
														  <option value="2XL">2XL</option>
														  <option value="3XL">3XL</option>
														</select>
													  </div>
													  <div class="form-group my-2">
														<label>Shoe Size</label>
														<select class="form-select" name="shoeSize" required>
														  <option value="39">39</option>
														  <option value="40">40</option>
														  <option value="41">41</option>
														  <option value="42">42</option>
														  <option value="43">43</option>
														  <option value="44">44</option>
														  <option value="45">45</option>
														</select>
													  </div>
													<div class="d-grid gap-2">
													  <button name="purchase" class="btn btn-success my-2">Place Order</button>
													</div>
												</form>
											<?php
												}
											?>
										</div>
								  </div>
							</div>
				</div>
				<div class="text-center">
					
				</div>
			</div>
		</div>
			<?php
					include("footer.php");
			?>
	<script>
	
		var gt=0;
		var iprice = document.getElementsByClassName('iprice');
		var iquantity = document.getElementsByClassName('iquantity');
		var itotal = document.getElementsByClassName('itotal');
		var gtotal = document.getElementById('gtotal');
		
		function subTotal()
		{
			gt = 0;
			for (i=0; i<iprice.length; i++)
			{
				itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
				
				gt = gt+(iprice[i].value)*(iquantity[i].value);
			}
			gtotal.innerText=gt;
		}
		
		
		subTotal();
	</script>
	</body>


</html>