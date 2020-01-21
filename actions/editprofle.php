<?php 

	if(!isset($_SESSION))
	{
		session_start();
	}

	if ($_SESSION["c_id"] == '') {
		//session_unset();
		header('location: ../index.php');
	}
	$uid = $_SESSION["c_id"];

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$category = $_POST['ctype'];
	$contact = $_POST['contactno'];
	$add1 = $_POST['adderssl1'];
	$add2 = $_POST['adderssl2'];
	$incity = $_POST['city'];
	$country = $_POST['country'];
	$province = $_POST['province'];
	$postalcode = $_POST['postalcode'];
	$pass = $_POST['conpassword'];

	//Get Data, Sql & connect Database. Add database into index.php
  	require_once("../database/connect.php");
	//first query (that you want to select)
	$query_one = "UPDATE `users_details` SET `u_fname`='$fname',`u_lname`='$lname',`u_addressl1`='$add1',`u_addressl2`='$add2',`u_city`='$incity',`u_province`='$province',`u_postalcode`='$postalcode',`u_country`='$country',`u_contactno`='$contact',`u_category`='$category' WHERE u_id = $uid;";
	//two query (that you want to select)
	$query_two = "UPDATE `users` SET `u_email`='$email',`u_password`='$pass',`status`='Active' WHERE u_id = $uid;";
	//echo "Successfull Save ..";
	if(mysqli_query($db, $query_one)){
		if(mysqli_query($db, $query_two)){
			header('location: ../includes/customer.php');
			$_SESSION["Notice"] = '5';
		}else{
			$_SESSION["Notice"] = '4';
		}
	}else{
		$_SESSION["Notice"] = '4';
	}

	//mysqli_close($db);

?>