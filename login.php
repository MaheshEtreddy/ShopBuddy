<?php
include_once 'header.php';

$message="";

if (isset($_SESSION['registered']) != '') {
	$message = $_SESSION['registered'];
}
if(count($_POST)>0) {

	$pwd = $_POST["Password"];

	$sql = "SELECT * FROM customers WHERE customerMail = '{$_POST["Username"]}' and password = '{$_POST["Password"]}' and deletedYN=0";
	$sql1 = "SELECT * FROM employees WHERE email = '{$_POST["Username"]}' and password = '{$_POST["Password"]}'";
	
	$result = mysql_query($sql);
	$row  = mysql_fetch_array($result);

	$result1 = mysql_query($sql1);
	$row1  = mysql_fetch_array($result1);

	if(is_array($row)) {
		$_SESSION["user_id"] = $row['customerID'];
		$_SESSION["username"] = $row['customerName'];
		$_SESSION["email"] = $row['customerMail'];
	}elseif (is_array($row1)) {
		$_SESSION["user_id"] = $row1['employeeNumber'];
		$_SESSION["username"] = $row1['firstName'];
		$_SESSION["email"] = $row1['email'];
	}else {
		$message = "Invalid Username or Password!";
	}
}


if(isset($_SESSION["email"]) && strstr($_SESSION["email"], "@") == '@classicmodelcars.com') {
	header("Location: admin/");
}elseif (isset($_SESSION["email"]) && strstr($_SESSION["email"], "@") != '@classicmodelcars.com' ) {
	echo "<script>window.location='index.php'</script>";
}
?>

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
					<label>Username</label> <input id="Username" name="Username" type="text" /> 
					<label>Password</label> <input id="Password" name="Password" type="password" /> 
					<label class="checkbox inline"><input type="checkbox" id="RememberMe" value="option1"> 
						Remember me </label> <br /> <br /> <input type="submit" name="submit"value="Login" class="btn btn-success">
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
<?php include 'usr_footer.php'; ?>
