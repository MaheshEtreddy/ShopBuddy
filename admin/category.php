<?php 
include_once("header.php");

if ($_SESSION['err'] == 'updated') {
	echo "<div class='alert alert-success alert-block'>

		<strong>User Details</strong>
		have been updated!.
		</div>";
	unset($_SESSION['err']);
}elseif ($_SESSION['err'] == 'not updated'){
	echo "<div class='alert alert-error'>
		
	{$_SESSION['message']}
	</div>";
	unset($_SESSION['err']);
	unset($_SESSION['message']);
}elseif ($_SESSION['err'] == 'deleted') {
	echo "<div class='alert alert-success alert-block'>
		
		<strong>User</strong>
		has been deleted!.
		</div>";
	unset($_SESSION['err']);
}elseif ($_SESSION['err'] == 'not deleted'){
	echo "<div class='alert alert-error'>
		
		{$_SESSION['message']}
		</div>";
		unset($_SESSION['err']);
		unset($_SESSION['message']);
}

$s = "select * from `productlines`";
$qry = mysql_query($s);
?>
  <h4>Categories List</h4>
  <table class="table well">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $count = 1;
      
    while ($get_data = mysql_fetch_array($qry))
	{
		echo "<tr>
				<td>{$count}</td>
	       		<td>{$get_data['productLine']}</td>
	        	<td>{$get_data['textDescription']}</td>
	        	<td>{$get_data['image']}</td>
	        	<td><a href='upd_usr.php?ed={$get_data['id']}'><img src='img/buttonUpdate.png'></a></td>
				<td><a href='rmv_usr.php?del={$get_data['id']}'><img src='img/erase.png'></a></td>
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