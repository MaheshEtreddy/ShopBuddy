<?php
session_start();
require_once 'SbUtil.php';

SbUtil::dbConnect();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>ShopBuddy - Ecommerce</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="css/style.css" />

	<script src="js/jquery-1.10.0.min.js"></script>
	
	<script type="text/javascript">
	function populateCart(str1,str2) {
		
		  if (str1=="" && str2=="") {
		    document.getElementById("cart").innerHTML="";
		    return;
		  }
		  if (window.XMLHttpRequest) {
		    // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
		    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		      document.getElementById("cart").innerHTML=xmlhttp.responseText;
		    }
		  }
		  xmlhttp.open("GET","SbUtil.php?q="+str1+"&pr="+str2,true);
		  xmlhttp.send();
		}
</script>
	
</head>
<body>

	<div id="border-top-navbar" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button"></button>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

					
				<a class="brand" href="index.php"><img alt="ShopBuddy" src="img/shopbuddy-logo-large.png" style="height: 45px"></a>

				<div class="nav-collapse collapse pull-right" >
					<ul class="nav">
						<?php if (isset($_SESSION["username"])) {?>
						
						<li><a href="#"><i class="icon-user icon-black"></i> Hi <?=$_SESSION["username"]?></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-black"></i> Settings <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="account_settings.php"> Account Settings</a></li>
								<li><a href="#l"> Profile</a></li>
								<li><a href="user_orderdetails.php"> Your Orders</a></li>
								<li><a href="#"> E-commerce Checkout</a></li>
							</ul>
						</li>
						<li><a href="logout.php"><i class="icon-off icon-black"></i> Logout</a></li>
						<?php }else{?>
						<li><a href="login.php"><i class="icon-user icon-black"></i> Login</a></li>
						<?php }?>
					</ul>
					<p style="color: rgba(46, 178, 222, 1);font-family: sans-serif;font-size: 13px;font-weight: bold;"> Cars shelved here. Enjoy your shopping!</p>
				</div>
			</div>
		</div>
	</div>
