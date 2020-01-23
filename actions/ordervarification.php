<?php 

$pid = $_POST['pid'];
$date = date("Y/m/d");
//echo $pid;

//Get Data, Sql & connect Database. Add database into index.php
require_once("../database/connect.php");

//first query (that you want to select)
$query = "UPDATE `perchase_history` SET  `verification` = 'Ok', `d_date`= '$date' WHERE p_id = $pid;";

//echo "Successfull Save ..";
if(mysqli_query($db, $query)){
	header('location: ../includes/customer.php');
}else{
	header('location: ../includes/customer.php');
	$_SESSION["Notice"] = '4';
}

?>