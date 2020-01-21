<?php 
	
	session_start();

	$email = $_POST['InputEmail'];
	$pass = $_POST['InputPassword'];

	//Get Data, Sql & connect Database. Add database
  	require_once("../database/connect.php");
  	//$db = new mysqli("localhost","root","","group_pro_20"); 
	//first query (that you want to select)
	$query_one = "SELECT u_id,u_password FROM users WHERE u_email = '$email';";
	//query execute
	$result = mysqli_query($db, $query_one);  
	//Add while loop for first column data display and after display next column
	while ($row = mysqli_fetch_array($result)) {
		//data

		if (mysqli_num_rows($result) == 1) {
			if($row['u_password'] == $pass){
				//header('location: customer.php');
				header('location: ../includes/customer.php');
				$_SESSION["c_id"]= $row['u_id'];
			}else{
				header('location: ../index.php');
				$_SESSION["Notice"] = '4';
			}
		}else{
			header('location: ../index.php');
			$_SESSION["Notice"] = '4';
		}
	}
	
	if(!isset($_SESSION["c_id"])){
		header('location: ../index.php');
		$_SESSION["Notice"] = '4';
	}
	
?>