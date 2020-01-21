<?php 

	if(!isset($_SESSION))
	{
		session_start();
	}

	$uname = $_POST['name'];
	$uemail = $_POST['email'];
 
  	//Get Data, Sql & connect Database. Add database into index.php
  	require_once("../database/connect.php");
	//first query (that you want to select)
	$query_one = "INSERT INTO `subscribers_details`(`name`, `email`) VALUES ('$uname','$uemail');";
	//query execute
	//echo "Successfull Save ..";
	if(mysqli_query($db, $query_one)){
		if($_SESSION["c_id"] != ''){
			header('location: ../includes/customer.php');
			$_SESSION["Notice"] = '6';
		}else{
			header('location: ../index.php');
			$_SESSION["Notice"] = '6';
		}
	}

	mysqli_close($db);

?>