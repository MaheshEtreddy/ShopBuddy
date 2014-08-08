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

				<div class="dropdown " id='cart' >
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

						if (isset($_REQUEST['brand']) && in_array($pdata['productBrand'], $_REQUEST['brand']) ) {
							$checked = "checked='checked'";
						}else {
							$checked = '';
						}
						echo "<label class='checkbox'> <input type='checkbox' value='{$pdata['productBrand']}' name='brand[]' id= 'brand' {$checked} > {$pdata['productBrand']}
							</label>";
					}
				}
				
				if (isset($_SERVER['QUERY_STRING'])) {
					parse_str($_SERVER['QUERY_STRING'], $query);

					echo "<input type='hidden' name='Cat' value='{$query['Cat']}'>";
				}
				?>
				<input type="submit" class="btn btn-info" value='Apply'>
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
				<form method="get" action="">
					<label class="radio"> <input type="radio" name="sort" value="asc" checked> Price low to high</label> 
					<label class="radio"> <input type="radio" name="sort" value="desc"> Price high to low</label>
					<?php 
					if (isset($_SERVER['REQUEST_URI'])) {
						$cur_url = $_SERVER['REQUEST_URI'];
						parse_str($_SERVER['QUERY_STRING'], $outputArray);
						$bd = $outputArray['brand'];
						$ca =$outputArray['Cat'];
						if (isset($ca)) {
							echo "<input type='hidden' name='Cat' value='{$ca}'>";
						}
						if (isset($bd)) {
						foreach ($bd as $brand){
							echo "<input type='hidden' name='brand[]' value='{$brand}'>";
						}}
						
					}
					?>
					<input type="submit" class="btn btn-info" value='Sort'>
				</form>
			</div> 


		</div>

		<div class="span9">
			<div id="myCarousel" class="carousel slide" style="width: 1030px">
				<!-- Carousel slides -->
				<div class="carousel-inner">
					
					<div class="active item">
						<img src="img/slider-1.jpg" width="1030px" height="300px">
						<div class="carousel-caption">
							<h4>Vintage Cars</h4>
							<p>The most general sense, an old automobile, and in the narrower senses of car enthusiasts and collectors.</p>
						</div>
					</div>
					
					<div class="item">
						<img src="img/slider2.jpg" width="1030px" height="300px">
						<div class="carousel-caption">
							<h4>Luxary Cars</h4>
							<p>Pleasant or desirable features beyond strict necessity — at increased expense.</p>
						</div>
					</div>
					
					<div class="item">
						<img src="img/slider-5.jpg" width="1030px" height="300px">
						<div class="carousel-caption">
							<h4>Small Cars</h4>
							<p>A compact car, or small family car.</p>
						</div>
					</div>
				</div>

				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel"
					data-slide="prev">&lsaquo;</a> <a class="carousel-control right"
					href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>

			<ul class="thumbnails" style="width: 1100px">
			<?php 
			
			$pr = "select * from `products` where deleted = 0 ";
			if (isset($_GET['Cat'])) {
				$pr .= "and productLine = '{$_GET['Cat']}' ";
			}
			
			if (isset($_REQUEST['brand'])) {
				$brands = "'" .implode("','", $_REQUEST['brand']). "'";
				$pr .= "and productBrand in ({$brands}) ";
			}
			
			if (isset($_GET['sort'])) {
				$pr .= " order by `buyPrice` {$_GET['sort']} ";
			}
			
			$prqry = mysql_query($pr);
			
			while ($prdata = mysql_fetch_array($prqry)){
				$url = 'view.php?';
				$first = true;
				foreach($prdata as $key => $value) {
					if(!$first) $url .= '&';
					else $first = false;
					$url .= urlencode($key).'='.urlencode($value);
				}
				
				
				
				echo "<li class='cart_items'>
					<div class='content'> <a  href='javascript:;' class='product-image' title='{$prdata['productName']}' > 
				      <img class='thumbnail' src='admin/uploads/{$prdata['ProductImage']}' alt='{$prdata['productName']}' width='300px' height='200px' /> </a> 
				      <div class='caption'>
						<h4>{$prdata['productName']}</h4>
				      <p>
						<strike>$ {$prdata['MSRP']}</strike>&nbsp; $ {$prdata['buyPrice']} USD
						</p>
						<a id='view' class='btn btn-primary' href='{$url}' >
						  View
						</a>
						

				      <button type='button' code= {$prdata['productCode']} price={$prdata['buyPrice']} title='Add to Cart' class='add-to-cart btn btn-success'>Add to Cart</button></div></div></li>";
			}
			
			?>
			</ul>


		</div>
	</div>
</div>
<?php include 'usr_footer.php';
			?>