<?php 

include 'header.php';
$util = new SbUtil();

$n3 = '';
$n4 = '';
$order_dt = date("Y-m-d H:i:s");

if (isset($_SESSION['username'])) {
	$n1 = 'in';
	if (isset($_GET['checkedout']) == 1){
		$n1 = '';
	}
}else {
$n = 'in';
}
$udata = $util->userCheck($_SESSION["email"]);

if (isset($_POST['submit']) && $_POST['submit'] == 'Continue as a Guest User') {
	$_SESSION['check_out_arr']['customerID'] = "15";
	$n='';
	$n1 = 'in';
}

if ( isset($_POST['submit']) && $_POST['submit'] == 'Login' ) {
	$message = $util->loginAction($_POST['Username'], $_POST['Password'], $_GET['pcode']);
	$n1 = 'in';
}

if ( isset($_POST['shipD']) && $_POST['shipD'] == 'Continue' ){
	$n1 = '';
	$n = '';
	$n2 = 'in';
	
	foreach ($_POST as $key => $val){
		$_SESSION['check_out_arr'][$key] = $val;
	}
	
	if (empty($udata) && isset($_SESSION['check_out_arr']['customerMail'])) {
		foreach ($_SESSION['check_out_arr'] as $key => $val){
			$udata[$key] = $val;
		}
	}
	
}

if ( isset($_POST['shipM']) && $_POST['shipM'] == 'Continue'){
	
	$_SESSION['check_out_arr']['shipMethod'] = $_POST['shipment'];
	$n1 = '';
	$n = '';
	$n2 = '';
	$n3 = 'in';
}

if ( isset($_POST['payM']) && $_POST['payM'] == 'Continue'){

	$_SESSION['check_out_arr']['payMethod'] = $_POST['payment'];
	$n1 = '';
	$n = '';
	$n2 = '';
	$n4 = 'in';
	$n3 = '';
}

if (isset($_GET['confirm_order']) && $_GET['confirm_order'] == 'Confirm Order') {
	
	$od_q ="select * from `orderdetails` where `customerID` = '{$_SESSION["user_id"]}' and `checkout` = 0";
	$od = mysql_query($od_q);
	
	$r = mysql_fetch_assoc($od);
	
	$sql_od = "INSERT INTO `sbdata`.`orders` (`orderNumber`, `orderDate`, `shippingStatus`, `shipAddr`, `shipMethod`, `payMethod`, `customerID`, `productCode`)
			VALUES ('{$r['orderNumber']}', '{$order_dt}', 'Order Placed', '{$_SESSION['check_out_arr']['addressLine1']}', '{$_SESSION['check_out_arr']['shipMethod']}', '{$_SESSION['check_out_arr']['payMethod']}', '{$_SESSION['user_id']}', '{$_GET['pcode']}' )";
		$order_q = mysql_query($sql_od);
		
		if ($order_q !=  false) {
			$n1 = '';
			mysql_query("update orderdetails set checkout = 1 where orderNumber = '{$r['orderNumber']}'");
			mysql_query("INSERT INTO `payments` (`customerID`, `paymentDate`, `paymentStatus`, `amount`, `orderNumber`) VALUES ('{$_SESSION['user_id']}', '{$order_dt}', '{$_SESSION['check_out_arr']['payMethod']}', '{$r['priceEach']}', '{$r['orderNumber']}')");
			$_SESSION['checkedout'] = 1;
			unset($_SESSION['check_out_arr']);
			
			echo '<script>alert("Order Placed!");
					window.location.href = "http://localhost/shopbuddy/";
					</script>';
		}
	
	
}

?>

