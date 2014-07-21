<?php 
session_start();

include_once 'header.php';

if (isset($_POST['batch_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['batches']));
	$qry_office = @mysql_query("UPDATE pages SET batches='{$batches}'");
}else if (isset($_POST['manualc_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['manualc']));
	$qry_office = @mysql_query("UPDATE pages SET manualc='{$batches}'");
}else if (isset($_POST['seleniumc_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['seleniumc']));
	$qry_office = @mysql_query("UPDATE pages SET seleniumc='{$batches}'");
}else if (isset($_POST['qtpc_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['qtpc']));
	$qry_office = @mysql_query("UPDATE pages SET qtpc='{$batches}'");
}else if (isset($_POST['training_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['training']));
	$qry_office = @mysql_query("UPDATE pages SET training='{$batches}'");
}else if (isset($_POST['contact_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['contact']));
	$qry_office = @mysql_query("UPDATE pages SET contact='{$batches}'");
}else if (isset($_POST['load_runner_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['load_runner']));
	$qry_office = @mysql_query("UPDATE pages SET load_runner='{$batches}'");
}else if (isset($_POST['mobile_testing_btn']) == 'Submit') {
	$batches = stripslashes(base64_encode($_POST['mobile_testing']));
	$qry_office = @mysql_query("UPDATE pages SET mobile_testing='{$batches}'");
}


$sel_home_txt="select * from pages";
$res_home_txt=mysql_query($sel_home_txt);
$row_home_txt=mysql_fetch_array($res_home_txt);

?>

<h2>Edit Page Content</h2>
<hr>
<div class="row ds-margin-top" style="padding-left: 50px;">
   
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs" style="font-weight: bold;">
                <li><a href="#lA" data-toggle="tab">Batches</a></li>
                <li><a href="#lB" data-toggle="tab">Manual Syllabus</a></li>
                <li><a href="#lC" data-toggle="tab">Selenium Syllabus</a></li>
                <li><a href="#lD" data-toggle="tab">qtp Syllabus</a></li>
                <li><a href="#lE" data-toggle="tab">Training</a></li>
                <li><a href="#lF" data-toggle="tab">Contact Us</a></li>
                <li><a href="#lG" data-toggle="tab">Load Runner</a></li>
                <li><a href="#lH" data-toggle="tab">Mobile Testing</a></li>
            </ul>
            <div class="tab-content" >
                <div class="tab-pane active" id="lA">
                    <form action="" method="post">
						<textarea name="batches" id="batches" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['batches']));
							?>
						</textarea>
						<br>
						<input type="submit" name="batch_btn" value="Submit">
					</form>
                </div>
                <div class="tab-pane" id="lB">
                	<form action="" method="post">
						<textarea name="manualc" id="manualc" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['manualc']));
							?>
						</textarea>
						<br>
						<input type="submit" name="manualc_btn" value="Submit">
					</form>
                </div>
                <div class="tab-pane" id="lC">
                	<form action="" method="post">
						<textarea name="seleniumc" id="seleniumc" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['seleniumc']));
							?>
						</textarea>
						<br>
						<input type="submit" name="seleniumc_btn" value="Submit">
					</form>
                </div>
                
                <div class="tab-pane" id="lD">
                	<form action="" method="post">
						<textarea name="qtpc" id="qtpc" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['qtpc']));
							?>
						</textarea>
						<br>
						<input type="submit" name="qtpc_btn" value="Submit">
					</form>
                </div>
                <div class="tab-pane" id="lE">
                	<form action="" method="post">
						<textarea name="training" id="training" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['training']));
							?>
						</textarea>
						<br>
						<input type="submit" name="training_btn" value="Submit">
					</form>
                </div>
                <div class="tab-pane" id="lF">
                	<form action="" method="post">
						<textarea name="contact" id="contact" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['contact']));
							?>
						</textarea>
						<br>
						<input type="submit" name="contact_btn" value="Submit">
					</form>
                </div>
                <div class="tab-pane" id="lG">
                    <form action="" method="post">
						<textarea name="load_runner" id="load_runner" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['load_runner']));
							?>
						</textarea>
						<br>
						<input type="submit" name="load_runner_btn" value="Submit">
					</form>
                </div>
                <div class="tab-pane" id="lH">
                    <form action="" method="post">
						<textarea name="mobile_testing" id="mobile_testing" class="editable" rows="25" cols="40">
							<?php
								echo stripslashes(base64_decode($row_home_txt['mobile_testing']));
							?>
						</textarea>
						<br>
						<input type="submit" name="mobile_testing_btn" value="Submit">
					</form>
                </div>
            </div>
            
            
        </div>
        <!-- /tabbable -->
        </div>

<hr>
<?php 
include_once 'footer.php';
?>
