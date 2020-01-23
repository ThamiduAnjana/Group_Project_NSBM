<?php 

	if(!isset($_SESSION)){
		session_start();
	}
	if ($_SESSION["c_id"] == '') {
		header('location: ../index.php');
		$_SESSION["Notice"]= '2';
	}

	$uid = $_SESSION["c_id"];

	$checkAcc = 0;
	//Get Data, Sql & connect Database. Add database
  	require_once("../database/connect.php");
	//first query (that you want to select)
	$query_one = "SELECT * FROM `account_details` WHERE u_id = $uid";
	//query execute
	$result = mysqli_query($db, $query_one);

	//Add while loop for first column data display and after display next column
	while ($row = mysqli_fetch_array($result)) {
		$checkAcc = 1;
	}

	if($checkAcc == 1){
		$itemcode = $_POST['itcode'];
		$qty = $_POST['qty'];
		$date = date("Y/m/d");

		//two query (that you want to select)
		$query_two = "SELECT `u_id`,`it_name`, `it_price`, `it_upprice`,`it_qty`,`it_rating`,`it_sold` FROM `items_details` WHERE it_code = $itemcode;";
		//query execute
		$result = mysqli_query($db, $query_two);  
		//Add while loop for first column data display and after display next column
		while ($row = mysqli_fetch_array($result)) {
			$usid = $row['u_id'];
			$itname = $row['it_name'];
			$itqty = $row['it_qty'];
			$itsold = $row['it_sold'];
			$itrate = $row['it_rating'];
			if(isset($row['it_price']) && !isset($row['it_upprice'])){
				$price = $row['it_price'];
			}elseif(!isset($row['it_price']) && isset($row['it_upprice'])){
				$price = $row['it_upprice'];
			}elseif(isset($row['it_price']) && isset($row['it_upprice'])){
				$price = $row['it_upprice'];
			}
		}
		//Reduce item quntity
		$itqty -= $qty;
		//add item slod
		$itsold += $qty;
		//add item rating
		if($itrate <= 100){
			$itrate += 1;
		}

		//three query (that you want to Update)
		$query_three = "UPDATE `items_details` SET `it_qty`= $itqty, `it_rating` = $itrate, `it_sold`= $itsold WHERE it_code = $itemcode;";
		//query execute
		mysqli_query($db, $query_three);

		if($qty > 1){
			$price = $price * $qty;
		}
		//four query (that you want to insert)
		$query_four = "INSERT INTO `perchase_history`(`it_code`, `it_name`, `it_qty`, `it_amount`, `it_date`, `u_id`,`seller_id`) VALUES ($itemcode,'$itname',$qty,$price,'$date',$uid,'$usid')";
		//query execute
		mysqli_query($db, $query_four);

		header('location: ../index.php');
		$_SESSION["Notice"]= '1';

	}else{
		header('location: ../includes/customer.php');
		$_SESSION["Notice"]= '3';
	}

?>