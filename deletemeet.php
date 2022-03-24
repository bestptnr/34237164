<?php
	include('conn.php');
	$roomid=$_GET['meetid'];
	mysqli_query($conn,"delete from events where id='$roomid'");
	header('location:addmeet.php');

?>