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


$qry = mysql_query("select * from `users` order by id DESC");
?>
  <h4>Users List</h4>
  <table class="table well">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Ph no.</th>
        <th>Joined</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $count = 1;
    while ($get_data = mysql_fetch_array($qry))
	{
		if ($get_data['status'] == 'Approved') {
			$class = 'success';
		}elseif ($get_data['status'] == 'Declined') {
			$class = 'error';
		}elseif ($get_data['status'] == 'Pending') {
			$class = 'warning';
		}elseif ($get_data['status'] == 'Call in to confirm') {
			$class = 'info';
		}
		
		echo "<tr class='{$class}'>
				<td>{$count}</td>
	       		<td>{$get_data['name']}</td>
	        	<td>{$get_data['e-mail']}</td>
	        	<td>{$get_data['ph']}</td>
				<td>{$get_data['entry_dt']}</td>
				<td>{$get_data['status']}</td>
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