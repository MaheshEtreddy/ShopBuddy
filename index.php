<?php
include_once 'header.php';

$s = "select * from `productlines` where deleted = 0";
$qry = mysql_query($s);

$p = "select * from `products` where deleted = 0";
$pqry = mysql_query($p);

?>

<!-- body included header in the top. -->


<div class="container">
	<div class="row" style="margin-top: 30px">

		<div class="span3">
			<div class="well">

				<div class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-shopping-cart"></i> 3 item - $999.99 <b class="caret"></b></a>

					<div class="dropdown-menu well" role="menu"
						aria-labelledby="dLabel">
						
						<?php
						if (isset($_GET['add-to-cart']) && $_GET['add-to-cart'] != '' ) {
							$crt = "select * from `products` where productCode = '{$_GET['add-to-cart']}'";
							$cqry = mysql_query($crt);
							$crt_data = mysql_fetch_row($cqry);
							
							echo "<p>'{$crt_data['productName']}' x 1 <span class='pull-right'>'{$crt_data['buyPrice']}'</span></p>";
						}
						
						
						?>
						
						
						<a href="check_out.php?add-to-cart<?php $_SERVER['QUERY_STRING']?>" class="btn btn-primary">Checkout</a>
					</div>
				</div>

			</div>

			<div class="well">
				<h4>Brand</h4>
				<form action="" method='get'>
				<?php
				if ($pqry != false) {
					while ($pdata = mysql_fetch_array($pqry)){

						if (isset($_GET['brand']) ) {
							$checked = 'checked';
						}else {
							$checked = '';
						}
						echo "<label class='checkbox'> <input type='checkbox' value='{$pdata['productBrand']}' name='brand' id= 'brand' '{$checked}'> {$pdata['productBrand']}
							</label>";
					}
				}
				?>
				<input type="submit" class="btn btn-info" value='submit'>
				</form>		
			</div>
			
			<div class="well">
				<ul class="nav nav-list">
					<li class="nav-header">Category</li>
					<?php if ($qry !=  false) {
						while ($data = mysql_fetch_array($qry)){
							if (isset($_GET['Cat']) && $_GET['Cat'] == trim(str_ireplace("", "_", $data['productLine']))) {
								$active = 'active';
							}else {
								$active = '';
							}
							
							if (strpbrk($_SERVER['REQUEST_URI'],"?&") && !isset($_GET['Cat'])) {
								echo "<li class= '{$active}'><a href='{$_SERVER['REQUEST_URI']}&Cat={$data['productLine']}'>{$data['productLine']}</a></li>";
							}else {
								echo "<li class= '{$active}'><a href='{$_SERVER['PHP_SELF']}?Cat={$data['productLine']}'>{$data['productLine']}</a></li>";
							}
						}
					}?>
					
				</ul>
			</div>

			<div class="well">
				<h4>Sort</h4>
				<form>
					<label class="radio"> <input type="radio" name="optionsRadios"
						id="optionsRadios1" value="option1" checked> Price low to high
					</label> <label class="radio"> <input type="radio"
						name="optionsRadios" id="optionsRadios2" value="option2"> Price high to low
					</label>
					<button class="btn btn-primary pull-right" type="submit">Sort</button>
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

			<ul class="thumbnails">
			<?php 
			$pr = "select * from `products` where deleted = 0";
			$prqry = mysql_query($pr);
			while ($prdata = mysql_fetch_array($prqry)){
				echo "<li class='span3'>
					<div class='thumbnail'>
					<img alt='{$prdata['productName']}' src='admin/uploads/{$prdata['ProductImage']}'>
					<div class='caption'>
					<h4>{$prdata['productName']}</h4>
					<p>
					<strike>{$prdata['MSRP']}</strike>&nbsp;{$prdata['buyPrice']}
					</p>
					<a class='btn btn-primary' href='#'>View</a> &nbsp;"; 
				
					if (isset($_GET['add-to-cart']) && $_GET['add-to-cart'] == trim(str_ireplace("", "_", $prdata['productCode']))) {
						$active = 'active';
					}else {
						$active = '';
					}
					if (strpbrk($_SERVER['REQUEST_URI'],"?&") && !isset($_GET['add-to-cart'])) {
						echo "<a class='btn btn-success' href='{$_SERVER['REQUEST_URI']}&add-to-cart={$prdata['productCode']}'> Add to Cart </a>";
						
					}else {
					echo "<a class='btn btn-success' href='{$_SERVER['PHP_SELF']}?add-to-cart={$prdata['productCode']}'> Add to Cart </a>";
					}
					
					echo"
					</div>
					</div>
					</li>";
			}
			
			?>
			</ul>

			<div class="pagination">
				<ul>
					<liclass"disabled">
					<span>Prev</span>
					</li>
					<liclass"disabled"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next</a></li>
					
				
				</ul>
			</div>

		</div>
	</div>
</div>
<?php include 'usr_footer.php';?>
