<?php
include_once 'header.php';

$s = "select * from `productlines` where deleted = 0";
$qry = mysql_query($s);

$p = "select * from `products` where deleted = 0";
$pqry = mysql_query($p);

$util = new SbUtil();


?>

<!-- body included header in the top. -->


<div class="container">
	<div class="row" style="margin-top: 30px">

		<div class="span3">
			<div class="well">

				<div class="dropdown" id='cart' >
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-shopping-cart"></i> Your Cart <b class="caret"></b></a>

					<div class="dropdown-menu well" role="menu"
						aria-labelledby="dLabel">
							<p>Cart is empty</p>
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
					<button class="btn btn-primary pull-right" type="submit" >Sort</button>
				</form>
			</div>


		</div>

		<div class="span9">
			<div id="myCarousel" class="carousel slide">
			<!-- Carousel slides -->
			<div class="carousel-inner">
				<div class="active item">
					<img src="img/1.jpg" width="916px" height="348px">
					<div class="carousel-caption">
						<h4>DesignLoud, LLC</h4>
						<p>This is a sample caption for our Twitter Bootstrap tutorial.</p>
					</div>
				</div>
				
				<div class="item">
					<img src="img/slider-1.jpg" width="916px" height="348px">
					<div class="carousel-caption">
						<h4>DesignLoud, LLC</h4>
						<p>This is a sample caption for our Twitter Bootstrap tutorial.</p>
					</div>
				</div>
				<div class="item">
					<img src="img/slider2.jpg" width="916px" height="348px">
					<div class="carousel-caption">
						<h4>DesignLoud, LLC</h4>
						<p>This is a sample caption for our Twitter Bootstrap tutorial.</p>
					</div>
				</div>
				<div class="item">
					<img src="img/slider-5.jpg" width="916px" height="348px">
					<div class="carousel-caption">
						<h4>DesignLoud, LLC</h4>
						<p>This is a sample caption for our Twitter Bootstrap tutorial.</p>
					</div>
				</div>
			</div>

			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
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
					<a class='btn btn-primary' href='view-product.php' >View</a> &nbsp;"; 
				
?>
					<script>
  var phpadd= <?=$prdata['productCode']?> 
  var price= <?=$prdata['buyPrice']?> 
  </script>
						<button class='btn btn-success' id='cart' onclick='populateCart(phpadd,price);'> Add to Cart </button>
					
					  <?php   echo "</div></div></li>";
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
