<?php
session_start();
include_once 'db.php';

$message="";
if(count($_POST)>0) {
	
	$pwd = md5($_POST["Password"]);
	
	$result = mysql_query("SELECT * FROM admins WHERE username='" . $_POST["Username"] . "' and password = '". $_POST["Password"]."'");
	echo $result;
	$row  = mysql_fetch_array($result);
	
	$result1 = mysql_query("SELECT * FROM users WHERE name='" . $_POST["Username"] . "' and pass = '". $pwd."'");
	$row1  = mysql_fetch_array($result1);
	
	if(is_array($row)) {
		$_SESSION["user_id"] = $row['id'];
		$_SESSION["username"] = $row['username'];
	}elseif (is_array($row1)) {
		$_SESSION["user_id"] = $row1['id'];
		$_SESSION["username"] = $row1['name'];
	}else {
		$message = "Invalid Username or Password!";
	}
}
if(isset($_SESSION["username"]) && $_SESSION["username"] == 'admin') {
	header("Location:admin/");
}elseif (isset($_SESSION["username"]) && $_SESSION["username"] != 'admin') {
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>ShopBuddy - Ecommerce</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="/index.php">Shop Buddy</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">E-Commerce <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.html">E-commerce</a></li>
								<li><a href="ecommerce-item.html">E-commerce Item</a></li>
								<li><a href="ecommerce-cart.html">E-commerce Cart</a></li>
								<li><a href="ecommerce-checkout.html">E-commerce Checkout</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form form-search pull-right">
						<input id="Search" name="Search" type="text" placeholder="type text to search for" class="input-medium search-query">
						<button type="submit" class="btn">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="well">

					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-shopping-cart"></i>
							3 item - $999.99
							<b class="caret"></b></a>
						</a>
						<div class="dropdown-menu well" role="menu" aria-labelledby="dLabel">
							<p>Item x 1 <span class="pull-right">$333.33</span></p>
							<p>Item x 1 <span class="pull-right">$333.33</span></p>
							<p>Item x 1 <span class="pull-right">$333.33</span></p>
							<a href="#" class="btn btn-primary">Checkout</a>
						</div>
					</div>

				</div>

				<div class="well">
					<ul class="nav nav-list">
						<li class="nav-header">Sidebar</li>
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>

						<li class="nav-header">Sidebar</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>

						<li class="nav-header">Sidebar</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
					</ul>
				</div>

				<div class="well">
					<h4>Filters</h4>
					<form>
						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 1
						</label>

						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 1
						</label>

						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 1
						</label>

						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 1
						</label>
						<button class="btn btn-primary pull-right" type="submit">Filter</button>
					</form>
				</div>

				<div class="well">
					<h4>Sort</h4>
					<form>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Sort 1
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Sort 2
						</label>
						<button class="btn btn-primary pull-right" type="submit">Sort</button>
					</form>
				</div>

				<div class="well">
				<div style="color: red;"><?php if ($message != '') {
			echo $message;
		} ?></div>
					<form class="form login-form" action="" method="post">
						<h2>Sign in</h2>
						<div>
							<label>Username</label>
							<input id="Username" name="Username" type="text" />

							<label>Password</label>
							<input id="Password" name="Password" type="password" />

							<label class="checkbox inline">
								<input type="checkbox" id="RememberMe" value="option1"> Remember me
							</label>

							<br /><br />

							<input type="submit" name="submit" value = "Login" class="btn btn-success">
						</div>
						<br />
						<a href="#">register</a>&nbsp;&#124;&nbsp;<a href="#">forgot password?</a>
					</form>
				</div>
			</div>

			<div class="span9">
				<div class="hero-unit">
					<h1 class="">Special Offer</h1>
					<p class="">here is the best offer of the month! Do not loose it!</p>
					<p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p>
				</div>

				<ul class="thumbnails">
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p><strike>Euro 150,00</strike>&nbsp;Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="holder.js/300x200" alt="">
							<div class="caption">
								<h4>Thumbnail label</h4>
								<p>Euro 100,00</p>
								<a class="btn btn-primary" href="#">View</a>
								<a class="btn btn-success" href="#">Add to Cart</a>
							</div>
						</div>
					</li>
				</ul>

				<div class="pagination">
					<ul>
						<li class"disabled"><span>Prev</span></li>
						<li class"disabled"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	
	<hr />

	<footer id="footer" class="vspace20">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h4>Info</h4>
					<ul class="nav nav-stacked">
						<li><a href="#">Sell Conditions</a>
						<li><a href="#">Shipping Costs</a>
						<li><a href="#">Shipping Conditions</a>
						<li><a href="#">Returns</a>
						<li><a href="#">About Us</a>
					</ul>
				</div> 

				<div class="span4">
					<h4>Location and Contacts</h4>
					<p><i class="icon-map-marker"></i>&nbsp;I do not Know Avenue, A City</p>
					<p><i class="icon-phone"></i>&nbsp;Phone: 234 739.126.72</p>
					<p><i class="icon-print"></i>&nbsp;Fax: 213 123.12.090</p>
					<p><i class="icon-envelope"></i>&nbsp;Email: info@mydomain.com</p>
					<p><i class="icon-globe"></i>&nbsp;Web: http://www.mydomain.com</p>
				</div>

				<div class="span4">
					<h4>Newsletter</h4>
					<p>Write you email to subscribe to our Newsletter service. Thanks!</p>
					<form class="form-newsletter">
						<div class="input-append">
							<input type="email" class="span2" placeholder="your email">
							<button type="submit" class="btn">Subscribe</button>
						</div>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="span6">
					<p>&copy; Copyright 2012.&nbsp;<a href="#">Privacy</a>&nbsp;&amp;&nbsp;<a href="#">Terms and Conditions</a></p>
				</div>
				<div class="span6">
					<a class="pull-right" href="http://www.codefuel.com" target="_blank">credits by Code Fuel - (by) Mahesh & Vamsy</a>
				</div>
			</div>
		</div>
	</footer>	

	<script src="./js/jquery-1.10.0.min.js"></script>
	<script src="./js/bootstrap/js/bootstrap.min.js"></script>
	<script src="./js/holder.js"></script>
	<script src="./js/script.js"></script>
</body>
</html>
echo 'hello';