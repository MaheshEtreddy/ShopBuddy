<?php
include_once 'header.php';

if ($_SESSION['err'] == 'updated') {
	echo "<div class='alert alert-success alert-block'>
		
		Password for <strong>{$_POST['inputName']}</strong>
		has been successfully updated!.
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
        <form name="form" id="form" class="form-horizontal well" method="POST" action="pwd_chng_meth.php">
            <fieldset>
            <div id="errorBox"></div>
                <legend>Change Password</legend>
                <div class="control-group">
                    <label class="control-label" for="inputName">Username</label>

                    <div class="controls">
                        <input type="text" class="uneditable-input" name="inputName" value="<?php echo $_SESSION["username"]?>" disabled="disabled">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Old Password</label>

                    <div class="controls">
                        <input type="password" name="oldPassword" placeholder="Old Password" required="required">
                    </div>
                </div>
               
               <div class="control-group">
                    <label class="control-label" for="inputPassword">New Password</label>

                    <div class="controls">
                        <input type="password" name="newPassword" placeholder="New Password" required="required">
                    </div>
                </div>
                
               <hr>
                <div align="center">
                    <input type="submit" value="Update" name="submit">
                   
                </div>
            </fieldset>
        </form>
    </div>
</div>
<hr>
<?php include_once 'footer.php';?>