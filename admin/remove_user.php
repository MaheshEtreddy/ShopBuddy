<?php
include_once 'header.php';

if ($_SESSION['err'] == 'updated') {
	echo "<div class='alert alert-success alert-block'>
		
		<strong>User</strong>
		has been deleted!.
		</div>";
	unset($_SESSION['err']);
}elseif ($_SESSION['err'] == 'not updated'){
		echo "<div class='alert alert-error'>
			
			{$_SESSION['message']}
			</div>";
			unset($_SESSION['err']);
			unset($_SESSION['message']);
}
?>

<div class="row" >
  <div class="span6" style="padding-left: 600px;padding-right: 800px;">
        <form name="form" id="form" class="form-horizontal well" method="POST" action="rmv_usr.php">
            <fieldset>
            <div id="errorBox"></div>
                <legend>Remove User</legend>
                <div class="control-group">
                    <label class="control-label" for="inputName">Username</label>

                    <div class="controls">
                        <input type="text" name="rmv_usr" required="required" placeholder="name to be removed">
                    </div>
                </div>
                                              
               <hr>
                <div align="center">
                    <input type="submit" value="Remove" name="submit">
                   
                </div>
            </fieldset>
        </form>
    </div>
</div>
<hr>
<?php include_once 'footer.php';?>