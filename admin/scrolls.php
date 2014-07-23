<?php 
session_start();
include_once("header.php");

if (isset($_POST['add']) == 'Add') {
	$text = stripslashes(base64_encode($_POST['text']));
	$q = mysql_query("insert into `scrolls` (`text`) VALUES ('{$text}')");
}elseif (isset($_POST['update']) == 'Update') {
	$text = stripslashes(base64_encode($_POST['text']));
	$q = mysql_query("update `scrolls` set `text`= '{$text}' where id = '{$_GET['ed']}'");
	if ($q) {
		echo "<script>window.location = 'scrolls.php'</script>";
	}
}elseif (isset($_GET['del'])) {
	$q = mysql_query("delete from `scrolls` where `id` = '{$_GET['del']}'");
}elseif (isset($_GET['active'])){
	$q = mysql_query("update `scrolls` set `status`= 1 where id = '{$_GET['active']}'");
	if ($q) {
		mysql_query("update `scrolls` set `status`= 0 where id != '{$_GET['active']}'");
	}
}elseif (isset($_GET['deactive'])){
	$q = mysql_query("update `scrolls` set `status`= 0 where id = '{$_GET['deactive']}'");
}

$qry = mysql_query("select * from `scrolls` order by id DESC");
?>
<div>
  <h4>Scroll List</h4>
  
  <table class="table well">
    <thead>
    <tr>
    	<th>#</th>
        <th><i class="icon-edit icon-black"></i> Scroll Text</th>
        <th><i class="icon-pencil icon-black"></i> Edit</th>
        <th><i class="icon-remove-sign icon-black"></i> Delete</th>
        <th><i class="icon-check icon-black"></i></th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $count = 1;
    while ($get_data = mysql_fetch_array($qry))
	{
		if ($get_data['status'] == 1) {
			$class = 'success';
		}elseif ($get_data['status'] == 0) {
			$class = 'error';
		}
		
		$text = stripslashes(base64_decode($get_data['text']));
		echo "<tr class='{$class}'>
				<td>{$count}</td>
	       		<td>{$text}</td>
	       		<td><a href='?ed={$get_data['id']}' ><img id='update_user' src='img/buttonUpdate.png'></a></td>
				<td><a href='?del={$get_data['id']}'><img src='img/erase.png'></a></td>
				<td>";
				if ($get_data['status'] == '1') {
					echo "<a href='?deactive={$get_data['id']}'>Deactivate</a>";
				}else{
				echo "<a href='?active={$get_data['id']}'>Activate</a>";
				}
				echo "</td>
				</tr>";
		$count = $count +1;
	}

	
	?>
    
    </tbody>
</table>
</div>
<?php if (isset($_GET['ed'])) {

	$qry = mysql_query("select * from `scrolls` where id = '{$_GET['ed']}'");
	$res = mysql_fetch_array($qry);
	$txt = stripslashes(base64_decode($res['text']));
	?>
	<div>
	
	<form class="form-inline" action="" method="post">
	<fieldset>
	<legend>Update Scrolling</legend>
	<textarea rows="2" cols="80" class="editable" name="text"><?php echo $txt; ?></textarea>
	                <br>
	                <input type="submit" class="btn" name="update" value="Update">
	            </fieldset>
	        </form>
	
	</div>
<?php }else{ ?>
<div>
        <form class="form-inline" action="" method="post">
            <fieldset>
                <legend>Add new Scrolling</legend>
                <textarea rows="2" cols="80" class="editable" name="text"></textarea>
                <br>
                <input type="submit" class="btn" name="add" value="Add">
            </fieldset>
        </form>
    </div><?php }?>
<hr>
<?php 
include_once ("footer.php");
?>