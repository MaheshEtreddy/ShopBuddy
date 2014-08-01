<?php

class logout_page{

function logoutfunc(){ 
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);
session_destroy();
header("Location:index.php");
}
}

logout_page::logoutfunc();

?>