<?php
	session_start();
	include('conn.php');
	
	$title=$_POST['title'];
	$head=$_POST['head'];

	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$userid = $_SESSION['userid'];
	$remark = $_POST['remark'];
	$file=$_FILES['meetfile'];
	$filename=$_FILES["meetfile"]["name"];
	$filTmpename= $_FILES["meetfile"]["tmp_name"];
	$fileExt= explode(".",$filename);
	$fileAcExt= strtolower(end($fileExt));
	$newFilename= time() . "." . $fileAcExt;
	$fileDes= 'upload/'.$newFilename;
	move_uploaded_file($filTmpename,$fileDes);
	$meetfilelocation=$fileDes;
	
	
	$sql = "INSERT INTO meeting(title,head,numattend,listname,roomid,start,end,addequipment,uesrid,remark,meetfile) VALUES ('$title','$head',$numattend,'$listname',$roomid,'$start','$end','$addequipment',$userid,'$remark','$meetfilelocation')";
	mysqli_query($conn,$sql);
	
	header('location:addmeet.php');


?>