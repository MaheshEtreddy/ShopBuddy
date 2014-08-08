<?php
session_start();

error_reporting(0);
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
	<script type="text/javascript" src="js/jquery_easing.js"></script>
	<script type="text/javascript">

		jQuery(function($) {

		$('.add-to-cart').click(function() {
			var cart = $('#cart');
		   var imgtofly = $(this).parents('li.cart_items').find('a.product-image img').eq(0);
			if (imgtofly) {
				var imgclone = imgtofly.clone()
					.offset({ top:imgtofly.offset().top, left:imgtofly.offset().left })
					.css({'opacity':'0.5', 'position':'absolute', 'height':'150px', 'width':'150px', 'z-index':'1000'})
					.appendTo($('body'))
					.animate({
						'top':cart.offset().top + 10,
						'left':cart.offset().left + 30,
						'width':0,
						'height':0
					}, 100, 'easeInOutExpo');
				
				setTimeout(function () {
	                cart.effect("shake", {
	                    times: 2
	                }, 200);
	            }, 1500);

	            imgclone.animate({
	                'width': 0,
	                 'height': 0
	            }, function () {
	                $(this).detach()
	            });

	            populateCart(this.attributes['code'].value, this.attributes['price'].value);
			}
			return false;
		});


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

		$('#view').click(function() {


			});


		$("form input[id='check_all']").click(function() { // triggred check

			var inputs = $("form input[type='checkbox']"); // get the checkbox

			for(var i = 0; i < inputs.length; i++) { // count input tag in the form
				var type = inputs[i].getAttribute("type"); //  get the type attribute
					if(type == "checkbox") {
						if(this.checked) {
							inputs[i].checked = true; // checked
						} else {
							inputs[i].checked = false; // unchecked
					 	 }
					}
			}
		});

		$("form input[id='submit']").click(function() {  // triggred submit

			var count_checked = $("[name='data[]']:checked").length; // count the checked
			if(count_checked == 0) {
				alert("Please select a product(s) to delete.");
				return false;
			}
			if(count_checked == 1) {
				return confirm("Are you sure you want to delete these product?");
			} else {
				return confirm("Are you sure you want to delete these products?");
			  }
		});
		
		});

		function populateModal(data) {
			alert(data);
			  if (window.XMLHttpRequest) {
			    // code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp=new XMLHttpRequest();
			  } else { // code for IE6, IE5
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
			    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			      document.getElementById("myModal").innerHTML=xmlhttp.responseText;
			    }
			  }
			  xmlhttp.open("GET","SbUtil.php?s="+data,true);
			  xmlhttp.send();
			} 

		
			
		
				
</script>
	
</head>

<style>
 
ul li.cart_items {
	list-style-type:none;
	list-style:none;
	float:left;
	margin-right:20px;
}

</style>

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
