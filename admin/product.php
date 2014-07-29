<?php 
include_once("header.php");

if (isset($_SESSION['err']) == 'updated') {
	echo "<div class='alert alert-success alert-block'>

		<strong>User Details</strong>
		have been updated!.
		</div>";
	unset($_SESSION['err']);
}elseif (isset($_SESSION['err']) == 'not updated'){
	echo "<div class='alert alert-error'>
		
	{$_SESSION['message']}
	</div>";
	unset($_SESSION['err']);
	unset($_SESSION['message']);
}elseif (isset($_SESSION['err']) == 'deleted') {
	echo "<div class='alert alert-success alert-block'>
		
		<strong>User</strong>
		has been deleted!.
		</div>";
	unset($_SESSION['err']);
}elseif (isset($_SESSION['err']) == 'not deleted'){
	echo "<div class='alert alert-error'>
		
		{$_SESSION['message']}
		</div>";
		unset($_SESSION['err']);
		unset($_SESSION['message']);
}

//Add Product

define ("MAX_SIZE","500");

if (isset($_POST['submit']))
{

	$ufile = $_FILES['uploadedfile']['name'];
	$type = $_FILES['uploadedfile']['type'];
	$target_path="uploads/";

	$target_path = $target_path.basename( $_FILES['uploadedfile']['name']);

	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path))
	{
		echo "<span style='color:red'>Record inserted!</span>";
	}


	$sql = "INSERT INTO products(`productCode`, `productName`, `productLine`, `productBrand`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`, `ProductImage`)VALUES
	('{$_POST['pcode']}', '{$_POST['pname']}', '{$_POST['pline']}', '{$_POST['pbrand']}','{$_POST['pvendor']}', '{$_POST['pdesc']}','{$_POST['quantity']}', '{$_POST['bprice']}', '{$_POST['msrp']}', '$ufile')";
	$result=mysql_query($sql);

}


$s = "select * from `products`  where deleted = 0";
$qry = mysql_query($s);

?>


<div class="row">
	<div class="container">
		<form name="form" id="form" class="form-horizontal well" method="POST"
			enctype="multipart/form-data" action="">
			<fieldset>
				<legend>Add Product</legend>
				<div class="control-group">
					<label class="control-label" for="pcode">Product Code</label>

					<div class="controls">
						<input type="text" name="pcode" placeholder="Product Code"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pname">Product Name</label>

					<div class="controls">
						<input type="text" name="pname" placeholder="Product Name"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pline">Product Category</label>

					<div class="controls">
						<select name="pline" required="required">
							<option value="">Select a category</option>
							<?php
							$intquery = "SELECT * FROM productlines where deleted = 0";
							$query = mysql_query ( $intquery );
							while ( $result = mysql_fetch_array ( $query ) ) {
							$entityName = $result ['productLine'];
								?>
							<option value="<?php echo $entityName;?>">
								<?php echo $entityName?>
							</option>
							<?php }?>
					</select>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pbrand">Product Brand</label>

					<div class="controls">
						<input type="text" name="pbrand" placeholder="Product Brand"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pvendor">Product Vendor</label>

					<div class="controls">
						<input type="text" name="pvendor" placeholder="Product Vendor"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pdesc">Product Description</label>
					<div class="controls">
						
						<textarea id="pdesc" name="pdesc" rows="2" cols="20"
										placeholder="Product Description" required="required">
					  </textarea>
						
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="quantity">Quantity in Stock</label>

					<div class="controls">
						<input type="text" name="quantity" placeholder="Quantity"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="bprice">Buy Price</label>

					<div class="controls">
						<input type="text" name="bprice" placeholder="Buy Price"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="msrp">MSRP</label>

					<div class="controls">
						<input type="text" name="msrp" placeholder="MSRP"
							required="required">
					</div>
				</div>
								
				<div class="control-group">
					<label class="control-label" for="pimg">Upload an image</label>

					<div class="controls">
						<input type="file" name="uploadedfile" id="uploadedfile" />
					</div>
				</div>
				
				<hr>
				<div align="center">
					<input type="submit" value="Add New Product" name="submit">

				</div>
			</fieldset>
		</form>
	</div>
