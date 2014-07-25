?php
session_start ();
include_once 'header.php';

if (isset ( $_POST ['submit'] )) {
		
	if ( $_POST ['submit']  == 'ADD Manual Question') {
		$sql = "INSERT INTO `manual-iq` (question, answer) VALUES ('{$_POST['manual_q']}', '{$_POST['manual_ans']}')";
		$result = mysql_query ( $sql );
	} else if ($_POST ['submit'] == 'ADD Selenium Question') {
		$sql = "INSERT INTO `selenium-iq` (question, answer) VALUES ('{$_POST['selenium_q']}', '{$_POST['selenium_ans']}')";
		$result = mysql_query ( $sql );
	} else if ( $_POST ['submit'] == 'ADD Qtp Question') {
		$sql = "INSERT INTO `qtp-iq` (question, answer) VALUES ('{$_POST['qtp_q']}', '{$_POST['qtp_ans']}')";
		$result = mysql_query ( $sql );
	} else if ( $_POST ['submit'] == 'Update Manual Question') {
		$sql = mysql_query ( "update `manual-iq` set `question`= '{$_POST['manual_q']}', `answer` = '{$_POST['manual_ans']}' where id = '{$_GET['man_ed']}'" );
		$result = mysql_query ( $sql );
	} else if ($_POST ['submit'] == 'Update Selenium Question') {
		$sql = mysql_query ( "update `selenium-iq` set `question`= '{$_POST['selenium_q']}', `answer` = '{$_POST['selenium_ans']}' where id = '{$_GET['sel_ed']}'" );
		$result = mysql_query ( $sql );
	} else if ($_POST ['submit'] == 'Update Qtp Question') {
		$sql = mysql_query ( "update `qtp-iq` set `question`= '{$_POST['qtp_q']}', `answer` = '{$_POST['qtp_ans']}' where id = '{$_GET['qtp_ed']}'" );
		$result = mysql_query ( $sql );
	}
}

if (isset ( $_GET ['man_del'] )) {
	$d = "DELETE from `manual-iq` WHERE `id`= '{$_GET['man_del']}'";
	mysql_query ( $d );
} else if (isset ( $_GET ['sel_del'] )) {
	$d = "DELETE from `selenium-iq` WHERE `id`= '{$_GET['sel_del']}'";
	mysql_query ( $d );
} else if (isset ( $_GET ['qtp_del'] )) {
	$d = "DELETE from `qtp-iq` WHERE `id`= '{$_GET['qtp_del']}'";
	mysql_query ( $d );
}

$qry = mysql_query ( "select * from `manual-iq` order by id DESC" );
$qry1 = mysql_query ( "select * from `selenium-iq` order by id DESC" );
$qry2 = mysql_query ( "select * from `qtp-iq` order by id DESC" );
?>

<h2>Add Interview Questions</h2>
<hr>
<div class="row ds-margin-top" style="padding-left: 50px;">

	<div class="tabbable tabs-left">
		<ul class="nav nav-tabs" style="font-weight: bold;">

			<li><a href="#lA" data-toggle="tab">Manual Questions</a></li>
			<li><a href="#lB" data-toggle="tab">Selenium Questions</a></li>
			<li><a href="#lC" data-toggle="tab">Qtp Questions</a></li>

		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="lA">
			<?php
			
