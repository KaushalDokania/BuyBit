<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Orders</title>

<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>My Account</title>
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


 <!-- ################################ main menu ########################################### --> 
    <!-- <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   -->
   <link rel="stylesheet" href="assets/css/styles.css">
   
   <!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   -->


	
    
    <link rel="stylesheet" href="profile.css"/>



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



	<div id="page_div">
    	<div id="side_menu">
			<a href="user_update.php">Update Profile</a>
            <a href="">My Orders</a>
            <a href="cart.php">My Cart</a>
            <a href="">Complaints</a>
        </div>
        <div id="profile_container_div">
        	<div id="container_header">
            	<h2>Kaushal Dokania</h2>
                <p>kaushal.dokania12@gmail.com</p>
            </div>
            <div id="main_contents">
            	<h3>
                	Postal Address:
                </h3>
                <p>Station road barakar, <br/>asansol,<br/>west Bengal
                <br/>713324
                <br/></p>
                
            </div><br/><br/>
            <div id="div1">
                	<div>
                    	<a href="">Change Password</a>
                    </div>
                    <div>
                    	<a href="">Give us a Feedback</a>
                    </div>
             </div>
        </div>
    </div>





</body>
</html>

