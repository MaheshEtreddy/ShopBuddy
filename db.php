<?php


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




?>
