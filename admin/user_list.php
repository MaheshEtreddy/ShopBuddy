<?php
//Mahesh's modifications
include_once ("header.php");
if (isset ( $_GET ['deleteUser'] )) {
	$sql = "UPDATE customers SET `deletedYN` = '1' WHERE `customerID` = '{$_GET['deleteUser']}'";
	$delUser = mysql_query ($sql);

		$result = mysql_query("select customerName from customers WHERE `customerID` ='{$_GET['deleteUser']}'");
		$deleteCustName = mysql_fetch_object($result);
		$user = $deleteCustName->customerName;
	
	if ($delUser == '1') {
		
	echo "<div class='alert alert-error'> <strong>User {$user} </strong> has been deleted!.";
	
	} else {
		echo "<div class='alert alert-error'> strong>User  </strong> has not been deleted!.";
	exit(0);
	}
	
} 
// Mahesh's modifications

// if (isset($_SESSION['err']) == 'updated') {
// echo "<div class='alert alert-success alert-block'>

// <strong>User Details</strong>
// have been updated!.
// </div>";
// unset($_SESSION['err']);
// }elseif (isset($_SESSION['err']) == 'not updated'){
// echo "<div class='alert alert-error'>

// {$_SESSION['message']}
// </div>";
// unset($_SESSION['err']);
// unset($_SESSION['message']);
// }elseif (isset($_SESSION['err']) == 'deleted') {
// echo "<div class='alert alert-success alert-block'>

// <strong>User</strong>
// has been deleted!.
// </div>";
// unset($_SESSION['err']);
// }elseif (isset($_SESSION['err']) == 'not deleted'){
// echo "<div class='alert alert-error'>

// {$_SESSION['message']}

// </div>";
// unset($_SESSION['err']);
// unset($_SESSION['message']);
// }

$qry = mysql_query ( "Select * from `customers` where deletedYN = '0'order by createdDate DESC" );
?>
<h4>Customers List</h4>
<table class="table well">
	<thead>
		<tr>
			<th>Customer ID</th>
			<th>Customer Name</th>
			<th>Customer E-mail</th>
			<th>Customer Phone</th>
			<th>Customer Address</th>
			<th>Registered On</th>
			<th>Orders</th>
		</tr>
	</thead>
	<tbody>
    <?php
			$count = 1;
		while ( $get_data = mysql_fetch_array ( $qry ) ) {
								
		echo "<tr class='success'>
		<td>{$get_data['customerID']}</td>
	   	<td>{$get_data['customerName']}</td>
	    <td>{$get_data['customerMail']}</td>
	    <td>{$get_data['phone']}</td>
		<td>{$get_data['addressLine1']} {$get_data['city']} {$get_data['state']} {$get_data['country']}</td>
		<td>{$get_data['createdDate']}</td>
		<td>{$get_data['creditLimit']}</td>
			<td><a href='user_list.php?deleteUser={$get_data['customerID']}'><img src='img/erase.png'></a></td>
				</tr>";
					$count = $count + 1;
				}
				?>
    </tbody>
</table>
<hr>
<?php
include_once ("footer.php");
?>