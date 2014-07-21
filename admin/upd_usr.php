<?php
session_start();
$_SESSION['err'] = '';
include_once 'header.php';

if (isset($_GET['ed'])) {

	$rmv_usr = $_GET['ed'];

	$err = '';
	
	$sql = mysql_query("select * from `users` WHERE `id` = '{$rmv_usr}'");
	$res = mysql_fetch_array($sql);
	
	if ($rmv_usr != $res['id']) {
		$err .= 'Username does not match our records. Not yet registered with ous!<br/>';
	}

	if ($err == '') {?>
	
<div class="row" >
  <div class="span6" style="padding-left: 600px;padding-right: 800px;">
        <form name="form" id="form" class="form-horizontal well" method="POST" action="">
            <fieldset>
            <div id="errorBox"></div>
                <legend>Update User Details</legend>
                <div class="control-group">
                    <label class="control-label" for="inputName">Name</label>

                    <div class="controls">
                        <input type="text" name="inputName" required="required" value="<?php echo $res['name']?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
					 <div class="controls">
						 <div class="input-prepend">
	                        <span class="add-on"><i class="icon-envelope icon-white"></i></span>
	                        
	                        <input type="text" class="em" name="inputEmail" required="required"  value="<?php echo $res['e-mail']?>" disabled="disabled">
	                        <input type="hidden" name="email" value="<?php echo $res['e-mail']?>">
	                    </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputph">Phone No.</label>

                    <div class="controls">
                        <input type="text" name="inputph"  value="<?php echo $res['ph']?>" >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>

                    <div class="controls">
                        <input type="password" name="inputPassword" placeholder="Enter new password" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="status">Status</label>

                    <div class="controls">
                        <select name="status" required="required">
                        	<option value="<?php echo $res['status']?>"><?php echo $res['status']?></option>
					        <option value="Approved">Approved</option>
					        <option value="Declined">Declined</option>
					        <option value="Pending">Pending</option>
					        <option value="Call in to confirm">Call in to confirm</option>
					    </select>
                    </div>
                </div>
               <hr>
                <div align="center">
                    <input type="submit" value="Update Details" name="update">
                   
                </div>
            </fieldset>
        </form>
    </div>
</div>
<hr>
		
	<?php 
	include_once 'footer.php';
	
		}else {
			$_SESSION['err'] = 'not updated';
			$_SESSION['message'] = $err;
			echo "<script>window.location = '/admin/user_list.php'</script>";
		}
	}
	if (isset($_POST['update']) == 'Update Details') {
		$update = "UPDATE `users` SET `name`='{$_POST['inputName']}', `pass`='{$_POST['inputPassword']}', `ph`='{$_POST['inputph']}', `status` = '{$_POST['status']}' WHERE `e-mail`='{$_POST['email']}'";
		$updated = mysql_query($update);
			
		if ($updated == true) {
			$_SESSION['err'] = 'updated';
			$newURL = "/admin/update_user.php";
			// 				header('Location: '.$newURL);
			echo "<script>window.location = '/admin/user_list.php'</script>";
		}
	}