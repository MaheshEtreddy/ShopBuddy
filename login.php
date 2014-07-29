<?php
include_once 'header.php';

$message="";

if (isset($_SESSION['registered']) != '') {
	$message = $_SESSION['registered'];
}
if(count($_POST)>0) {

	$pwd = $_POST["Password"];

	$sql = "SELECT * FROM customers WHERE customerMail = '{$_POST["Username"]}' and password = '{$_POST["Password"]}'";
	$sql1 = "SELECT * FROM employees WHERE email = '{$_POST["Username"]}' and password = '{$_POST["Password"]}'";

	$result = mysql_query($sql);
	$row  = mysql_fetch_array($result);

	$result1 = mysql_query($sql1);
	$row1  = mysql_fetch_array($result1);

	if(is_array($row)) {
		$_SESSION["user_id"] = $row['customerID'];
		$_SESSION["username"] = $row['customerName'];
	}elseif (is_array($row1)) {
		$_SESSION["user_id"] = $row1['employeeNumber'];
		$_SESSION["username"] = $row1['email'];
	}else {
		$message = "Invalid Username or Password!";
	}
}


if(isset($_SESSION["username"]) && strstr($_SESSION["username"], "@") == '@classicmodelcars.com') {
	header("Location: admin/");
}elseif (isset($_SESSION["username"]) && strstr($_SESSION["username"], "@") != '@classicmodelcars.com' ) {
	header("Location:index.php");
}
?>

<!-- body included header in the top. -->


<div class="container">
	<div class="row" style="margin-top: 30px">

		<div class="span3">
			<div class="well">
				
			<div style="color: red;"><?php
			
			if ($message != '') {
				echo $message;
			}
			?></div>
			<form class="form login-form" action="" method="post">
				<h2>Sign in</h2>
				<div>
					<label>Username</label> <input id="Username" name="Username"
						type="text" /> <label>Password</label> 
						<input id="Password"
						name="Password" type="password" /> <label class="checkbox inline">
						<input type="checkbox" id="RememberMe" value="option1"> Remember
						me
					</label> <br /> <br /> <input type="submit" name="submit"
						value="Login" class="btn btn-success">
				</div>
				<br /> <a href="new_user.php">register</a>&nbsp;&#124;&nbsp;<a
					href="#">forgot password?</a>
			</form>
		</div>
			

		</div>

		<div class="span9">
			<div class="hero-unit">
				<h1 class="">Special Offer</h1>
				<p class="">here is the best offer of the month! Do not loose it!</p>
				<p>
					<a href="#" class="btn btn-primary btn-large">Learn more »</a>
				</p>
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
				<p>
					<i class="icon-map-marker"></i>&nbsp;I do not Know Avenue, A City
				</p>
				<p>
					<i class="icon-phone"></i>&nbsp;Phone: 234 739.126.72
				</p>
				<p>
					<i class="icon-print"></i>&nbsp;Fax: 213 123.12.090
				</p>
				<p>
					<i class="icon-envelope"></i>&nbsp;Email: info@code2fire.com
				</p>
				<p>
					<i class="icon-globe"></i>&nbsp;Web: http://www.code2fire.com
				</p>
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
				<p>
					&copy; Copyright 2012.&nbsp;<a href="#">Privacy</a>&nbsp;&amp;&nbsp;<a
						href="#">Terms and Conditions</a>
				</p>
			</div>
			<div class="span6">
				<a class="pull-right" href="http://www.code2fire.com"
					target="_blank">credits by Code 2 Fire - (by) Mahesh & Vamsy</a>
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