</div>

<hr>


  <h4>Products List</h4>
  <table class="table well">
    <thead>
    <tr>
    	<th>#</th>
        <th>Product Code</th>
        <th>Product Name</th> 
        <th>Product Category</th>
        <th>Product Brand</th>
        <th>Product Vendor</th>
        <th>Product Description</th>
        <th>Quantity in Stock</th>
        <th>Buy Price</th>
        <th>MSRP</th>
        <th>Product Image</th>
        
    </tr>
    </thead>
    <tbody>
    <?php 
    $count = 1;
    while ($get_data = mysql_fetch_array($qry))
	{
		echo "<tr>
				<td>{$count}</td>
	       		<td>{$get_data['productCode']}</td>
	        	<td>{$get_data['productName']}</td>
	        	<td>{$get_data['productLine']}</td>
	        	<td>{$get_data['productBrand']}</td>
	        	<td>{$get_data['productVendor']}</td>
	        	<td>{$get_data['productDescription']}</td>
	        	<td>{$get_data['quantityInStock']}</td>
	        	<td>{$get_data['buyPrice']}</td>
	        	<td>{$get_data['MSRP']}</td>
	        	<td><img width='120px' height='150px' alt='{$get_data['productName']}' src='uploads/{$get_data['ProductImage']}'></td>
	        	<td><a href='upd_usr.php?ed={$get_data['productCode']}'><img src='img/buttonUpdate.png'></a></td>
				<td><a href='rmv_usr.php?del={$get_data['productCode']}'><img src='img/erase.png'></a></td>
				</tr>";
		$count = $count +1;
	}

	
	?>
    
    </tbody>
</table>

<hr>

<?php 
include_once ("footer.php");
?>
<?php 
include_once("header.php");

if (isset($_SESSION['err']) == 'updated') {
	echo "<div class='alert alert-success alert-block'>

		<strong>User Details</strong>
		have been updated!.
		</div>";
	unset($_SESSION['err']);
}elseif (isset($_SESSION['err']) == 'not updated'){
	echo "<div class='alert alert-error'>
		
	{$_SESSION['message']}
	</div>";
	unset($_SESSION['err']);
	unset($_SESSION['message']);
}elseif (isset($_SESSION['err']) == 'deleted') {
	echo "<div class='alert alert-success alert-block'>
		
		<strong>User</strong>
		has been deleted!.
		</div>";
	unset($_SESSION['err']);
}elseif (isset($_SESSION['err']) == 'not deleted'){
	echo "<div class='alert alert-error'>
		
		{$_SESSION['message']}
		</div>";
		unset($_SESSION['err']);
		unset($_SESSION['message']);
}

//Add Product

define ("MAX_SIZE","500");

if (isset($_POST['submit']))
{

	$ufile = $_FILES['uploadedfile']['name'];
	$type = $_FILES['uploadedfile']['type'];
	$target_path="uploads/";

	$target_path = $target_path.basename( $_FILES['uploadedfile']['name']);

	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path))
	{
		echo "<span style='color:red'>Record inserted!</span>";
	}


	$sql = "INSERT INTO products(`productCode`, `productName`, `productLine`, `productBrand`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`, `ProductImage`)VALUES
	('{$_POST['pcode']}', '{$_POST['pname']}', '{$_POST['pline']}', '{$_POST['pbrand']}','{$_POST['pvendor']}', '{$_POST['pdesc']}','{$_POST['quantity']}', '{$_POST['bprice']}', '{$_POST['msrp']}', '$ufile')";
	$result=mysql_query($sql);

}


$s = "select * from `products`  where deleted = 0";
$qry = mysql_query($s);

