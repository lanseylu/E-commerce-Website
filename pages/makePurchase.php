<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "", "orders_lucero");
	if (mysqli_connect_error()) {
			echo "<script>
						alert('Cannot connect to database');
						window.location.href='mycart.php';
						</script>";
			exit();
		} 
	
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if (isset($_POST['purchase']))
		{
			$query1 = "INSERT INTO `orders`(`Name`, `ContactNum`, `Address`, `Shirt Size`, `Bra Size`, `Underwear Size`, `Shoe Size`) 
						VALUES ('$_POST[fullname]','$_POST[contactNum]','$_POST[address]','$_POST[shirtSize]','$_POST[braSize]','$_POST[underwearSize]','$_POST[shoeSize]')";
			if (mysqli_query($conn,$query1))
			{
				$Order_Id = mysqli_insert_id($conn);
				$query2 = "INSERT INTO `order_details`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
				$stmt = mysqli_prepare($conn, $query2);
				if ($stmt) 
				{
					mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
					foreach($_SESSION['cart'] as $key => $values)
					{
						$Item_Name = $values['Item_Name'];
						$Price = $values['Price'];
						$Quantity = $values['Quantity'];
						mysqli_stmt_execute($stmt);
					}
					unset($_SESSION['cart']);
					echo "<script>
							alert('Order Placed');
							window.location.href='../index.php';
							</script>";
					exit();
				}
				else
				{
					echo "<script>
							alert('SQL Query Preparation Error');
							window.location.href='mycart.php';
							</script>";
					exit();
				}
			}
			else 
			{
				echo "<script>
							alert('SQL error');
							window.location.href='mycart.php';
							</script>";
				exit();
			}	
		}
			
	}
	
?>