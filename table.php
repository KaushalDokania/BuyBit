<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

	<?php
	
		include('script.php');
	?>
    <table width="300" border="2">
    	<tr>
        	<td>Product ID</td>
            <td>Product Name</td>
            <td>Brand</td>
            <td>Price</td>
            <td>Specification</td>
            <td>Image</td>
        </tr>
        <?php
			$res = showAllProduct();
			var_dump($res);
			foreach($res as $row)
			{
				echo"
					<tr>
						<td>{$row['pid']}</td>
						<td>{$row['pname']}</td>
						<td>{$row['brand']}</td>
						<td>{$row['price']}</td>
						<td>{$row['specs']}</td>
						<td>{$row['pimage']}</td>																		
					</tr>
				";	
			}
		?>
    </table>

</body>
</html>