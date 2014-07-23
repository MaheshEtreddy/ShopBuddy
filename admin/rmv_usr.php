<?php
session_start();
$_SESSION['err'] = '';
include_once 'header.php';

if (isset($_GET['del'])) {

	$rmv_usr = $_GET['del'];

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
                <legend>Confirm to delete the User Record!</legend>
                <div class="control-group">
                    <label class="control-label" for="inputName">Name</label>

                    <div class="controls">
                        <label class="control-label" for="inputNamev"><?php echo $res['name']?></label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
					 <div class="controls">
						    <label class="control-label" for="inputEmailv"><?php echo $res['e-mail']?></label>
	                    
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputph">Phone No.</label>

                    <div class="controls">
                        <label class="control-label" for="inputphv"><?php echo $res['ph']?></label>
                    </div>
                </div>
               
                <div class="control-group">
                    <label class="control-label" for="status">Status</label>

                    <div class="controls">
                         <label class="control-label" for="statusv"><?php echo $res['status']?></label>
                    </div>
                </div>
               <hr>
                <div align="center">
                    <input type="submit" value="Delete" name="delete">
                   
                </div>
            </fieldset>
        </form>
    </div>
</div>
<hr>

		
	<?php 
	include_once 'footer.php';

		}else {
			$_SESSION['err'] = 'not deleted';
			$_SESSION['message'] = $err;
			$newURL = "/admin/remove_user.php";
	// 		header('Location: '.$newURL);
			echo "<script>window.location = '/admin/user_list.php'</script>";
		}
	}
	if (isset($_POST['delete']) == 'Delete') {
		$update = "DELETE from `users` WHERE `id`= '{$rmv_usr}'";
		$updated = mysql_query($update);
			
		if ($updated != FALSE) {
			$_SESSION['err'] = 'deleted';
			$newURL = "/admin/remove_user.php";
			// 				header('Location: '.$newURL);
			echo "<script>window.location = '/admin/user_list.php'</script>";
		}
	}