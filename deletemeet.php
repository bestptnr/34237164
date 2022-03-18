<?php
	include('conn.php');
	$roomid=$_GET['meetid'];
	mysqli_query($conn,"delete from events where meetid='$roomid'");
	header('location:addmeet.php');

?>