if (isset ( $_GET ['man_ed'] )) {
				$qm = mysql_query ( "select * from `manual-iq` where id= '{$_GET['man_ed']}'" );
				$res = mysql_fetch_array ( $qm );
				$question = $res ['question'];
				$answer = $res ['answer'];
				?>
				<div>
					<form method="POST" action="">
						<table>
							<tr>
								<td><label>Question: </label></td>
								<td><textarea id="manual_q" name="manual_q" rows="2" cols="150"
										placeholder="Add a question here.." required="required"
										autofocus="autofocus" wrap="soft"><?php echo $question; ?>
					  </textarea></td>
								<td rowspan="2"><input type="submit"
									name="submit" class="styled-button-3"
									value="Update Manual Question"></td>
							</tr>
							<tr>
								<td><label>Answer: </label></td>
								<td><textarea id="manual_ans" name="manual_ans" rows="2"
										cols="150" placeholder="Answer.." required="required"
										wrap="soft"><?php echo $answer; ?>
					  </textarea></td>
							</tr>
						</table>
					</form>
				</div>
				<?php }else{?>
				<div>
					<form method="POST" action="">
						<table>
							<tr>
								<td><label>Question: </label></td>
								<td><textarea id="manual_q" name="manual_q" rows="2" cols="150"
										placeholder="Add a question here.." required="required"
										autofocus="autofocus" wrap="soft">
					  </textarea></td>
								<td rowspan="2"><input type="submit"
									name="submit" class="styled-button-3"
									value="ADD Manual Question"></td>
							</tr>
							<tr>
								<td><label>Answer: </label></td>
								<td><textarea id="manual_ans" name="manual_ans" rows="2"
										cols="150" placeholder="Answer.." required="required"
										wrap="soft">
					  </textarea></td>
							</tr>
						</table>
					</form>
				</div><?php }?>
				<div>
					<h4>Manual Question and Answers</h4>
					<table class="table well">
						<thead>
							<tr>
								<th>#</th>
								<th>Question</th>
								<th>Answer</th>
								<th><i class="icon-pencil icon-black"></i> Edit</th>
								<th><i class="icon-remove-sign icon-black"></i> Delete</th>
							</tr>
						</thead>
						<tbody>
    <?php
				$count = 1;
				while ( $get_data = mysql_fetch_array ( $qry ) ) {
					echo "<tr>
				<td>{$count}</td>
	       		<td>{$get_data['question']}</td>
	        	<td>{$get_data['answer']}</td>
	        	<td><a href='?man_ed={$get_data['id']}'><img src='img/buttonUpdate.png'></a></td>
				<td><a href='?man_del={$get_data['id']}'><img src='img/erase.png'></a></td>
				</tr>";
					$count = $count + 1;
				}
				
				?>
    
    </tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane" id="lB">
				<?php
				
if (isset ( $_GET ['sel_ed'] )) {
					$qs = mysql_query ( "select * from `selenium-iq` where id= '{$_GET['sel_ed']}'" );
					$res = mysql_fetch_array ( $qs );
					$question = $res ['question'];
					$answer = $res ['answer'];
					?>
				<div>
					<form method="POST" action="">
						<table>
							<tr>
								<td><label>Question: </label></td>
								<td><textarea id="selenium_q" name="selenium_q" rows="2" cols="150" placeholder="Add a question here.."
										required="required" autofocus="autofocus" wrap="soft"><?php echo $question;?>
					  </textarea></td>
								<td rowspan="2"><input type="submit"
									name="submit" class="styled-button-3"
									value="Update Selenium Question"></td>
							</tr>
							<tr>
								<td><label>Answer: </label></td>
								<td><textarea id="selenium_ans" name="selenium_ans" rows="2"
										cols="150" placeholder="Answer.." required="required"
										wrap="soft"><?php echo $answer;?>
					  </textarea></td>
							</tr>
						</table>
					</form>
				</div>
				<?php }else{?>
				
				<div>
					<form method="POST" action="">
						<table>
							<tr>
								<td><label>Question: </label></td>
								<td><textarea id="selenium_q" name="selenium_q" rows="2" cols="150" placeholder="Add a question here.."
										required="required" autofocus="autofocus" wrap="soft">
					  </textarea></td>
								<td rowspan="2"><input type="submit"
									name="submit" class="styled-button-3"
									value="ADD Selenium Question"></td>
							</tr>
							<tr>
								<td><label>Answer: </label></td>
								<td><textarea id="selenium_ans" name="selenium_ans" rows="2"
										cols="150" placeholder="Answer.." required="required"
										wrap="soft">
					  </textarea></td>
							</tr>
						</table>
					</form>
				</div><?php }?>
				<div>
					<h4>Selenium Question and Answers</h4>
					<table class="table well">
						<thead>
							<tr>
								<th>#</th>
								<th>Question</th>
								<th>Answer</th>
								<th><i class="icon-pencil icon-black"></i> Edit</th>
								<th><i class="icon-remove-sign icon-black"></i> Delete</th>
							</tr>
						</thead>
						<tbody>
    <?php
				$count = 1;
				while ( $get_data = mysql_fetch_array ( $qry1 ) ) {
					echo "<tr>
				<td>{$count}</td>
	       		<td>{$get_data['question']}</td>
	        	<td>{$get_data['answer']}</td>
	        	<td><a href='?sel_ed={$get_data['id']}'><img src='img/buttonUpdate.png'></a></td>
				<td><a href='?sel_del={$get_data['id']}'><img src='img/erase.png'></a></td>
				</tr>";
					$count = $count + 1;
				}
				
				?>
    
    </tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane" id="lC">
			<?php
			
