<?php
	require "../common.php";
	
	if(isset($_GET['id'])){
		echo $_GET['id'];
	}else{
		echo "Something went wrong";
		exit;
	}
?>