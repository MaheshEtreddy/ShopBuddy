<?php
session_start ();
$_SESSION ['err'] = '';
unset ( $_SESSION ['err'] );
unset ( $_SESSION ['message'] );
include_once 'db.php';

if ((isset ( $_POST ['UpdatePassword'] ) != null) && isset ( $_POST ['UpdatePassword'] ) == 'UpdatePassword') {
	change_password ();
}

if ((isset ( $_POST ['UpdateProfile'] ) != null) && isset ( $_POST ['UpdateProfile'] ) == 'UpdateProfile') {
	
	change_profile ();
}
if((isset($_POST['DeleteProfile'])) != null && isset($_POST['DeleteProfile']) =='DeleteProfile'){
	$errUserExist = '';
	$olduserMail = $_POST ['userID'];
	$existingUser = "select * from customers where `customerMail` = '$olduserMail'";
	$resultUserexist = mysql_query ( $sqlPassword );
	
	if ($resultUserexist){
		$errUserExist .= 'User ID already exist!<br/>';
		$_SESSION ['err'] = 'not updated';
		$newURL = "/shopbuddy/account_settings.php";
		header ( 'Location: ' . $newURL );
	}
	
	elseif($resultUserexist == false) {
		deleteAccount();
	}
}

function change_password() {
	$oldpass = $_POST ['oldPassword'];
	$newpass = $_POST ['newPassword'];
	
	$errPassword = '';
	
	$sqlPassword = "select `password` from `customers` WHERE  `customerName`= '{$_SESSION["username"]}'";
	$arrPassword = mysql_query ( $sqlPassword );
	
	if ($arrPassword) {
		while ( $resPassword = mysql_fetch_array ( $arrPassword ) ) {
			$DBPassword = $resPassword ['password'];
		}
	}
	
	if (strcasecmp ( $oldpass, $newpass ) == 0) {
		
		$errPassword .= 'Please enter different password other than your current password!<br/>';
	} elseif (strcmp ( $oldpass, $DBPassword ) != 0) {
		$errPassword .= 'Your current password does not match our records!<br/>';
	}
	
	if (empty ( $errPassword )) {
		
		$updatePassword = "UPDATE `customers` SET `password`= '{$newpass}' WHERE  `customerName`= '{$_SESSION["username"]}'";
		$resUpdatedPass = mysql_query ( $updatePassword );
		
		if ($resUpdatedPass != FALSE) {
			$_SESSION ['err'] = 'Passwordupdated';
			$newURL = "/shopbuddy/account_settings.php";
			header ( 'Location: ' . $newURL );
		}
	} else {
		$_SESSION ['err'] = 'not updated';
		$_SESSION ['message'] = $errPassword;
		$newURL = "/shopbuddy/account_settings.php";
		header ( 'Location: ' . $newURL );
	}
}
function change_profile() {
	$olduserMail = $_POST ['userID'];
	$oldphone = $_POST ['phone'];
	$userID = $_POST ['userID'];
	$streetAddress = $_POST ['streetAddress'];
	$city = $_POST ['city'];
	$state = $_POST ['state'];
	$postalCode = $_POST ['postalCode'];
	$country = $_POST ['country'];
	$phone = $_POST ['phone'];
	$errProfile = '';
	
	$sqlUserMail = "select `customerMail` from `customers` WHERE  `customerName`= '{$_SESSION["username"]}'";
	$arrUserMail = mysql_query ( $sqlUserMail );
	
	if ($arrUserMail) {
		while ( $resPassword = mysql_fetch_array ( $arrUserMail ) ) {
			$DBMail = $resPassword ['customerMail'];
		}
	}
	
	
	if ($olduserMail == $DBMail) {
		$errProfile .= 'Please enter UserID other than your current UserID!<br/>';
	} elseif ($oldphone == $resprofile ['phone']) {
		$errProfile .= 'Please enter phone number other than your current UserID!<br/>';
	}
	
	
	
	if ( $errProfile == "" ) {
		$sqlprofile = "UPDATE customers SET	`customerMail` = '{$olduserMail}', `phone` = '{$oldphone}', `addressLine1`= '{$streetAddress}', `city`='{$city}', `state`='{$state}',`country`='{$country}'  WHERE  `customerName`= '{$_SESSION["username"]}'";
		$resprofile = mysql_query ( $sqlprofile );
		
		if ($resprofile != FALSE) {
			$_SESSION ['err'] = 'ProfileUpdated';
			$newURL = "/shopbuddy/account_settings.php";
			header ( 'Location: ' . $newURL );
		}
	} else {
		$_SESSION ['err'] = 'not updated';
		$_SESSION ['message'] = $errProfile;
		$newURL = "/shopbuddy/account_settings.php";
			header ( 'Location: ' . $newURL );
	}
}
function deleteAccount() {
	$olduserMail = $_POST ['userID'];
	$errDeleteAccount = '';
	$sqlDelete = "UPDATE `customers` SET `deletedYN` = '1' WHERE  `customerMail`= '{$olduserMail}'";
	$resDeleteAccount = mysql_query ( $sqlDelete );
	if ($resDeleteAccount != FALSE) {
		$errDeleteAccount .= 'Your account has been deleted successfully!<br/>';
		$_SESSION ['message'] = $errDeleteAccount;
		$logout_obj = new logout_page ();
		$logout_obj->logoutfunc ();
	}
}