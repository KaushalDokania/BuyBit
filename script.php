<?php
	
	//session_start();
	
	function connection()
	{
		$con = mysqli_connect('localhost','root','','BBdatabase') or die(mysqli_error());
		return $con;
	}
	
	// New User Registration 
	function newuser()
	{
		$con = connection();
		$sql = "insert into user (emailid,password,fname,mname,lname,gender,address,phone) 
		values ('{$_POST['emailid']}',
				'{$_POST['password']}',
				'{$_POST['fname']}',
				'{$_POST['mname']}',
				'{$_POST['lname']}',
				'{$_POST['gender']}',
				'{$_POST['address']}',
				'{$_POST['phone']}')";			
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));
		if($result>0)
		{
			$msg = "<h2>Insert Succesful</h2>";
		}
		else
		{
			$msg = "<h2>Insert Unsuccesful</h2>";
		}
	}
	
	//for user login
	function login()
	{
		$con = connection();
		$sql = "select * from user where emailid='{$_POST['emailid']}' and password='{$_POST['password']}'";
		$rs = mysqli_query($con,$sql);
		$row=mysqli_num_rows($rs);
		if($row>0)
		{
				$_SESSION['logid']=$_POST['emailid'];
				header('location:user_registration.php');
		}
		else
		{
			$msg= "Wrong email or password";
			//header('location:login.php');
		}
		return $msg;
	}
	
	function logrec()
	{
		//session_start();
		$con = connection();
		var_dump($_SESSION);
		$sql = "select * from user where emailid='{$_SESSION['logid']}'";
		echo $sql;
		$rs = mysqli_query($con,$sql) or die (mysqli_error($con));
		$row = mysqli_fetch_assoc($rs);
		var_dump($rs);
		return $row;
	}
	
	
	
	
	// for updating user profile
	function updateuser()
	{
		$con = connection();
		$sql = "insert into user (fname,mname,lname,address,phone) values ('{$_POST['']}')";			
		$rs = mysqli_query($con,$sql);
		if($result>0)
		{
			$msg = "<h2>Insert Succesful</h2>";
		}
		else
		{
			$msg = "<h2>Insert Unsuccesful</h2>";
		}
	}

	
	/*
	function insert($table)
	{
		$con = connection();
		$sql = "insert into $table()";	//????how fields will be written here for different tables????	
		
		
		
		$rs = mysqli_query($con,$sql);
		if($result>0)
		{
			$msg = "<h2>Insert Succesful</h2>";
		}
		else
		{
			$msg = "<h2>Insert Unsuccesful</h2>";
		}
	}
	*/
	
	// Show All Product 
		function showAllProduct()
		{
			$con = connection();
			$sql = "select * from product";
			//echo"$sql";
			$rs = mysqli_query($con,$sql);
			$result = array();
			while(($row=mysqli_fetch_assoc($rs))!=NULL)
			{
				array_push($result,$row);
			}
			//echo"<br/>";
			//var_dump($result);
			return $result;
		}
	
	
	
	
	
	// Product Add
	
	function addproducts()
	{
			$con=connection();
			
			$temp=$_FILES['pimage'];
			//var_dump($temp);
						//echo "<br/><br/> ";
			
						$pimg=time().'_'.$temp['name'];
						//var_dump($pimg);
			
			move_uploaded_file($temp['tmp_name'],'productimage\\'.$pimg);
			$sql="insert into product (pname,brand,price,specs,pimage) values ('{$_POST['pname']}','{$_POST['brand']}','{$_POST['price']}','{$_POST['specs']}','{$pimg}') ";
			
			$rs = mysqli_query($con,$sql);
			if($rs>0)
			{
				$msg = "<h2> Succesful</h2>";
			}
			else
			{
				$msg = "<h2> Unsuccesful </h2>";
			}
		
		return $msg;
	}
	
	
	
	function getbrands()
	{
		
			$con = connection();
			$sql = "select brand from product group by brand";
			//echo"$sql";
			$rs = mysqli_query($con,$sql);
			$result = array();
			while(($row=mysqli_fetch_assoc($rs))!=NULL)
			{
				array_push($result,$row);
			}
			return $result;
		
	}
	
	
	function showAllProductbybrands()
		{
			$con = connection();
			$sql = "select * from product where brand='{$_GET['brand']}'";
			//echo"$sql";
			$rs = mysqli_query($con,$sql);
			$result = array();
			while(($row=mysqli_fetch_assoc($rs))!=NULL)
			{
				array_push($result,$row);
			}
			//echo"<br/>";
			//var_dump($result);
			return $result;
		}
	
	
	function showcart($data)
	{
			$con = connection();
			$sql = "select * from product where pid='{$data['pid']}'";
			//echo"$sql";
			$rs = mysqli_query($con,$sql);
			return $rs;
	}
	
	

?>