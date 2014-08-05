<?php
include 'header.php';
?>
<div class="container">
		<div class="row" style="margin-top: 30px">
			<div class="span3">
				<div class="well">

					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-shopping-cart"></i>
								3 item - $999.99
								<b class="caret"></b></a>
						</a>
						<div class="dropdown-menu well" role="menu" aria-labelledby="dLabel">
							<p>Item x 1 <span class="pull-right">$333.33</span></p>
							<p>Item x 1 <span class="pull-right">$333.33</span></p>
							<p>Item x 1 <span class="pull-right">$333.33</span></p>
							<a href="#" class="btn btn-primary">Checkout</a>
						</div>
					</div>
					
				</div>

				<div class="well">
					<ul class="nav nav-list">
						<li class="nav-header">Sidebar</li>
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						
						<li class="nav-header">Sidebar</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						
						<li class="nav-header">Sidebar</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
					</ul>
				</div>				
			</div>
			
			<div class="span9">
				<div class="row">
					<div class="span5">
						<div id="items-carousel" class="carousel slide mbottom0">
							<div class="carousel-inner">
								<div class="active item">
									<img class="media-object" src="holder.js/470x310" alt="" />
								</div>

								<div class="item">
									<img class="media-object" src="holder.js/470x310" alt="" />
								</div>

								<div class="item">
									<img class="media-object" src="holder.js/470x310" alt="" />
								</div>
							</div>
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
					</div>

					<div class="span4">
						<h4>Item Brand and Category</h4>
						<h5>AB29837 Item Model</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<h4>$333.33</h4>
						<h5>Options</h5>
						<form>
							<select id="size" name="size">
								<option>choose size</option>
								<option>S</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
							</select>

							<select id="color" name="color">
								<option>choose color</option>
								<option>red</option>
								<option>green</option>
								<option>blue</option>
							</select>

							<label>
								<input type="text" id="quantity" name="quantity" value="1" class="span1" />&nbsp;Qty
							</label>
							<button class="btn btn-primary">Add to Chart</button>
						</form>
						<a href="#">+ Add to whishlist</a>
						
					</div>
				</div>

				<div class="row">
					<div class="span9">
						<ul class="nav nav-tabs" id="tabs">
							<li class="active"><a href="#description">Description</a></li>
							<li><a href="#reviews"><span class="badge badge-inverse">10</span> Reviews</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="description">
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</p>
							</div>
							<div class="tab-pane" id="reviews">...</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php include 'usr_footer.php';?>