<?php
session_start();

include_once 'db.php';
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
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button"></button>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				<a class="brand" href="http://localhost/shopbuddy/index.php"><img alt="ShopBuddy" src="img/shopbuddy-logo-large.png" style="height: 45px"></a>

				<div class="nav-collapse collapse pull-right" >
					<ul class="nav">
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">E-Commerce <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.html">E-commerce</a></li>
								<li><a href="ecommerce-item.html">E-commerce Item</a></li>
								<li><a href="ecommerce-cart.html">E-commerce Cart</a></li>
								<li><a href="ecommerce-checkout.html">E-commerce Checkout</a></li>
							</ul>
						</li> -->
						<!-- 
						<li><a href="#"><i class="icon-pencil icon-black"></i>SB Cart</a></li> -->
						
						<?php if (isset($_SESSION["username"])) {?>
						
						<li><a href="#"><i class="icon-pencil icon-black"></i>Hi <?=$_SESSION["username"]?></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file icon-black"></i>Settings <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Account Settings</a></li>
								<li><a href="#l">Profile</a></li>
								<li><a href="#">Your Orders</a></li>
								<li><a href="#">E-commerce Checkout</a></li>
							</ul>
						</li>
						<li><a href="logout.php"><i class="icon-tasks icon-black"></i>Logout</a></li>
						<?php }else{?>
						<li><a href="login.php"><i class="icon-tasks icon-black"></i>Login</a></li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
	</div>
