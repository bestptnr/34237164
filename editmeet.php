<?php
	include('conn.php');
	$meetid = $_GET['meetid'];
	$roomid=$_POST['roomid'];
	$title = $_POST['title'];
	$head = $_POST['head'];
	$numattend = $_POST['numattend'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$addequipment = $_POST['addequipment'];
	$remark = $_POST['remark'];
	$color = $_POST['color'];
	
	mysqli_query($conn,"update events set roomid='$roomid', title='$title',  head='$head', start='$start',end='$end',numattend='$numattend',remark='$remark',addequipment='$addequipment',color='$color' where id='$meetid'");
	// echo "update events set roomid='$roomid', title='$title',  head='$head', start='$start',end='$end',numattend='$numattend' where meetid='$meetid'";
	header('location:addmeet.php');

?>