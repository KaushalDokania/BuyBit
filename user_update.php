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
    <title>Update User Profile</title>
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
    
    
       <link rel="stylesheet" href="assets/css/styles.css">
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
                    
                        <h1 class="page-head-line">Update your profile</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Enter new data
                        </div>
                        
                        <div class="panel-body">
                       <form>
  <div class="form-group">
    <label for="exampleInputName">User Name</label>
    <input type="text" class="form-control" id="exampleInputFName" placeholder="First Name" /><br/>
	<input type="text" class="form-control" id="exampleInputMName" placeholder="Middle Name" /><br/>
	<input type="text" class="form-control" id="exampleInputLName" placeholder="Last Name" /><br/>
  </div>
  <div class="form-group">
    <label for="exampleInputGender">Gender&nbsp;&nbsp;&nbsp;</label>
    <input type="radio" id="exampleInputPMale" name="gender" />&nbsp;&nbsp;&nbsp;Male
	<input type="radio" id="exampleInputPMale" name="gender"/>&nbsp;&nbsp;&nbsp;Female
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter email"/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="disabled" class="form-control" id="exampleInputEmail1" placeholder="Enter email"/>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Re-Enter the password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password again" />
  </div>
  <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <textarea class="form-control" id="exampleInputadress" rows=4 placeholder="Enter full address"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPIN">PIN</label>
    <input type="text" class="form-control" id="exampleInputPIN" maxlength=6 placeholder="Password" />
  </div>
  <div class="form-group">
    <label for="exampleInputPhone">Phone</label>
    <input type="text" class="form-control" id="exampleInputPhone" value="+91" placeholder="Password" />
  </div><br/>
  
  <div class="checkbox">
    <label>
      <input type="checkbox" /> Accept the terms and conditions
    </label>
  </div><br/>
  <button type="submit" class="btn btn-default">Register</button>
                       </form>
                            </div>
                            
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
