<?php
session_start();
if(isset($_POST['UserName']))
{
	$_SESSION["Name"] = $_POST['UserName'];
}
if(isset($_SESSION["Name"])) {
	echo json_encode(['success'=>true, 'msg'=>'Logged in successfully']);
}
?>