<?php 

include_once 'header.php';

if (isset($_POST['submit']) == 'Create User' ) {
	
	$name = $_POST['inputName'];
	$email = $_POST['inputEmail'];
	$phone = trim($_POST['inputph']);
	$pass = md5($_POST['inputPassword']);
	$status = $_POST['status'];
	$mysql_date = date("Y-m-d H:i:s");

	$err = null;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$err .= "<font style='color:black; font-weight:bold;'>$email</font> is <strong>NOT</strong> a valid email address.<br/>";
	}

	if ($err == NULL) {
		$insert = "INSERT INTO `users` (`name`, `e-mail`, `pass`, `ph`, `entry_dt`, `status`) VALUES
		('{$name}', '{$email}', '{$pass}', '{$phone}', '{$mysql_date}', '{$status}')";
		$inserted = mysql_query($insert);
		
		if ($inserted != FALSE) {
			echo "<div class='alert alert-success alert-block'>
			
			New user <strong>{$name}</strong>
			has been successfully created!.
			</div>";
		}
	}else {
		echo "<div class='alert alert-error'>
            
            {$err}
        	</div>";
	}
}
?>

<div class="row">
	<div style="width: 560px; align-self: center; padding: 50px 570px 50px 570px;">
		<form name="form" id="form" class="form login-form" method="POST"
			action="">
			<fieldset>
				<legend>Create User</legend>
				<div class="control-group">
					<label class="control-label" for="inputName">Name</label>

					<div class="controls">
						<input type="text" name="inputName" placeholder="Name"
							required="required">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope icon-white"></i></span><input
								class="em" type="text" name="inputEmail" placeholder="Email"
								required="required">
						</div>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputph">Phone No.</label>

					<div class="controls">
						<input type="text" name="inputph" placeholder="Phone no.">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>

					<div class="controls">
						<input type="password" name="inputPassword" placeholder="Password"
							required="required">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="status">Status</label>

					<div class="controls">
						<select name="status" required="required">
							<option value="Approved">Approved</option>
							<option value="Declined">Declined</option>
							<option value="Pending">Pending</option>
							<option value="Call in to confirm">Call in to confirm</option>
						</select>
					</div>
				</div>
				<hr>
				<div align="center">
					<input type="submit" value="Create User" name="submit">

				</div>
			</fieldset>
		</form>
	</div>
</div>
<hr>

