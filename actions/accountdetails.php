<?php 

	if(!isset($_SESSION))
	{
		session_start();
	}

	$uid = $_SESSION["c_id"];

	$paymethod = $_POST['inlineRadioOptions'];
	$bname = $_POST['inputBankName'];
	$accountno = $_POST['inputAccountNo'];
	$cardno = $_POST['inputCardNo'];
	$securityno = $_POST['inputSecurityNo'];
	$EDate = $_POST['inputEDate'];

	//Get Data, Sql & connect Database. Add database into index.php
  	require_once("../database/connect.php");

  	if(isset($_POST['btn_save'])){
  		//first query (that you want to select)
		$query_one = "INSERT INTO `account_details`(`u_id`, `pay_method`, `bank_name`, `account_no`, `card_no`, `security_code`, `expiration`) VALUES ($uid,'$paymethod','$bname','$accountno','$cardno','$securityno','$EDate');";
		//query execute
		//echo "Successfull Save ..";
		if(mysqli_query($db, $query_one)){
			//echo "<script>alert('Save Successfull..');</script>";
			header('location: ../includes/customer.php');
		}else{
			$_SESSION["Notice"] = '4';
		}
  	}
	

	if(isset($_POST['btn_update'])){
		//first query (that you want to select)
		$query_one = "UPDATE `account_details` SET `pay_method`='$paymethod',`bank_name`='$bname',`account_no`='$accountno',`card_no`='$cardno',`security_code`='$securityno',`expiration`='$EDate' WHERE u_id = $uid;";
		//query execute
		//echo "Successfull Save ..";
		if(mysqli_query($db, $query_one)){
			//echo "<script>alert('Save Successfull..');</script>";
			header('location: ../includes/customer.php');
		}else{
			$_SESSION["Notice"] = '4';
		}
	}

	mysqli_close($db);

?>