<div class="container">
		<div class="row" style="margin-top: 30px">
			<div class="span12">
				<h2>Checkout Process</h2> 
				<div class="accordion" id="accordion2">
				
				<!-- Step 1 -->
					<div class="accordion-group">
					<?php if (!isset($_SESSION["username"])) {
						
						?>
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								STEP 1: CHECKOUT OPTIONS
							</a>
						</div>
						
						<div id="collapseOne" class="accordion-body collapse <?=$n?>">
							<div class="accordion-inner">
								<div class="span4">
										<div class="well">
										    <button type="button" class="btn btn-large btn-block btn-primary" onclick="window.location = 'http://localhost/shopbuddy/new_user.php';">New to SB? Register Now!</button>
										    <form action="" method="post">
										    <br>
										    <input type="submit" name="submit" value="Continue as a Guest User" class="btn btn-large btn-block">
										    </form>
										</div>
									<em>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</em>
								</div>

								<div class="span4 offset2">
								<div style="color: red;"><?php
								
								if (isset($message) != '') {
									echo $message;
								}
								?></div>
									<h4>Registered User</h4>
									<form action="" method="post">
										<label>Email</label>
										<input type="text" name="Username" id="Username" />
										
										<label>Password</label>
										<input type="text" name="Password" id="Password" />
										<br />
										<a href="#">forgot password?</a>
										<br />
										<input type="submit" name="submit" value="Login" class="btn btn-success">
									</form>
								</div>
							</div>
						</div><?php }else{
							
							?>
							<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" >
								STEP 1: CHECKOUT OPTIONS
							</a>
						</div>
						<?php }?>
					</div>

					<!-- Step 2 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								STEP 2: SHIPPING DETAILS
							</a>
						</div>
						<div id="collapseThree" class="accordion-body collapse <?=$n1?>">
							<div class="accordion-inner">
								<form method="post" action="">
									<div class="control-group">
					<label class="control-label" for="userID">User ID</label>

					<div class="controls">
						<input class="em" type="email" name="customerMail"
							value="<?php echo $udata['customerMail']?>" placeholder="Email"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="streetAddress">Street Address</label>

					<div class="controls">
						<input type="text" name="addressLine1"
							value="<?php echo $udata['addressLine1'];?>" placeholder="Street Address"
							required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="city">City</label>

					<div class="controls">
						<input type="text" name="city" placeholder="City"
							value="<?php echo $udata['city'];?>" required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="state">State</label>

					<div class="controls">
						<input type="text" name="state" placeholder="State"
							value="<?php echo $udata['state'];?>" required="required">
							
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="postalCode">Postal Code</label>

					<div class="controls">
						<input type="text" name="postalCode" placeholder="Postal Code"
							value="<?php echo $udata['postalCode'];?>" required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="country">Country</label>
					<div class="controls">
						<select name="countryName" required="required">
							<?php 
						if (isset($udata['country']) && $udata['country'] != '') {
							echo "<option value='{$udata['country']}'>
								{$udata['country']}
							</option>";
						}else {
						echo '<option value="">Select Country</option>';}
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
						<input type="text" name="phone" value="<?php echo $udata['phone'];?>"
							placeholder="Phone no.">
					</div>
				</div>

				<br />
					<input class="btn btn-primary" type="submit" value="Continue" name="shipD">

		</form>
								
							</div>
						</div>
					</div>

					<!-- Step 3 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
								STEP 3: SHIPPING METHOD
							</a>
						</div>
						<div id="collapseFour" class="accordion-body collapse <?=$n2?>">
							<div class="accordion-inner">
								<form method="post" action="">
									<label class="radio">
										<input type="radio" name="shipment" id="free" value="0" checked>
										Free Shipping <b>($0.00)</b>
									</label>
									<label class="radio">
										<input type="radio" name="shipment" id="flat" value="10">
										Flat Shipping Rate <b>($10.00)</b>
									</label>
									<br />
					<input class="btn btn-primary" type="submit" value="Continue" name="shipM">
								</form>
							</div>
						</div>
					</div>

					<!-- Step 4 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
								STEP 4: PAYMENT METHOD
							</a>
						</div>
						<div id="collapseFive" class="accordion-body collapse <?=$n3?>">
							<div class="accordion-inner">
								<form method="post" action="">
									<label class="radio">
										<input type="radio" name="payment" id="payment1" value="Paypal" checked>
										Paypal</b>
									</label>
									<label class="radio">
										<input type="radio" name="payment" id="payment2" value="COD">
										Cash on Delivery</b>
									</label>
									<br />
					<input class="btn btn-primary" type="submit" value="Continue" name="payM">
								</form>
							</div>
						</div>
						
					</div>

					<!-- Step 5 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
								STEP 5: CONFIRM ORDER
							</a>
						</div>
						<div id="collapseSix" class="accordion-body collapse <?=$n4?>">
							<div class="accordion-inner">
							<form action="" method="get">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Item Name</th>
											<th>Unit Price</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
									
										<tr>
											<td><?=$_GET['pname']?></td>
											<td><?=$_GET['price']?></td>
											<td><?=$_GET['price']?></td>
										</tr>
										
									</tbody>
									</table> 
								
								<dl class="dl-horizontal pull-right">
									<dt>Sub-total:</dt>
									<dd>$ <?=$_GET['price']?></dd>

									<dt>Shipping Cost:</dt>
										<dd>$ <?=$_SESSION['check_out_arr']['shipMethod']?></dd>
									
									<?php 
									
									$sum = $_GET['price']+$_SESSION['check_out_arr']['shipMethod'];
									?>
									<dt>Total:</dt>
									<dd>$ <?php echo $sum; ?></dd>
								</dl>
								<div class="clearfix"></div>
									<input class="btn btn-success pull-right" type="submit" value="Confirm Order" name="confirm_order">
									<input type="hidden" value="1" name="checkedout">
									<input type="hidden" value="<?=$_GET['pcode']?>" name="pcode">
								</form>
							</div>
						</div>
					</div>


				</div>

			</div>	
		</div>
	</div>	
	
<?php include 'usr_footer.php';?>