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

//Add category

define ("MAX_SIZE","500");

if (isset($_POST['submit']))
{

	$ufile = $_FILES['uploadedfile']['tmp_name'];
	$type = $_FILES['uploadedfile']['type'];
	$name = $_FILES['uploadedfile']['name'];
	
	$ext = SbUtil::getExtension($name);

	list($w,$h) = getimagesize($ufile);
	
	$target_path = $target_path.basename( $name );

 	if (($ext != "jpg") && ($ext != "jpeg") && ($ext != "png") && ($ext != "gif")) 
 	{
 		echo "<span style='color:red'>Unknown Image extension </span>";
 	}elseif ($w != 300 || $h != 200){
 		echo "<span style='color:red'>Image resolution should be 300 x 200 . </span>";
 	}
 	elseif (move_uploaded_file($ufile,$target_path))
 	{
		echo "<span style='color:red'>Record inserted!</span>";

		$sql = "INSERT INTO productlines(productLine, textDescription, image)VALUES('{$_POST['inputName']}', '{$_POST['pdesc']}', '$name')";
		$result=mysql_query($sql);
	}
}


$s = "select * from `productlines` where deleted = 0";
$qry = mysql_query($s);

?>


<div class="row">
	<div class="container">
		<form name="form" id="form" class="form-horizontal well" method="POST"
			enctype="multipart/form-data" action="">
			<fieldset>
				<legend>Add Category</legend>
				<div class="control-group">
					<label class="control-label" for="inputName">Category Name</label>

					<div class="controls">
						<input type="text" name="inputName" placeholder="Name"
							required="required">
					</div>
				</div>
			
				<div class="control-group">
					<label class="control-label" for="inputdesc">Description</label>
					<div class="controls">
						
						<textarea id="pdesc" name="pdesc" rows="2" cols="20"
										placeholder="Category Description" required="required">
					  </textarea>
						
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputimg">Upload an image</label>

					<div class="controls">
						<input type="file" name="uploadedfile" id="uploadedfile" />
					</div>
				</div>
				
				<hr>
				<div align="center">
					<input type="submit" value="Add New Category" name="submit">

				</div>
			</fieldset>
		</form>
	</div>
</div>

<hr>


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
	        	<td><img width='120px' height='150px' alt='{$get_data['productLine']}' src='uploads/{$get_data['image']}'></td>
	        	<td><a href='upd_usr.php?ed={$get_data['productLine']}'><img src='img/buttonUpdate.png'></a></td>
				<td><a href='rmv_usr.php?del={$get_data['productLine']}'><img src='img/erase.png'></a></td>
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