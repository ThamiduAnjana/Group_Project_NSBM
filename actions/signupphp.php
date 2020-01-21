<?php 

	if(!isset($_SESSION))
	{
		session_start();
	}

	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$ctype = $_POST['ctype'];
	$add1 = $_POST['AddressL1'];
	$add2 = $_POST['AddressL2'];
	$email = $_POST['Email'];
	$contact = $_POST['ContactNo'];
	$incity = $_POST['inputCity'];
	$province = $_POST['inputProvince'];
	$postalcode = $_POST['inputPostalCode'];
	$country = $_POST['Country'];
	$rpass = $_POST['Password'];
	$pass = $_POST['ConPassword'];
	$uid = 0;

	if($fname != '' && $lname != '' && $ctype != '' && $add1 != '' && $add2 != '' && $email != '' && $contact != '' && $incity != '' && $province != '' && $postalcode != '' && $country != '' && $rpass != '' && $pass != ''){

		if($rpass == $pass){

			//Get Data, Sql & connect Database. Add database into index.php
		  	require_once("../database/connect.php");
			//$db = new mysqli("localhost","root","","group_pro_20");
			//first query (that you want to select)
			$query_one = "SELECT u_id FROM users_details ORDER BY u_id DESC LIMIT 1;";
			//query execute
			$result = mysqli_query($db, $query_one);  
			//Add while loop for first column data display and after display next column
			while ($row = mysqli_fetch_array($result)) {
				$uid = $row['u_id'] + 1;
			}
			//two query (that you want to select)
			$query_two = "INSERT INTO `users_details`(`u_id`, `u_fname`, `u_lname`, `u_addressl1`, `u_addressl2`, `u_city`, `u_province`, `u_postalcode`, `u_country`, `u_contactno`,`u_category`) VALUES ('$uid','$fname','$lname','$add1','$add2','$incity','$province','$postalcode','$country','$contact','$ctype');";
			//query execute
			//mysqli_query($db, $query_two);
			//three query (that you want to select)
			$query_three = "INSERT INTO `users`(`u_id`, `u_email`, `u_password`, `status`) VALUES ('$uid','$email','$pass','Active');";
			//query execute
			//mysqli_query($db, $query_three);

			//echo "Successfull Save ..";
			if(mysqli_query($db, $query_two)){
				if(mysqli_query($db, $query_three)){
					header('location: ../index.php');
				}
			}

			mysqli_close($db);
			
		}else{
			$_SESSION["Notice"] = '4';
			header('location: ../index.php');
		}

	}else{
		$_SESSION["Notice"] = '4';
		header('location: ../index.php');
	}

	

?>