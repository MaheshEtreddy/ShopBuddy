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
	
	function addCart($q,$pr) {
	
		session_start();
		SbUtil::dbConnect();
		
		
		if (isset($_SESSION["user_id"])){
			$custID = $_SESSION["user_id"];
			
		}else{
			$_SESSION["user_id"] = '15';
			$custID = $_SESSION["user_id"];
		}
		
		$date = date('YmdHis');
		$orderID = $custID."".$q."".$date;
		
		$s = "INSERT INTO `sbdata`.`orderdetails` ( `orderNumber`,`productCode`,  `priceEach`, `customerID`) VALUES ('{$orderID}', '{$q}', '{$pr}', '{$custID}')";
		$query = mysql_query ( $s );
			
			
		if ($query) {
			$res1 = mysql_query("select * from products where productCode = '{$q}'");
	
			$result_set = mysql_fetch_array($res1);
			
			if ($result_set != FALSE) {
				
			echo "<div class='dropdown' id='cart' >
			<a class='dropdown-toggle' data-toggle='dropdown' href='#'> <i
			class='icon-shopping-cart'></i> Your Cart <b class='caret'></b></a>
			
			<div class='dropdown-menu well' role='menu''
					aria-labelledby='dLabel'>"; 
				
						echo "<p style='font-weight:bold;'> <i class='icon-shopping-cart'></i> {$result_set['productName']} &nbsp; <i class='icon-circle-arrow-right'></i> &nbsp; <span class='pull-right'> $ {$result_set['buyPrice']}</span></p>";
									
						echo "<a href='checkout.php?pcode={$result_set['productCode']}&pname={$result_set['productName']}&price={$result_set['buyPrice']}' class='btn btn-primary'>
						
						 Checkout</a>
								</div>
							</div>";
						
			}
			
		}
	}
	
	function loginAction($user,$pwd,$pcode) {
		$message ='';
		$sql = "SELECT * FROM customers WHERE customerMail = '{$user}' and password = '{$pwd}' and deletedYN=0";
		$sql1 = "SELECT * FROM employees WHERE email = '{$user}' and password = '{$pwd}'";
		
		$result = mysql_query($sql);
		$row  = mysql_fetch_array($result);
		
		$result1 = mysql_query($sql1);
		$row1  = mysql_fetch_array($result1);
		
		if(is_array($row)) {
			if ($_SESSION["user_id"] = '15') {
				mysql_query("update orderdetails set customerID = '{$row['customerID']}' where productCode = '{$pcode}' and customerID = '15' and checkout = 0");
			}
			
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
		$query = "SELECT * FROM customers where `customerMail`='{$_SESSION["email"]}'";
		$result = mysql_query ($query);
		$row = mysql_fetch_array ( $result );
		return $row;
	}
	
	function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}
	
	function getCountries() {
		$countries =array();
		$intquery = "SELECT * FROM countries";
		$query = mysql_query ( $intquery );
		while ($result = mysql_fetch_array ( $query )) {
			$countries[] = $result['countryName'];
		}
		
		return $countries;
	}
	
	function getCountry($uid) {
		$intquery = "SELECT country FROM customers where customerMail = '{$uid}'";
		$query = mysql_query ( $intquery );
		$result = mysql_fetch_row ( $query );
		return $result[0];
	}
	
}

 if(isset($_GET['q']) && $_GET['q'] != ''){
	SbUtil::addCart($_GET['q'],$_GET['pr']);
} 

?>