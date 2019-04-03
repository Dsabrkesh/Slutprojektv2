<!DOCTYPE html>
<html>
<head>
	<title>Shop - MazeClan</title>
	<link rel="icon" type="images/png" href="images/favicon.png" sizes="32x32"/>
	<link rel="stylesheet" type="text/css" href="css/shop.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
</head>
<body>

	<?php
		include("include/nav.php");
	?>

	<?php

		$dbconnect = mysqli_connect("localhost","root","","mazeclan");
		mysqli_query($dbconnect,"SET NAMES utf8");
  
    $query = "SELECT * FROM product";
    $result = mysqli_query($dbconnect,$query);
   
    while($row = mysqli_fetch_array($result)){
	?>

           <div class="product-window">
           	<img src=<?php echo $row["product_image"]; ?>>
            <?php echo $row["productname"]; ?>
            <?php echo $row["price"]; ?>
            <?php echo $row["size"]; ?>
            </div>

        <?php
        }
        ?>
</body>
</html>