<?php
session_start();
require_once '../SbUtil.php';

SbUtil::dbConnect();

if(!isset($_SESSION["email"]) || strstr($_SESSION["email"], "@") != '@classicmodelcars.com'){
	header("Location: http://localhost/shopbuddy/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SuperAdmin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/vendor/jquery-1.8.3.min.js"></script>
  
  <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript"> 

tinymce.init({
    selector: "textarea.editable",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});

/* function saveChanges(object){   
    $.ajax({
        url: 'save.php',
        data: 'content=' + object.value,
        cache: false,
        error: function(e){
            alert(e);
        },
        success: function(response){
            // A response to say if it's updated or not
            alert(response);
        }
    });   
}  */

</script>

<style type="text/css">
.bga {
    background: url(img/car_garage.jpg);
    background-size: 100% 100%;
    background-repeat: repeat-x;
 	opacity: 0.6; 
    filter: alpha(opacity=50); 
  
    
}
textarea{
width: 500px !important;
}

</style>
</head>
<body>
<div>
<div class="navbar navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand">SuperAdmin</span>

                <div class="nav-collapse collapse">

                    <ul class="nav">
                        <li><a href="index.php"><i class="icon-home icon-black"></i> Dashboard</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                               class="icon-user icon-black"></i>
                                Users <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="user_list.php">Users List</a></li>
                              
                               
                            </ul>
                        </li>
                        <li><a href="admin_orderdetails.php"><i class="icon-pencil icon-black"></i>Order Details</a></li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                               class="icon-user icon-black"></i>
                                Catalog <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="category.php">Manage Categories</a></li>
                                <li><a href="product.php">Manage Products</a></li>
                               
                            </ul>
                        </li>
					
                    </ul>

                    <!-- <ul class="nav pull-right settings">
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">System Settings</a></li>
                            </ul>
                        </li>
                    </ul> -->
                    
                    <ul class="nav pull-right settings">
                        <li><a href="#" class="dropdown-toggle tip icon logout" data-original-title="Settings"
                               data-placement="bottom" data-toggle="dropdown"><i class="icon-large icon-cog"></i></a>
                               <ul class="dropdown-menu">
                            <li><a href="pwd_chng.php">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="../logout.php">Log Out</a></li>
                        </ul>
                               </li>
                        <li class="divider-vertical"></li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <p class="navbar-text pull-right">
                        Welcome <strong>Admin</strong>
                    </p>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                   

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>
</div>