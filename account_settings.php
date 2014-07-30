<?php
include_once 'header.php';

if ($_SESSION ['err'] == 'updated') {
	echo "<div class='alert alert-success alert-block'>
		
		Password for <strong>{$_POST['inputName']}</strong>
		has been successfully updated!.
		</div>";
	unset ( $_SESSION ['err'] );
} elseif ($_SESSION ['err'] == 'not updated') {
	echo "<div class='alert alert-error'>
			
			{$_SESSION['message']}
			</div>";
	unset ( $_SESSION ['err'] );
	unset ( $_SESSION ['message'] );
}
?>

<div class="row">
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
					<input type="submit" value="UpdatePassword" name="submit">

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


				<div class="control-group">
					<label class="control-label" for="userID">User ID</label>

					<div class="controls">
						<input class="em" type="email" name="userID" placeholder="Email"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="streetAddress">Street Address</label>

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
							<option value="">Select Country</option>
							<?php
							$intquery = "SELECT * FROM countries";
							$query = mysql_query ( $intquery );
							while ( $result = mysql_fetch_array ( $query ) ) {
								$entityName = $result ['countryName'];
								?>
							<option value="<?php echo $entityName;?>">
								<?php echo $entityName?>
							</option>
							<?php }?>
					</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="phone">Phone No.</label>

					<div class="controls">
						<input type="text" name="phone" placeholder="Phone no.">
					</div>
				</div>







				<hr>
				<div align="center">
					<input type="submit" value="UpdateProfile" name="submit">

				</div>
			</fieldset>
		</form>
	</div>
</div>

<hr>
<?php include_once 'footer.php';?>