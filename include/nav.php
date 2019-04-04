	<ul class="promo">
		<li><a href="#">GET 50% OFF FROM YOUR FIRST PURCHASE!</a></li>
	</ul>
<nav class="nav">
	<img src="images/logo.png" class="logo">
	<ul>
		<li><a href="shop.php">Shop</a></li>
		<li><a href="#">Galery</a></li>
		<li><a href="#">Contact</a></li>
			<?php
           	if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
				?>
	            <li><a href="profile.php">MY PROFILE</a></li>
				<?php
            }
            else{
            	?>
   	            <li><a href="login.php"><i class="fas fa-user" style="font-size: 23px;"></i></a></li>
				<?php
            }
			?>
			<li><a href="#"><i class="fa fa-shopping-cart" style="font-size:23px"></i></a></li>
	</ul>
</nav>
	<ul class="undernav">
		<li><a href="#">All Items</a></li>
		<li><a href="#">Jersey</a></li>
		<li><a href="#">Hoodies</a></li>
		<li><a href="#">Shirts</a></li>
	</ul>
