<?php
include_once 'header.php';

if (isset ( $_POST ['submit'] ) == 'Create User') {
	
	$name = $_POST ['userName'];
	$email = $_POST ['userID'];
	$phone = trim ( $_POST ['phone'] );
	$pass =  $_POST ['password'] ;
	$confirmpass =  $_POST ['confirmPassword'] ;
	$streetaddress = $_POST ['streetAddress'];
	$postalCode = $_POST ['postalCode'];
	$city = $_POST['city'];
	$state = $_POST ['state'];
	$country = $_POST ['country'];
	$mysql_date = date ( "Y-m-d H:i:s" );
	
	
	
	$err = null;
	if(strcmp($pass, $confirmpass) !== 0) {
  	 $err .= "<font style='color:black; font-weight:bold;'> Password doesn't match<br/>";
	}
		
	if (! filter_var ( $email, FILTER_VALIDATE_EMAIL )) {
		$err .= "<font style='color:black; font-weight:bold;'>$email</font> is <strong>NOT</strong> a valid email address.<br/>";
	}
	
	if ( !is_numeric($phone) && ($phone!= 0)) {
		$err .= "<font style='color:black; font-weight:bold;'>$phone</font> is <strong>NOT</strong> a valid phone number.<br/>";
	}
	if ($err == null) {
		$insert = "INSERT INTO `customers` (`customerMail`,`customerName`, `phone`,`addressLine1`,`city`,`state`,`postalCode`,`country`,`password` ) VALUES
		( '{$email}','{$name}','{$phone}', '{$streetaddress}','{$city}', '{$state}','{$postalCode}','{$country}','{$pass}')";
		
	 $inserted = mysql_query ( $insert );
	 //mahesh 2014-07-25 17:41:56
	 if ($inserted != FALSE) {
	 $_SESSION['registered'] =  "<div class='alert alert-success alert-block'>
	 New user <strong>{$name}</strong> has been successfully created!.
			</div>";
	 
	header('Location: login.php');
	 
		}
	} else {
		echo "<div class='alert alert-error'>
                        {$err}
        	</div>";
	}
}
?>
<script type="text/javascript">

	function cancelButton() {
	    window.history.go(-1)
	}
	</script>

<div class="row">
	<div style="width: 560px; align-self: center; padding: 50px 570px 50px 570px;">
		<form name="form" id="form" class="form login-form" method="POST" action="">
			<fieldset>
				<legend>Regiser User</legend>

				<div class="control-group">
					<label class="control-label" for="userName">User Name</label>

					<div class="controls">
						<input type="text" name="userName" placeholder="Name"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="userID">User ID</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope icon-white"></i></span><input
								class="em" type="email" name="userID" placeholder="Email"
								required="required">
						</div>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="streetAddress">Street Adress</label>

					<div class="controls">
						<input type="text" name="streetAddress"
							placeholder="Street Address" required="required">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="city">City</label>

					<div class="controls">
						<input type="text" name="city" placeholder="City"
							required="required">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="state">State</label>

					<div class="controls">
						<input type="text" name="state" placeholder="State"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="postalCode">Postal Code</label>

					<div class="controls">
						<input type="text" name="postalCode" placeholder="Postal Code"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="country">Country</label>
					<div class="controls">
						<select name="country" required="required">
							<?php 
						$country = $util->getCountry($udata['customerMail']);
						
						if (isset($country) && $country != '') {
							echo "<option value='{$country}'>
								{$country}
							</option>";
						}else {
						echo '<option value="">Select Country</option>';
						}
						$countries = $util->getCountries();
							foreach ($countries as $country){
								echo "<option value='{$country}'>
									{$country}
								</option>";
							}	
						
						?>
					</select>
					</div>
				</div>
	
					<div class="control-group">
					<label class="control-label" for="phone">Phone No.</label>

					<div class="controls">
						<input type="text" name="phone" placeholder="Phone no.">
					</div>
				</div>


				<div class="control-group">
					<label class="control-label" for="password">Password</label>

					<div class="controls">
						<input type="password" name="password" placeholder="Password"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="confirmPassword">Confirm Password</label>
					<div class="controls">
						<input type="password" name="confirmPassword" placeholder="Confirm Password" required="required">
					</div>
				</div>

				<hr>
				<div align="center">
					
					<div align="center">
						<input type="submit" value="Cancel" name="cancel" onclick= "cancelButton()">
					
						<input type="submit" value="Submit" name="submit">

					</div>
					</div>
					</fieldset>
					</form>
					</div>
					</div>
					
					

