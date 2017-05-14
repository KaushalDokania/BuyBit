<html>
	<head>
    	<title>Cart</title>
         <link rel="stylesheet" href="assets/css/styles.css">
         <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    </head>
</html>
<body>
	<?php
	
			ob_start();
			session_start();
			
			if(!isset($_SESSSION['cart']))
			{
				//first time the cart is always not set so TRUE
				$cart=array();
				$_SESSION['cart']=$cart;
				//session_start();
				//var_dump($_SESSION['cart']);
				
				//$cart=$_SESSSION['cart'];
				
				$temp_cart=array();
				$temp_cart['pid']=$_POST['pid'];
				$temp_cart['qty']=$_POST['qty'];
				
				var_dump($temp_cart);
				
				array_push($cart,$temp_cart);
				$_SESSION['cart']=$cart;
				
				var_dump($_SESSION['cart']);
				
			}
			else
			{
				
				$cart=$_SESSSION['cart'];
				
				$temp_cart=array();
				$temp_cart['pid']=$_POST['pid'];
				$temp_cart['qty']=$_POST['qty'];
	
				var_dump($temp_cart);
				
				array_push($cart,$temp_cart);
				$_SESSION['cart']=$cart;
				
				var_dump($_SESSION['cart']);
				
				
				
				
			}
			
	
	
	
	
	?>
	

	
	<?php
	
		include('header.php');
		//include('main_menu.php');
		
	?>
    <div id="main_container">
    	<table border="5" id="cart_table">
        	<tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>
            <?php
				foreach($_SESSION['cart']['pid'] as $xx)
				{
					$rec=showcart($xx);
					foreach ($rec as $rr)
					{
						echo'
						<tr>
							<td> '.$rr['pname'].'</td>
							<td> $rr["pname"] </td>
							<td> $rr["pname"] </td>
							<td> $rr["pname"] </td>
						</tr>';
					}
					
				}
				
			?>
        </table>
    </div>
</body>
	