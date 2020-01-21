<?php 	

	if(!isset($_SESSION))
	{
		session_start();

	}
		$uid = $_SESSION["c_id"];


	//Get Data, Sql & connect Database. Add database into index.php
  	require_once("../database/connect.php");

  		//image 1
		$imgname1 = $_POST['imgname1'];
		$imgfname1 = $_FILES['imgfname1'];

		$fname1 = $imgfname1['name'];
		$ferror1 = $imgfname1['error'];
		$ftmp1 = $imgfname1['tmp_name'];

		$fext1 = explode('.', $fname1);
		$fcheck1 = strtolower(end($fext1));

		//image 2
		$imgname2 = $_POST['imgname2'];
		$imgfname2 = $_FILES['imgfname2'];

		$fname2 = $imgfname2['name'];
		$ferror2 = $imgfname2['error'];
		$ftmp2 = $imgfname2['tmp_name'];

		$fext2 = explode('.', $fname2);
		$fcheck2 = strtolower(end($fext2));

		//image 3
		$imgname3 = $_POST['imgname3'];
		$imgfname3 = $_FILES['imgfname3'];

		$fname3 = $imgfname3['name'];
		$ferror3 = $imgfname3['error'];
		$ftmp3 = $imgfname3['tmp_name'];

		$fext3 = explode('.', $fname3);
		$fcheck3 = strtolower(end($fext3));

		//image 4
		$imgname4 = $_POST['imgname4'];
		$imgfname4 = $_FILES['imgfname4'];

		$fname4 = $imgfname4['name'];
		$ferror4 = $imgfname4['error'];
		$ftmp4 = $imgfname4['tmp_name'];

		$fext4 = explode('.', $fname4);
		$fcheck4 = strtolower(end($fext4));

		$fileextstored =array('png', 'jpg','jpeg');

		//$id = $_POST['serachid'];
		$itcode = $_POST['itemcode'];
		$itname = $_POST['itemname'];
		$itcolor = $_POST['itemcolor'];
		$itqty = $_POST['itemqty'];
		$itprice = $_POST['itemprice'];
		$itupprice = $_POST['itemupprice'];
		$itdes = $_POST['itemdes'];
		$itcat = $_POST['itemcategory'];

		if(isset($imgname1) && isset($imgfname1)){
			$img1 = $uid.$imgname1.'.'.$fcheck1;
		}else{
			$img1 = $imgname1.'.'.$fcheck1;
		}
		if(isset($imgname2) && isset($imgfname2)){
			$img2 = $uid.$imgname2.'.'.$fcheck2;
		}else{
			$img2 = $imgname2.'.'.$fcheck2;
		}
		if(isset($imgname3) && isset($imgfname3)){
			$img3 = $uid.$imgname3.'.'.$fcheck3;
		}else{
			$img3 = $imgname3.'.'.$fcheck3;
		}
		if(isset($imgname4) && isset($imgfname4)){
			$img4 = $uid.$imgname4.'.'.$fcheck4;
		}else{
			$img4 = $imgname4.'.'.$fcheck4;
		}


		//$img2 = $uid.$imgname2.'.'.$fcheck2;
		//$img3 = $uid.$imgname3.'.'.$fcheck3;
		//$img4 = $uid.$imgname4.'.'.$fcheck4;

	//Insert Data
	if(isset($_POST['btn_insert'])){
		
		//insert image in to uploads folder		
		if(in_array($fcheck1, $fileextstored)){
			$destinationfile1 = '../uploads/'.$uid.$imgname1.'.'.$fcheck1;
			// $destinationfile1 = 'uploads/'.$img1;
			move_uploaded_file($ftmp1, $destinationfile1);
		}

		//insert image in to uploads folder
		if(in_array($fcheck2, $fileextstored)){
			$destinationfile2 = '../uploads/'.$uid.$imgname2.'.'.$fcheck2;
			// $destinationfile2 = 'uploads/'.$img2;
			move_uploaded_file($ftmp2, $destinationfile2);
		}

		
		//insert image in to uploads folder
		if(in_array($fcheck3, $fileextstored)){
			$destinationfile3 = '../uploads/'.$uid.$imgname3.'.'.$fcheck3;
			// $destinationfile3 = 'uploads/'.$img3;
			move_uploaded_file($ftmp3, $destinationfile3);
		}

		
		//insert image in to uploads folder
		if(in_array($fcheck4, $fileextstored)){
			$destinationfile4 = '../uploads/'.$uid.$imgname4.'.'.$fcheck4;
			// $destinationfile4 = 'uploads/'.$img4;
			move_uploaded_file($ftmp4, $destinationfile4);
		}

		//insert data in to database


		//One query (that you want to select)
		$query_one = "INSERT INTO `items_details`(`it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_category`, `u_id`)  VALUES ($itcode,'$itname','$itqty','$itprice','$itupprice','$itcolor','$img1','$img2','$img3','$img4','$itdes','$itcat',$uid);";

		if(mysqli_query($db, $query_one)){
			header('location: ../includes/customer.php');
		}else{
			$_SESSION["Notice"] = '4';
		}

		//mysqli_close($db);
	}
	
	//Update Data
	if(isset($_POST['btn_update'])){

		//insert image in to uploads folder		
		if(in_array($fcheck1, $fileextstored)){
			$destinationfile1 = '../uploads/'.$uid.$imgname1.'.'.$fcheck1;
			// $destinationfile1 = 'uploads/'.$img1;
			move_uploaded_file($ftmp1, $destinationfile1);
		}

		//insert image in to uploads folder
		if(in_array($fcheck2, $fileextstored)){
			$destinationfile2 = '../uploads/'.$uid.$imgname2.'.'.$fcheck2;
			// $destinationfile2 = 'uploads/'.$img2;
			move_uploaded_file($ftmp2, $destinationfile2);
		}

		
		//insert image in to uploads folder
		if(in_array($fcheck3, $fileextstored)){
			$destinationfile3 = '../uploads/'.$uid.$imgname3.'.'.$fcheck3;
			// $destinationfile3 = 'uploads/'.$img3;
			move_uploaded_file($ftmp3, $destinationfile3);
		}

		
		//insert image in to uploads folder
		if(in_array($fcheck4, $fileextstored)){
			$destinationfile4 = '../uploads/'.$uid.$imgname4.'.'.$fcheck4;
			// $destinationfile4 = 'uploads/'.$img4;
			move_uploaded_file($ftmp4, $destinationfile4);
		}

		//Update data in to database
		//One query (that you want to select)
		$query_one = "UPDATE `items_details` SET `it_name` = '$itname', `it_qty` = $itqty, `it_price` = $itprice, `it_upprice` = $itupprice, `it_color` = '$itcolor', `it_img1` = '$img1', `it_img2` = '$img2', `it_img3` = '$img3', `it_img4` = '$img4', `it_description` = '$itdes',`it_category` = '$itcat',`u_id` = $uid WHERE it_code = $itcode;";

		if(mysqli_query($db, $query_one)){
			header('location: ../includes/customer.php');
		}else{
			$_SESSION["Notice"] = '4';
		}
	}

	// Delete Data
	if(isset($_POST['btn_delete'])){

		//Delete data in to database
		//One query (that you want to select)
		$query_one = "DELETE FROM `items_details` WHERE it_code = $itcode;";

		if(mysqli_query($db, $query_one)){
			header('location: ../includes/customer.php');
		}else{
			$_SESSION["Notice"] = '4';
		}
	}

?>