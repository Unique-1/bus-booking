<?php
	include('../db.php');
	$roomid = @$_POST['roomid'];
	$status = @$_POST['status'];
	mysqli_query(@$db, "UPDATE customer SET status='$status' WHERE id='$roomid'");
	header("location: dashboard.php");
?>