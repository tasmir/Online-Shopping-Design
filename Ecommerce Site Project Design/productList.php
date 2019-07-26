<?php
if (isset($_GET['pid']) && isset($_GET['uid'])) {
	$pid = $_GET['pid'];
	$uid = $_GET['uid'];
	echo $pid."<br>";
	echo $uid;
}
?>