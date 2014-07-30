<?php
session_start();
$_SESSION['err'] = '';

include_once '../db.php';

function change_password(){
	
	$oldpass = $_POST['oldPassword'];
	$newpass = $_POST['newPassword'];
	
	
	$errPassword = '';
	
	$sqlPassword = "select `password` from `customers` WHERE  `customerName`= '{$_SESSION["username"]}'";
	$resPassword = mysql_query($sqlPassword);
	
	if ($oldpass == $newpass) {
		$errPassword .= 'Please enter different password other than your current password!<br/>';
	}
	elseif ($oldpass != $resPassword['password']) {
		$errPassword .= 'Your current password does not match our records!<br/>';
	}
	
	if ($err == '') {
		$updatePassword = "UPDATE `customers` SET `password`= '{$newpass}' WHERE  `customerName`= '{$_SESSION["username"]}'";
		$resUpdatedPass = mysql_query($updatePassword);
	
		if ($resUpdatedPass != FALSE) {
			$_SESSION['err'] = 'Passwordupdated';
			$newURL = "/admin/account_settings.php";
			header('Location: '.$newURL);
		}
	}else {
		$_SESSION['err'] = 'not updated';
		$_SESSION['message'] = $errPassword;
		$newURL = "/admin/account_settings.php";
		header('Location: '.$newURL);
	
}
}


function change_profile(){
	
	$olduserMail = $_POST['userID'];
	$oldphone = $_POST['phone'];
	
	
	$errProfile = '';
	
	$sqlprofile = "select `customerMail`, `phone` from `customers` WHERE  `customerName`= '{$_SESSION["username"]}'";
	$resprofile = mysql_query($sqlprofile);
	
	
	if ($olduserMail == $resprofile['customerMail']) {
		$errProfile .= 'Please enter UserID other than your current UserID!<br/>';
	}
	elseif ($oldphone == $resprofile['phone']) {
		$errPassword .= 'Please enter phone number other than your current UserID!<br/>';
	}
	
	if ($err == '') {
		$updatePassword = "UPDATE `customers` SET `password`= '{$newpass}' WHERE  `customerName`= '{$_SESSION["username"]}'";
		$resUpdatedPass = mysql_query($updatePassword);
	
		if ($resUpdatedPass != FALSE) {
			$_SESSION['err'] = 'Passwordupdated';
			$newURL = "/admin/account_settings.php";
			header('Location: '.$newURL);
		}
	}else {
		$_SESSION['err'] = 'not updated';
		$_SESSION['message'] = $errPassword;
		$newURL = "/admin/account_settings.php";
		header('Location: '.$newURL);
	
	}
	
	
	
	
}

if ((isset($_POST['submit'])!= null) && isset($_POST['submit']) == 'UpdatePassword' ) {

	change_password();
	
	}
	
	if ((isset($_POST['submit'])!= null) && isset($_POST['submit']) == 'UpdateProfile' ) {
	
		
	
	}
	