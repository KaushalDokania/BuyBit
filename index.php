<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ONLINE SHOPPING</title>
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
   
   <!-- ################################ Slider ########################################### -->  
   
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random', //Specify sets like: 'fold,fade,sliceDown'
		slices:10,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.gif', //Replace this with...
		controlNavThumbsReplace: '_thumb.gif', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8 //Universal caption opacity
	});
});
</script>
<!--[if lt IE 8]>
<style type="text/css" media="screen">.nivo-controlNav a{float:left;}</style>
<![endif]-->

 <link href="main.css" rel="stylesheet" />
 <link href="left_menu.css" rel="stylesheet" />

</head>

<body>
	<?php
		include("header.php");
		include("script.php");
	?>
    <!--
        <div id="left_menu">
            <header id="left_menu_header">
                <h2>Categories</h2>
            </header>
            <div id="left_menu_contents">
                <ul>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>
                    <li><a>All Products</a></li>				
                </ul>
            </div>
        </div>
	-->
	
    <!-- ============================ Main Container  ========================= -->
    <div id="main_container" style="width: 75%; margin: auto; border: 2px solid green;">
		
		
        
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
        
        <div>
        <div id="main_image">
        <img src="images/20150706_161517_730x300_730x300.jpg" width="100%" height="300px">
    	</div>
        </div>
        <div class="wrapper col3">
              <div id="featured_slide">
                    <div id="slider" class="nivoSlider">
                      <img src="images/demo/20150703_111212_730x300_image-730-300-honor6-pricedrop.jpg" alt="" />
                      <img src="images/demo/Yuphoria-Billboard_Reg._UX440_SX440_V317134397_.png" alt="" />
                      <img src="images/demo/20150706_201058_730x300_image-730-300.jpg" alt="" />
                      <img src="images/demo/power-bank.jpg" alt="" />
                      <img src="images/demo/20150708_181508_730x300_730x300.jpg" alt="" />
                    </div>
              </div>
        </div>
        
        
		<div id="populars">
        	<div id="head">
            	<h2>Most Popular</h2>
            </div>
            <div id="product">
                	<a href="">
                    	<img src="images\lumia1.jpg"/>
                        <div id="shop">
                        	<p>Shop Now</p>
                        </div>
                    </a>
            </div>
            <div id="product">
                	<a href="">
                    	<img src="images\Samsung-Galaxy-Grand-Max-SDL021483758-1-9dcf3.jpg"/>
                        <div id="shop">
                        	<p>Shop Now</p>
                        </div>
                    </a>
            </div>
            <div id="product">
                	<a href="">
                    	<img src="images\Micromax-Juice-2-AQ5001-Dual-SDL260718906-1-12511.jpg"/>
                        <div id="shop">
                        	<p>Shop Now</p>
                        </div>
                    </a>
            </div>
            <div id="product">
                	<a href="">
                    	<img src="images\Xolo-Hive-8x-1000i-16-SDL928930849-1-7e6f4.jpg"/>
                        <div id="shop">
                        	<p>Shop Now</p>
                        </div>
                    </a>
            </div>
        </div>
        
        <div class="div1">
			<img src="images/WD_Hero2._UX1500_SX1500_V318733498_.jpg" />
        </div>
        
        
        
        
        
        
        
        <marquee>
        	<div class="container">
            	<div class="floating_img_div">
                	<a href="" class="floating_img"><img class="floating_img" src="images/infoxm3503-140e9.jpg" /></a>
                </div>
                <div class="floating_img_div">
                	<a href="" class="floating_img"><img class="floating_img" 
                    src="images/Samsung-Galaxy-Grand-Max-SDL021483758-1-9dcf3.jpg" /></a>
                </div>
                <div class="floating_img_div">
                	<a href="" class="floating_img"><img class="floating_img" 
                    src="images/Nokia-Lumia-530-Dual-SIM-SDL277154721-1-f63a4.jpg" /></a>
                </div>
                <div class="floating_img_div">
                	<a href="" class="floating_img"><img class="floating_img" src="images/infoxm3503-140e9.jpg" /></a>
                </div>
                <div class="floating_img_div">
                	<a href="" class="floating_img"><img class="floating_img" 
                    src="images/Micromax-Juice-2-AQ5001-Dual-SDL260718906-1-12511.jpg" /></a>
                </div>
                <div class="floating_img_div">
                	<a href="" class="floating_img"><img class="floating_img" src="images/infoxm3503-140e9.jpg" /></a>
                </div>
                
            </div>
        </marquee>
		
		
    </div>

	<?php
		include("footer.php");
	?>
    
</body>
</html>