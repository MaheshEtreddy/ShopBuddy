<?php
include_once 'header.php';

if (isset ( $_SESSION ['err'] ) && $_SESSION ['err'] == "Passwordupdated") {
	
	echo "<div class='alert alert-success alert-block'>Password for <strong>{$_SESSION["username"]}</strong> has been successfully updated!. </div>";
	unset ( $_SESSION ['err'] );
	unset ( $_SESSION ['message'] );
} elseif (isset ( $_SESSION ['err'] ) && $_SESSION ['err'] == "ProfileUpdated") {
	echo "<div class='alert alert-success alert-block'>Profile of <strong>{$_SESSION["username"]}</strong> has been successfully updated!. </div>";
	unset ( $_SESSION ['err'] );
	unset ( $_SESSION ['message'] );
} elseif (isset ( $_SESSION ['err'] ) && $_SESSION ['err'] == "not updated") {
	echo "<div class='alert alert-error'>{$_SESSION['message']}	</div>";
	unset ( $_SESSION ['err'] );
	unset ( $_SESSION ['message'] );
}
unset ( $_SESSION ['err'] );
unset ( $_SESSION ['message'] );

?>

<div class="row" style="margin-top: 30px">
	<div class="span6" style="padding-left: 600px; padding-right: 800px;">
		<form name="form" id="form" class="form-horizontal well" method="POST"
			action="account_settingsAction.php">
			<fieldset>


				<div id="errorBox"></div>
				<legend>Change Password</legend>
				<div class="control-group">
					<label class="control-label" for="inputName">Username</label>

					<div class="controls">
						<input type="text" class="uneditable-input" name="inputName"
							value="<?php echo $_SESSION["username"]?>" disabled="disabled">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputPassword">Old Password</label>

					<div class="controls">
						<input type="password" name="oldPassword"
							placeholder="Old Password" required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputPassword">New Password</label>

					<div class="controls">
						<input type="password" name="newPassword"
							placeholder="New Password" required="required">
					</div>
				</div>

				<hr>
				<div align="center">
					<input type="submit" value="Update Password" name="UpdatePassword">

				</div>
			</fieldset>
		</form>
	</div>
</div>

<div class="row">
	<div class="span6" style="padding-left: 600px; padding-right: 800px;">
		<form name="form" id="form" class="form-horizontal well" method="POST"
			action="account_settingsAction.php">
			<fieldset>
				<div id="errorBox"></div>
				<legend>Change Account Details</legend>
	
			<?php
			$query = "SELECT * FROM customers where `customerMail`='{$_SESSION["email"]}'";
			$result = mysql_query ($query); 
			while ( $row = mysql_fetch_array ( $result ) ) {
				$userID = $row ["customerMail"];
				$streetAddress = $row ["addressLine1"];
				$userCity = $row ["city"];
				$userState = $row ["state"];
				$userPostalCode = $row ["postalCode"];
				$userCountry = $row ["country"];
				$userPhone = $row ["phone"];
			}
			?>
				<div class="control-group">
					<label class="control-label" for="userID">User ID</label>

					<div class="controls">
						<input class="em" type="email" name="userID"
							value="<?php echo $userID ?>" placeholder="Email"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="streetAddress">Street Address</label>

					<div class="controls">
						<input type="text" name="streetAddress"
							value="<?php echo $streetAddress;?>" placeholder="Street Address"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="city">City</label>

					<div class="controls">
						<input type="text" name="city" placeholder="City"
							value="<?php echo $userCity;?>" required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="state">State</label>

					<div class="controls">
						<input type="text" name="state" placeholder="State"
							value="<?php echo $userState;?>" required="required">
							
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="postalCode">Postal Code</label>

					<div class="controls">
						<input type="text" name="postalCode" placeholder="Postal Code"
							value="<?php echo $userPostalCode;?>" required="required">
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
							$entityName = $result ['countryName'];
							if($entityName == $userCountry){ 
							echo '<option value= "'.$entityName.'" selected="selected">'.$entityName.'</option>';
 								}
 							else {
 							echo '<option value="'.$entityName.'">'.$entityName. '</option>';
 								}
							}
						
							?>
					</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="phone">Phone No.</label>

					<div class="controls">
						<input type="text" name="phone" value="<?php echo $userPhone;?>"
							placeholder="Phone no.">
					</div>
				</div>

				<hr>
				<div align="center">
					<input type="submit" value="Update Profile" name="UpdateProfile">

				</div>
			</fieldset>
		</form>
	</div>
</div>

<div class="row">
	<div class="span6" style="padding-left: 600px; padding-right: 800px;">
		<form name="form" id="form" class="form-horizontal well" method="POST"
			action="account_settingsAction.php">
			<fieldset>
				<div id="errorBox"></div>
				<legend>Delete Account</legend>
				<div class=''>
					<div align="center">
						<input type="submit" value="Delete Profile" name="DeleteProfile">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

<?php include 'usr_footer.php';?>