?>


<div class="row">
	<div class="container">
		<form name="form" id="form" class="form-horizontal well" method="POST"
			enctype="multipart/form-data" action="">
			<fieldset>
				<legend>Add Product</legend>
				<div class="control-group">
					<label class="control-label" for="pcode">Product Code</label>

					<div class="controls">
						<input type="text" name="pcode" placeholder="Product Code"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pname">Product Name</label>

					<div class="controls">
						<input type="text" name="pname" placeholder="Product Name"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pline">Product Category</label>

					<div class="controls">
						<select name="pline" required="required">
							<option value="">Select a category</option>
							<?php
							$intquery = "SELECT * FROM productlines where deleted = 0";
							$query = mysql_query ( $intquery );
							while ( $result = mysql_fetch_array ( $query ) ) {
							$entityName = $result ['productLine'];
								?>
							<option value="<?php echo $entityName;?>">
								<?php echo $entityName?>
							</option>
							<?php }?>
					</select>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pbrand">Product Brand</label>

					<div class="controls">
						<input type="text" name="pbrand" placeholder="Product Brand"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pvendor">Product Vendor</label>

					<div class="controls">
						<input type="text" name="pvendor" placeholder="Product Vendor"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="pdesc">Product Description</label>
					<div class="controls">
						
						<textarea id="pdesc" name="pdesc" rows="2" cols="20"
										placeholder="Product Description" required="required">
					  </textarea>
						
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="quantity">Quantity in Stock</label>

					<div class="controls">
						<input type="text" name="quantity" placeholder="Quantity"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="bprice">Buy Price</label>

					<div class="controls">
						<input type="text" name="bprice" placeholder="Buy Price"
							required="required">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="msrp">MSRP</label>

					<div class="controls">
						<input type="text" name="msrp" placeholder="MSRP"
							required="required">
					</div>
				</div>
								
				<div class="control-group">
					<label class="control-label" for="pimg">Upload an image</label>

					<div class="controls">
						<input type="file" name="uploadedfile" id="uploadedfile" />
					</div>
				</div>
				
				<hr>
				<div align="center">
					<input type="submit" value="Add New Product" name="submit">

				</div>
			</fieldset>
		</form>
	</div>
</div>

<hr>


  <h4>Products List</h4>
  <table class="table well">
    <thead>
    <tr>
    	<th>#</th>
        <th>Product Code</th>
        <th>Product Name</th> 
        <th>Product Category</th>
        <th>Product Brand</th>
        <th>Product Vendor</th>
        <th>Product Description</th>
        <th>Quantity in Stock</th>
        <th>Buy Price</th>
        <th>MSRP</th>
        <th>Product Image</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $count = 1;
    while ($get_data = mysql_fetch_array($qry))
	{
		echo "<tr>
				<td>{$count}</td>
	       		<td>{$get_data['productCode']}</td>
	        	<td>{$get_data['productName']}</td>
	        	<td>{$get_data['productLine']}</td>
	        	<td>{$get_data['productBrand']}</td>
	        	<td>{$get_data['productVendor']}</td>
	        	<td>{$get_data['productDescription']}</td>
	        	<td>{$get_data['quantityInStock']}</td>
	        	<td>{$get_data['buyPrice']}</td>
	        	<td>{$get_data['MSRP']}</td>
	        	<td><img width='120px' height='150px' alt='{$get_data['productName']}' src='uploads/{$get_data['ProductImage']}'></td>
	        	<td><a href='upd_usr.php?ed={$get_data['productCode']}'><img src='img/buttonUpdate.png'></a></td>
				<td><a href='rmv_usr.php?del={$get_data['productCode']}'><img src='img/erase.png'></a></td>
				</tr>";
		$count = $count +1;
	}

	
	?>
    
    </tbody>
</table>

<hr>

<?php 
include_once ("footer.php");
?>