if (isset ( $_GET ['qtp_ed'] )) {
				$qq = mysql_query ( "select * from `qtp-iq` where id= '{$_GET['qtp_ed']}'" );
				$res = mysql_fetch_array ( $qq );
				$question = $res ['question'];
				$answer = $res ['answer'];
				?>
				<div>
					<form method="POST" action="">
						<table>
							<tr>
								<td><label>Question: </label></td>
								<td><textarea id="qtp_q" name="qtp_q" rows="2" cols="150"
										placeholder="Add a question here.." required="required"
										autofocus="autofocus" wrap="soft"><?php echo $question;?>
					  </textarea></td>
								<td rowspan="2"><input type="submit"
									name="submit" class="styled-button-3"
									value="Update Qtp Question"></td>
							</tr>
							<tr>
								<td><label>Answer: </label></td>
								<td><textarea id="qtp_ans" name="qtp_ans" rows="2" cols="150"
										placeholder="Answer.." required="required" wrap="soft"><?php echo $answer;?>
					  </textarea></td>
							</tr>
						</table>
					</form>
				</div>
				<?php }else {?>
				<div>
					<form method="POST" action="">
						<table>
							<tr>
								<td><label>Question: </label></td>
								<td><textarea id="qtp_q" name="qtp_q" rows="2" cols="150"
										placeholder="Add a question here.." required="required"
										autofocus="autofocus" wrap="soft">
					  </textarea></td>
								<td rowspan="2"><input type="submit"
									name="submit" class="styled-button-3" value="ADD Qtp Question"></td>
							</tr>
							<tr>
								<td><label>Answer: </label></td>
								<td><textarea id="qtp_ans" name="qtp_ans" rows="2" cols="150"
										placeholder="Answer.." required="required" wrap="soft">
					  </textarea></td>
							</tr>
						</table>
					</form>
				</div><?php }?>
				<div>
					<h4>QTP Question and Answers</h4>
					<table class="table well">
						<thead>
							<tr>
								<th>#</th>
								<th>Question</th>
								<th>Answer</th>
								<th><i class="icon-pencil icon-black"></i> Edit</th>
								<th><i class="icon-remove-sign icon-black"></i> Delete</th>
							</tr>
						</thead>
						<tbody>
    <?php
				$count = 1;
				while ( $get_data = mysql_fetch_array ( $qry2 ) ) {
					echo "<tr>
				<td>{$count}</td>
	       		<td>{$get_data['question']}</td>
	        	<td>{$get_data['answer']}</td>
	        	<td><a href='?qtp_ed={$get_data['id']}'><img src='img/buttonUpdate.png'></a></td>
				<td><a href='?qtp_del={$get_data['id']}'><img src='img/erase.png'></a></td>
				</tr>";
		$count = $count +1;
	}

	
	?>
    
    </tbody>
					</table>
				</div>
			</div>

		</div>


	</div>
	<!-- /tabbable -->
</div>

<hr>
<?php 
include_once 'footer.php';
?>
