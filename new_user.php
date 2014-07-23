<?php
include_once 'header.php';

if (isset ( $_POST ['submit'] ) == 'Create User') {
	
	$name = $_POST ['userName'];
	$email = $_POST ['userID'];
	$phone = trim ( $_POST ['phone'] );
	$pass = md5 ( $_POST ['Password'] );
	$confirmpass = md5 ( $_POST ['confirmPassword'] );
	$streetaddress = $_POST ['streetAddress'];
	$postalCode = $_POST ['postalCode'];
	$postalCode = $_POST ['country'];
	$state = $_POST ['state'];
	$mysql_date = date ( "Y-m-d H:i:s" );
	
	if (strcmp($pass, $confirmpass) !== 0) {
  	 $err .= "<font style='color:black; font-weight:bold;'>$email</font> is <strong>NOT</strong> Password doesn't match<br/>";
	}
	$err = null;
	if (! filter_var ( $email, FILTER_VALIDATE_EMAIL )) {
		$err .= "<font style='color:black; font-weight:bold;'>$email</font> is <strong>NOT</strong> a valid email address.<br/>";
	}
	
	if ($err == NULL) {
		$insert = "INSERT INTO `customers` (`name`, `e-mail`, `pass`, `ph`, `entry_dt`, `status`) VALUES
		('{$name}', '{$email}', '{$pass}', '{$phone}', '{$mysql_date}', '{$status}')";
		$inserted = mysql_query ( $insert );
		
		if ($inserted != FALSE) {
			echo "<div class='alert alert-success alert-block'>
			
			New user <strong>{$name}</strong> has been successfully created!.
			</div>";
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
	<div
		style="width: 560px; align-self: center; padding: 50px 570px 50px 570px;">
		<form name="form" id="form" class="form login-form" method="POST"
			action="">
			<fieldset>
				<legend>Create User</legend>

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
						<input type="password" name="city" placeholder="City"
							required="required">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="state">State</label>

					<div class="controls">
						<input type="password" name="state" placeholder="State"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="postalCode">Postal Code</label>

					<div class="controls">
						<input type="password" name="postalCode" placeholder="Postal Code"
							required="required">
					</div>
				</div>


				<div class="control-group">
					<label class="control-label" for="phone">Phone No.</label>

					<div class="controls">
						<input type="text" name="phone" placeholder="Phone no.">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="country">Country</label>
					<div class="controls">
						<select name="country" required="required">

							<option value="">Select Country</option>
							<?php
							$intquery = "SELECT * FROM countries";
							$query = mysql_query ( $intquery );
							while ( $result = mysql_fetch_array ( $query ) ) {
								$entity_id = $result ['countryCode'];
								$enity_name = $result ['countryName'];
								?>
							<option value="<?php echo $entity_id;?>">
								<?php echo $enity_name?>
							</option>
							<?php }?>
					</select>
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
						<input type="submit" value="submit" name="submit">

					</div>
					<div align="justify">
						<input type="submit" value="cancel" name="cancel" onclick= "cancelButton()">

					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
<hr>

