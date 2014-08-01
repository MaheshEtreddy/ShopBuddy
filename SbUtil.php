<?php 
class SbUtil{

	function dbConnect() {
		
		try {
		
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			
			mysql_select_db("sbdata", $con); 
			
		} catch (Exception $e) {
			echo $e;
		}
	}
	
	function loginAction($user,$pwd) {
		$message ='';
		$sql = "SELECT * FROM customers WHERE customerMail = '{$user}' and password = '{$pwd}' and deletedYN=0";
		$sql1 = "SELECT * FROM employees WHERE email = '{$user}' and password = '{$pwd}'";
		
		$result = mysql_query($sql);
		$row  = mysql_fetch_array($result);
		
		$result1 = mysql_query($sql1);
		$row1  = mysql_fetch_array($result1);
		
		if(is_array($row)) {
			$_SESSION["user_id"] = $row['customerID'];
			$_SESSION["username"] = $row['customerName'];
			$_SESSION["email"] = $row['customerMail'];
			$message = "Login Successful!";
		}elseif (is_array($row1)) {
			$_SESSION["user_id"] = $row1['employeeNumber'];
			$_SESSION["username"] = $row1['firstName'];
			$_SESSION["email"] = $row1['email'];
			$message = "Login Successful!";
		}else {
			$message = "Invalid Username or Password!";
		}
		return $message;
	}
	
	function userCheck($email) {
		SbUtil::dbConnect();
		$query = "SELECT * FROM customers where `customerMail`='{$_SESSION["email"]}'";
		$result = mysql_query ($query);
		/* while ( $row = mysql_fetch_array ( $result ) ) {
			$userCheck['userMail'] = $row ["customerMail"];
			$streetAddress = $row ["addressLine1"];
			$userCity = $row ["city"];
			$userState = $row ["state"];
			$userPostalCode = $row ["postalCode"];
			$userCountry = $row ["country"];
			$userPhone = $row ["phone"];
		} */
		
		$row = mysql_fetch_array ( $result );
		if ($row != false) {
			return $row;
		}
		else {
			return 'No data';
		}
	}
	
}

?>