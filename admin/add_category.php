<?php 
include_once 'header.php';

define ("MAX_SIZE","500");

if (isset($_POST['submit']))
{

	$ufile = $_FILES['uploadedfile']['name'];
	$type = $_FILES['uploadedfile']['type'];
	$target_path="uploads/";
	
	$target_path = $target_path.basename( $_FILES['uploadedfile']['name']);
	
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path))
	{
		echo "<b>The file <span class='file'><u><a href='uploads/".basename($_FILES['uploadedfile']['name'])."'> {  " .basename($_FILES['uploadedfile']['name']). "  }</a></u></span> has been uploaded..</b>";
	}
	
	
	$sql = "INSERT INTO productlines(productLine, textDescription, image)VALUES('{$_POST['inputName']}', '{$_POST['pdesc']}', '$ufile')";
	$result=mysql_query($sql);
	

}	
?>

<div class="row">
	<div style="width: 750px; align-self: center; padding: 50px 570px 50px 570px;">
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
<?php 
include_once 'footer.php';
?>
