<?php
session_start();
$_SESSION['err'] = '';

include_once '../db.php';

if (isset($_POST['submit']) == 'Update' ) {

	$oldpass = $_POST['oldPassword'];
	$newpass = $_POST['newPassword'];


	$err = '';
	
	$sql = "select `password` from `admins` WHERE  `username`= '{$_SESSION["username"]}'";
	$res = mysql_query($sql);
	
	if ($oldpass == $newpass) {
		$err .= 'Please enter different password other than your current password!<br/>';
	}
	elseif ($oldpass != $res['password']) {
		$err .= 'Your current password does not match our records!<br/>';
	}

	if ($err == '') {
		$update = "UPDATE `admins` SET `password`= '{$newpass}' WHERE  `username`= '{$_SESSION["username"]}'";
		$updated = mysql_query($update);

		if ($updated != FALSE) {
			$_SESSION['err'] = 'updated';
			$newURL = "/admin/pwd_chng.php";
			header('Location: '.$newURL);
		}
	}else {
		$_SESSION['err'] = 'not updated';
		$_SESSION['message'] = $err;
		$newURL = "/admin/pwd_chng.php";
		header('Location: '.$newURL);
	}
	}