<?php 
include 'header.php';

echo "<div  style='margin-top:40px;'><div  class='container'><div>
<div >
<div class='active item'>
<img class='media-object' src='admin/uploads/{$_GET['ProductImage']}'  />
</div>
</div>

<div >
<h4>{$_GET['productBrand']} in {$_GET['productLine']}</h4>
<h5>{$_GET['productCode']} {$_GET['productName']}</h5>
<p>{$_GET['productDescription']}</p>
						<h4>$ {$_GET['buyPrice']} USD</h4>
							<button class='btn btn-primary' onclick='javascript:window.history.back();'> Back </button>
					</div>
				</div>

				<div class='row'>
					<div class='span9'>
						<ul class='nav nav-tabs' id='tabs'>
							<li><a href='#reviews'><span class='badge badge-inverse'></span> Reviews</a></li>
						</ul>

						<div class='tab-content'>";
				
				$rq = "select * from `reviews` where `productCode` = '{$_GET['productCode']}'";
				$rv = mysql_query ( $rq );
				while ( $rev = mysql_fetch_assoc ( $rv ) ) {
					echo "<div class='tab-pane active' id='reviews'>
							{$rev['Review']}</hr>
							</div>";
				}
				echo "</div>
									</div>
									</div>
									</div></div></div>";

											
									
include 'usr_footer.php';