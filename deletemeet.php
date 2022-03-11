<?php
	include('conn.php');
	$roomid=$_GET['meetid'];
	mysqli_query($conn,"delete from meeting where meetid='$roomid'");
	header('location:addmeet.php');

?>