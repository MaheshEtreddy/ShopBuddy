<?php
include_once ("header.php");
// $orderQry = mysql_query("select * from `orderdetails` order by id DESC");
if (isset ( $_POST ['submit'] )) {
	$order = $_POST ['OrderStatus']; // return array
	$ship = $_POST ['ShipStatus'];
	if ($order != '' || $ship != '') {
		$query = mysql_query ( "UPDATE `orders` SET `shippingStatus`='{$ship}', `OrderStatus`='{$order}' WHERE  `orderNumber`='{$_POST['num']}'" );
		echo "<script>window.location = '?updated'</script>";
	} 	// redirent after deleting
	else {
		echo "<script>window.location = '?notupdated'</script>";
	}
}
if (isset ($_GET ['updated'] )) {
	echo "<div class='alert alert-success alert-block'>
		<strong>Selected Orders</strong>
		have been Updated!.
		</div>";
} elseif (isset ($_GET ['notupdated'])) {
	echo "<div class='alert alert-error'><strong>Selected Orders</strong> are not updated!.</div>";
}
?>
<head>
</script>
</head>
<h4>Order Details</h4>

<table class="table well">
	<thead>
		<tr>
			<th>Order Number</th>
			<th>Customer Name</th>
			<th>Product Info</th>
			<th>Payments</th>
			<th>Payment Status</th>
			<th>Order Date</th>
			<th>Order Status</th>
			<th>Shipping Status</th>
		</tr>
	</thead>
	<tbody>
    <?php
				$ShipStatusarray = array (
						"Pending",
						"Processed",
						"In Transit",
						"Shipped",
						"Canceled",
						"Wrong Address",
						"No Claim" 
				);
				
				$OrderStatusarray = array (
						"Order Confirmed",
						"Packed and Ready for delivery",
						"In Transit",
						"Cancelled by provider",
						"Cancelled by customer",
						"Returned",
						"Incomplete" 
				);
				
				if (isset ( $_SESSION ["user_id"] )) {
					$custID = $_SESSION ["user_id"];
				} else {
					$custID = '15';
				}
				$orderqry = mysql_query ( "select * from `orders` order by `orderNumber` DESC" );
				$count = 1;
				if ($orderqry != false) {
					while ( $get_data = mysql_fetch_assoc ( $orderqry ) ) 

					{
						$nameQry = mysql_query ( "select customerName from `customers` where customerID = '{$get_data['customerID']}'" );
						$nameRes = mysql_fetch_assoc ( $nameQry );
						
						$productQry = mysql_query ( "select `productName` from `products` where `productCode` = '{$get_data['productCode']}'" );
						$prodRes = mysql_fetch_assoc ( $productQry );
						
						$paymntQry = mysql_query ( "select `amount`, `paymentStatus` from `payments` where `orderNumber` = '{$get_data['orderNumber']}'" );
						$paymntRes = mysql_fetch_assoc ( $paymntQry );
						
						$odrDateStatQry = mysql_query ( "select `orderDate`, `shippingStatus`, `OrderStatus` from `orders` where `orderNumber` = '{$get_data['orderNumber']}'" );
						$odrDateStatRes = mysql_fetch_assoc ( $odrDateStatQry );
						
						echo "<form action='' method='post'>
							<tr class='success'>
			<td>{$get_data['orderNumber']}</td>
			<td>{$nameRes['customerName']}</td>
			<td>{$prodRes['productName']}</td>
			<td>{$paymntRes['amount']}</td>
			<td>{$paymntRes['paymentStatus']}</td>
			
			<td>{$odrDateStatRes['orderDate']}</td>
			<td><select name='OrderStatus'>
			<option value=''>...Select...</option>";
						foreach ( $OrderStatusarray as $value ) {
							if ($value == $odrDateStatRes ['OrderStatus']) {
								echo "<option value= '{$value}'  selected='selected'>{$value}</option>";
							} else {
								echo "<option value='{$value}'>{$value}</option>";
							}
						}
						echo "</select></td><td><select name='ShipStatus'>
						<option value=''>...Select...</option>";
						foreach ( $ShipStatusarray as $value ) {
							if ($value == $odrDateStatRes ['shippingStatus']) {
								echo "<option value='{$value}'  selected='selected'>{$value}</option>";
							} else {
								echo "<option value='{$value}'>{$value}</option>";
							}
						}
						echo "</select></td></td><td><input type='submit' name='submit' id='submit' value='Update Status'>
								<input type='hidden' name='num' value='{$get_data['orderNumber']}'> </td></tr>";
						$count = $count + 1;
						echo "</form>";
					}
				} else {
					echo "<td colspan = '7'>No Orders to Display</td></tr>";
				}
				?>
    </tbody>
</table>
<hr>
<?php
include_once ("footer.php");
?>