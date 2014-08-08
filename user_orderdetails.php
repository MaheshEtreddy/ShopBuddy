<?php
include_once("header.php");

// $orderQry = mysql_query("select * from `orderdetails` order by id DESC");

if(isset($_POST['submit'])) {
	$id_array = $_POST['data']; // return array
	$id_count = count($_POST['data']); // count array
 
	for($i=0; $i < $id_count; $i++) {
		$id = $id_array[$i];
		$query = mysql_query("UPDATE orders SET `OrderStatus`= 'Order Cancelled By User' where `orderNumber` = '{$id}'");
		if(!$query) { die(mysql_error()); }
	}
	// REDIRECT
	echo "<script>window.location = '?cancelled'</script>";
}

if (isset($_GET['cancelled'])) {
	echo "<div class='alert alert-success alert-block'>

		<strong>Selected Orders</strong>
		have been cancelled!.
		</div>";
}

?>
<div class="container" style="margin-top: 35px">
<h4>Order Details</h4>
<form action="" method="post">
	<table class="table well">

		<thead>
			<tr>
				<th><input type="checkbox" id="check_all" name="check_all"></th>
				<!--         <th>S.No</th> -->
				<th>Order Number</th>
				<th>Customer Name</th>
				<th>Product Info</th>
				<th>Payments</th>
				<th>Payment Status</th>
				<!--      <th>Quantity</th>-->
				<th>Order Date</th>
				<th>Order Status</th>
				<th>Shipping Status</th>
			</tr>
		</thead>
		<tbody>
    
    
    
    
    <?php
				if (isset ( $_SESSION["user_id"])){
    	$custID = $_SESSION["user_id"];
    		
    }else{
    	$custID = '15';
    }
    $orderqry = mysql_query("select * from `orders` where customerID={$custID} order by `orderNumber` DESC");
    $count = 1;
    if ($orderqry != false) {
    	while ($get_data = mysql_fetch_array($orderqry))
    	
		{
			$nameQry = mysql_query("select customerName from `customers` where customerID = '{$get_data['customerID']}'");
			$nameRes = mysql_fetch_assoc($nameQry);
			 
			$productQry = mysql_query("select `productName` from `products` where `productCode` = '{$get_data['productCode']}'");
			$prodRes = mysql_fetch_assoc($productQry);
			 
			$paymntQry = mysql_query("select `amount`, `paymentStatus` from `payments` where `orderNumber` = '{$get_data['orderNumber']}'");
			$paymntRes  = mysql_fetch_assoc($paymntQry);
			 
			$odrDateStatQry =  mysql_query("select `orderDate`, `shippingStatus`, `OrderStatus` from `orders` where `orderNumber` = '{$get_data['orderNumber']}'");
			$odrDateStatRes  = mysql_fetch_assoc($odrDateStatQry);
			
			echo "<tr class='success'>
			<td><input type='checkbox' class='enq' name='data[]' id='{$get_data['orderNumber']}' value='{$get_data['orderNumber']}'></td>
			<td>{$get_data['orderNumber']}</td>
			<td>{$nameRes['customerName']}</td>
			<td>{$prodRes['productName']}</td>
			<td>{$paymntRes['amount']}</td>
			<td>{$paymntRes['paymentStatus']}</td>
			<td>{$odrDateStatRes['orderDate']}</td>
			<td>{$odrDateStatRes['OrderStatus']}</td>
			<td>{$odrDateStatRes['shippingStatus']}</td>
			</tr>";
			$count = $count +1;
			}
    }else {
    	echo "<tr>
				<td colspan = '7'>No Orders to Display</td></tr>";
    }

	?>
    
    </tbody>
	</table>
	<div align="center">
		<input type="submit" name="submit" id="submit" value="Cancel">
	</div>
</form>
</div>

<?php 
include_once ("usr_footer.php");
?>