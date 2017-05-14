<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>LOGIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="assets/css/styles.css" rel="stylesheet"/>
</head>
<body>
    <?php
		include('header.php');
		
		include('script.php');
	?>
    
<div id='cssmenu'>
	<ul>
    	
	   <li><a href='index.php'><span>Home</span></a></li> 	
	   <li class='active has-sub'><a href='products.php'><span>Products</span></a>
		  <ul>         
             <li class='has-sub'><a href='#'><span>Mobiles</span></a>
				<ul>
				   <li><a href='#'><span>All Mobiles</span></a></li>
				   
                    <?php
					
						$rs=getbrands();
						//var_dump($rs);
						foreach($rs as $x )
						{
							 echo '<li> <a href="?brand='.$x['brand'].'"> '.$x['brand'].' </a> </li>';
						}

					?>
			 
				</ul>
			 </li>
			 
			 
		  </ul>
          
	   </li>
	   <li class='last'><a href='cart.php'><span>Cart</span></a></li>
	   <li class='last'><a href='#'><span>My Orders</span></a></li>
	   <li class='last'><a href='user_registration.php'><span>Sign UP</span></a></li>
       <li class='last'><a href='login.php'><span>Login</span></a></li>
       <li class='last'><a href='profile.php'><span>My Account</span></a></li>
		
		<!-- =================Search Bar==================== -->
		&nbsp;
		<!--
		<div id="search_icon_div">
			<img src="images/appmlSearch_32.png" id="search_icon"/>
		</div>
		<input type="text" placeholder="Search" name="search_bar" id="search_box" />-->
	</ul>
	
</div>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                   <h4> Login with facebook <strong> / </strong>Google :</h4>
                    <br />
                    <a href="index.php" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook Account</a>
                    &nbsp;OR&nbsp;
                    <a href="index.php" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google Account</a>
                    <hr />
                     <h4> Or Login with <strong>Shopping Account  :</strong></h4>
                    <br />
                    <form method="post" aaction="">
                     <label>Enter Email ID : </label>
                        <input type="text" class="form-control" name="emailid" />
                        <label>Enter Password :  </label>
                        <input type="password" class="form-control" name="password" />
                        <hr />
                        <input type="submit" class="btn btn-info" name="new_user_submit" value="Log Me In ">
                    </form>
                      <div class="alert-info">
         	
            				<?php
				
						if(isset($_POST['new_user_submit']))
						{
							$res=login();
							echo $res;
						}
				
				?>
            
        			 </div> 
                </div>
                
                <div class="col-md-6">
                    <div class="alert alert-info">
                      <p>This is a on line shopping site with different featurs like online transaction through credit / debitcard.You can also pay after delivery. </p>
                        <p><strong> Some of its features are given below :</strong>
                        </p>
                         <ul>
                            <li>You can get surprising offers.</li>
                            <li>Mobile app can also be used for shopping.</li>
                            <li>Here you will get any electronics appliances at low cost.</li>
                            <li>We will give you warrenty of 2 years on any appliances.</li>
                        </ul>
                       
                    </div>
                    <div class="alert alert-success">
                         <strong> Instructions To Use:</strong>
                        <ul>
                            <li>
                               Login into the account or register first </li>
                            <li>Search the item you want to buy</li>
                            <li>Add the item to the cart </li>
                            <li>You can pay online or cash on delivery</li>
                        </ul>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By :Ujjawal and friends</div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
