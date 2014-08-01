<?php
include_once("header.php");

$orderQry = mysql_query("select * from `enquiry` order by id DESC");

// if(isset($_POST['submit'])) {
// 	$id_array = $_POST['data']; // return array
// 	$id_count = count($_POST['data']); // count array

// 	for($i=0; $i < $id_count; $i++) {
// 		$id = $id_array[$i];
// 		$query = mysql_query("DELETE FROM `enquiry` WHERE `id` = '$id'");
// 		if(!$query) { die(mysql_error()); }
// 	}
// 	// redirent after deleting
// 	echo "<script>window.location = '/admin/enquiry_details.php?deleted'</script>";
// }

// if (isset($_GET['deleted'])) {
// 	echo "<div class='alert alert-success alert-block'>

// 		<strong>Order details</strong>
// 		have been updated!.
// 		</div>";
// }

?>
<head>
<script type="text/javascript">
jQuery(function($) {
	$("form input[id='check_all']").click(function() { // triggred check

		var inputs = $("form input[type='checkbox']"); // get the checkbox

		for(var i = 0; i < inputs.length; i++) { // count input tag in the form
			var type = inputs[i].getAttribute("type"); //  get the type attribute
				if(type == "checkbox") {
					if(this.checked) {
						inputs[i].checked = true; // checked
					} else {
						inputs[i].checked = false; // unchecked
				 	 }
				}
		}
	});

	$("form input[id='submit']").click(function() {  // triggred submit

		var count_checked = $("[name='data[]']:checked").length; // count the checked
		if(count_checked == 0) {
			alert("Please select a product(s) to delete.");
			return false;
		}
		if(count_checked == 1) {
			return confirm("Are you sure you want to delete these product?");
		} else {
			return confirm("Are you sure you want to delete these products?");
		  }
	});
}); // jquery end

</script>
</head>
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
        <th>Quantity</th>
        <th>Order Date</th>
        <th>Order Status</th>
        <th>Payment Status</th>
    </tr>
    </thead>
    <tbody>
    
    <?php 
    
    $count = 1;
    if ($qry != false) {
    	while ($get_data = mysql_fetch_array($qry))
		{
		
			echo "<tr>
			<td><input type='checkbox' class='enq' name='data[]' id='{$get_data['id']}' value='{$get_data['id']}'></td>
			<td>{$count}</td>
			<td>{$get_data['name']}</td>
			<td>{$get_data['email']}</td>
			<td>{$get_data['ph_no']}</td>
			<td>{$get_data['course']}</td>
			<td>{$get_data['message']}</td>
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
<div align="center"><input type="submit" name="submit" id="submit" value="Delete"></div>
</form>
<hr>
<?php 
include_once ("footer.php");
?>