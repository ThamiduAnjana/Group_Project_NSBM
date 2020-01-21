<!-- session -->
<?php 
	//session_start();

	if(!isset($_SESSION))
	{
		session_start();
	}

	if ($_SESSION["c_id"] == '') {
		//session_unset();
		header('location: ../index.php');
	}
	$uid = $_SESSION["c_id"];
?>
<!-- Connect Databasse -->
<?php require_once("../database/connect.php"); ?>

<!-- import the header (Navigation bar) in to index (HOME) page -->
<?php include 'headerLog.php' ?>
<?php 

	if(isset($_SESSION["Notice"])){
		if($_SESSION["Notice"] == '3' && isset($_SESSION["c_id"])){
		    ?>
		      <div class="alert alert-warning alert-dismissible fade show" role="alert">
		        <strong>Please add your account details..!</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		    <?php
		    unset( $_SESSION["Notice"]);
	  	}elseif($_SESSION["Notice"] == '4' && isset($_SESSION["c_id"])){
		    ?>
		      <div class="alert alert-warning alert-dismissible fade show" role="alert">
		        <strong>Please Try Again..!</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		    <?php
		    unset( $_SESSION["Notice"]);
	  	}elseif($_SESSION["Notice"] == '5' && isset($_SESSION["c_id"])){
		    ?>
		      <div class="alert alert-warning alert-dismissible fade show" role="alert">
		        <strong>Update Successful..!</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		    <?php
		    unset( $_SESSION["Notice"]);
	  	}elseif($_SESSION["Notice"] == '6' && isset($_SESSION["c_id"])){
		    ?>
		      <div class="alert alert-warning alert-dismissible fade show" role="alert">
		        <strong>Thank you. Subscribed..!</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		    <?php
		    unset( $_SESSION["Notice"]);
	  	}
  	}
?>

<!-- index page (HOME Page) Body START -->
<!-- Container Start -->
<br>
<div class="container">
  	<div class="row">
	  <div class="col-9">
	    <div class="tab-content" id="v-pills-tabContent">

	      <!--First tab Start -->
	      <div class="tab-pane fade show active" id="v-pills-MyProfile" role="tabpanel" aria-labelledby="v-pills-MyProfile-tab">
	      	<ol class="breadcrumb">
            	<li class="breadcrumb-item active" aria-current="page">My Profile</li>
        	</ol>
        	<!--My Profile Start-->
        	<?php 
				$query_one = "SELECT * FROM users_details WHERE u_id = ".$_SESSION["c_id"].";";
				//query execute
				$result = mysqli_query($db, $query_one);  
				//Add while loop for first column data display and after display next column
				while($row = mysqli_fetch_array($result)){
					//get data in data table
			?>
        	<table class="table">
			  <thead>
			    <tr>
			      <!-- user image -->
			      <th scope="col" colspan="2"><img src="../images/PPMale.png" width="120px" height="100px"></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">ID/Name</th>
			      <td>
			      	<!-- display the user ID/Name -->
			      	<?php 
			      		echo $row['u_id']." ".$row['u_fname']." ".$row['u_lname'];
			      	?>			      	
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">Address</th>
			      <td>
			      	<?php 
			      		echo $row['u_addressl1']." ".$row['u_addressl2']; 
			      	?>	
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">Contact No</th>
			      <td>
			      	<?php 
			      		echo $row['u_contactno']; 
			      	?>	
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" colspan="2">
			      	<?php } ?>
			      </th>
			    </tr>
			  </tbody>
			</table>
        	<!--My Profile End-->
	      </div>
	      <!--First tab End-->

	      <!--Second tab Start-->
	      <div class="tab-pane fade" id="v-pills-EditProfile" role="tabpanel" aria-labelledby="v-pills-EditProfile-tab">
	      	<ol class="breadcrumb">
            	<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
        	</ol>
	      	<!-- Edit Profile Start -->
	      	<form method="POST" name="EditPro" action="../actions/editprofle.php">
			  <div class="form-row">
			  	<div class="form-group col-md-6">
			      <label for="inputFName">First Name</label>
			      <input type="text" name="fname" class="form-control" id="inputFName" placeholder="Enter your First Name">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputLName">Last Name</label>
			      <input type="text" name="lname" class="form-control" id="inputLName" placeholder="Enter your Last Name">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="New Email">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputState">Category</label>
			      <select id="inputState" class="form-control" name="ctype">
			        <option selected>Seller</option>
			        <option>Buyer</option>
			      </select>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Contact No</label>
			      <input type="text" name="contactno" class="form-control" id="inputContactNo4" placeholder="Contact No" maxlength="10">
			    </div>
			    <div class="form-group col-md-6">
			    	<!-- empty -->
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputAddressL1">Address Line 1</label>
			    <input type="text" name="adderssl1" class="form-control" id="inputAddressL1" placeholder="1234 Main St">
			  </div>
			  <div class="form-group">
			    <label for="inputAddressL2">Address Line 2</label>
			    <input type="text" name="adderssl2" class="form-control" id="inputAddressL2" placeholder="Apartment, studio, or floor">
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCity">City</label>
			      <input type="text" name="city" class="form-control" id="inputCity" placeholder="Enter your City">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputCountry">Country</label>
			      <input type="text" name="country" class="form-control" id="inputCountry" placeholder="Enter your Country">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputProvince">Province</label>
			      <input type="text" name="province" class="form-control" id="inputProvince" placeholder="Enter your Province">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPostalCode">Postal code</label>
			      <input type="text" name="postalcode" class="form-control" id="inputPostalCode" placeholder="Enter your Postal code">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputConPassword4">Confirm Password</label>
			      <input type="password" name="conpassword" class="form-control" id="inputConPassword4" placeholder="Confirm Password">
			    </div>
			  </div>
			  <br>
			  <button type="submit" class="btn btn-primary">Update Profile</button>
			</form>
	      	<!-- Edit Profile End -->
	      </div>
	      <!--Second tab End-->

	      <!--Third tab Start-->
	      <div class="tab-pane fade" id="v-pills-AccountDetails" role="tabpanel" aria-labelledby="v-pills-AccountDetails-tab">
	      	<ol class="breadcrumb">
            	<li class="breadcrumb-item active" aria-current="page">Account Details</li>
        	</ol>
	      <!--Account Details Start -->
	      	<form method="POST" name="EditPro" action="../actions/accountdetails.php">
			  <div class="form-row">
			    <div class="form-group col-md-12">
			      <label for="inputPM">Payment Method</label>
			    </div>
			    <div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Visa Card">
				  <label class="form-check-label" for="inlineRadio1"><img src="../images/Visa.png" width="50" height="50"></label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Master Card">
				  <label class="form-check-label" for="inlineRadio2"><img src="../images/MAsterCard.jpg" width="50" height="50"></label>
				</div>
			  </div>
	
			  <div class="form-row">
			  	<div class="form-group col-md-12">
			    	<label for="inputBankName">Bank Name</label>
			    	<input type="text" class="form-control" id="inputBankName" name="inputBankName" placeholder="BOC/Commercial/NSB/Peoples">
			  	</div>
			  	<div class="form-group col-md-6">
			    	<label for="inputAccountNo">Account Number</label>
			    	<input type="text" class="form-control" id="inputAccountNo" name="inputAccountNo" placeholder="Enter your Account Number">
			  	</div>
			    <div class="form-group col-md-6">
			      <label for="inputCardNo">Card Number</label>
			      <input type="text" class="form-control" id="inputCardNo" name="inputCardNo" placeholder="Enter your Card Number">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputSecurityNo">Security code</label>
			      <input type="text" class="form-control" id="inputSecurityNo" name="inputSecurityNo" placeholder="Enter your Card Security Number">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputEDate">Expiration</label><br>
			      <input type="text" class="form-control" id="inputEDate" placeholder="Date" name="inputEDate">
			    </div>
			  </div>
			  <br>
			  <?php 
			  	$query_set_btn = "SELECT * FROM `account_details` WHERE u_id = ".$_SESSION["c_id"].";";
				//query execute
				$result = mysqli_query($db, $query_set_btn);  
				//Add while loop for first column data display and after display next column
				while($row = mysqli_fetch_array($result)){
					$set = $row['u_id'];
				}
				if(isset($set)){
					?>
						<button type="submit" class="btn btn-success" name="btn_update">Update to Account</button>
					<?php	
				}else{
					?>
						<button type="submit" class="btn btn-primary" name="btn_save">Save to Account</button>
					<?php
				}
			  ?>
			</form>
	      <!--Account Details End -->
	      </div>
	      <!--Third tab End-->

	      <!--Forth tab Start-->
	      <div class="tab-pane fade" id="v-pills-PerchaseHistory" role="tabpanel" aria-labelledby="v-pills-PerchaseHistory-tab">
	      	<ol class="breadcrumb">
            	<li class="breadcrumb-item active" aria-current="page">Perchase History</li>
        	</ol>
        	<!--Perchase History Start-->
        	<?php include 'perchasehistory.php' ?>
        	<!--Perchase History End-->
	      </div>
	      <!--Forth tab End-->
	      <!--Fifth tab Start-->
	      <div class="tab-pane fade" id="v-pills-AddNewItems" role="tabpanel" aria-labelledby="v-pills-AddNewItems-tab">
	      	<!-- Item Details (Start) -->
	      	<div class="card">
			  <div class="card-body">
			    <form method="POST" name="addnewitems" action="../actions/publishitems.php" enctype="multipart/form-data">
			      <!-- <div class="row"> 1 row Text Boxes to insert data (Supplier) START -->
				    <!-- <div class="col">
				      	<input type="text" class="form-control" name="serachid" placeholder="Serach Item Code" style="width: 20rem;">
				    </div>
				    <div class="col">
						<button type="submit" class="btn btn-success" name="btn_search">
							<i class="fa fa-search" aria-hidden="true"></i> 
							Search
						</button>
				    </div> -->
				  <!-- </div> 1 row Text Boxes to insert data (Supplier) END -->
				  <!-- <hr> -->
			      <div class="row"><!-- 2 row Text Boxes to insert data (Supplier) START-->
				    <div class="col">
				      	<input type="text" class="form-control" placeholder="Item Code" name="itemcode" value="" style="width: 20rem;">
				    </div>
				    <div class="col">
				    	<input type="submit" name="btn_insert" class="btn btn-success" value="Insert" style="width: 5rem;">
				    	<input type="submit" name="btn_update" class="btn btn-primary" value="Update" style="width: 5rem;">
				    	<input type="submit" name="btn_delete" class="btn btn-danger" value="Delete" style="width: 5rem;">
				    	<input type="reset" name="btn_delete" class="btn btn-warning" value="Clear" style="width: 5rem;">
				    </div>
				  </div><!-- 2 row Text Boxes to insert data (Supplier) END-->
				  <br>
				  <div class="row"><!-- 3 row Text Boxes to insert data (Supplier) START-->
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Item name" name="itemname" value="" style="width: 15rem;">
				    </div>
				    <div class="col">
				      <select id="inputState" class="form-control" name="itemcategory">
				        <option selected>Watch</option>
				        <option>Bag</option>
				      </select>
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Item Color" name="itemcolor" value="" style="width: 13rem;">
				    </div>
				  </div><!-- 3 row Text Boxes to insert data (Supplier) END-->
				  <br>
				  <div class="row"><!-- 4 row Text Boxes to insert data (Supplier) START-->
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Item Quantity" name="itemqty" value="" style="width: 15rem;">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Item Price (Rs.)" name="itemprice" value="" style="width: 15rem;">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Item Update Price (Rs.)" name="itemupprice" value="" style="width: 13rem;">
				    </div>
				  </div><!-- 4 row Text Boxes to insert data (Supplier) END-->
				  <br>
				  <div class="row"><!-- 5 row Text Boxes to insert data (Supplier) START-->
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Item Description" name="itemdes" value="" style="width: 47rem;">
				    </div>
				  </div><!-- 5 row Text Boxes to insert data (Supplier) END-->
			  </div>
			</div>
			
			<!-- Item Details (End) -->
			<!-- Add Item Images (Start) -->
			<div class="card">
			  <div class="card-body">
				  	<div class="row">
				  		<div class="col">
				  			<input type="text" name="imgname1" class="form-control" placeholder="Insert Image [1] Name" style="margin-bottom: 5px;">
						    <input type="file" name="imgfname1" class="form-control-file btn-outline-primary" id="exampleFormControlFile1">
						    <input type="text" name="imgname2" class="form-control" placeholder="Insert Image [2] Name" style="margin-bottom: 5px;margin-top: 5px;">
						    <input type="file" name="imgfname2" class="form-control-file btn-outline-primary" id="exampleFormControlFile1">
				  		</div>
				  		<div class="col">
				  			<input type="text" name="imgname3" class="form-control" placeholder="Insert Image [3] Name" style="margin-bottom: 5px;">
						    <input type="file" name="imgfname3" class="form-control-file btn-outline-primary" id="exampleFormControlFile1">
						    <input type="text" name="imgname4" class="form-control" placeholder="Insert Image [4] Name" style="margin-bottom: 5px;margin-top: 5px;">
						    <input type="file" name="imgfname4" class="form-control-file btn-outline-primary" id="exampleFormControlFile1">
				  		</div>				  		
				  	</div>
				</form>
			  </div>
			</div>
			<!-- Add Item Images (End) -->
			<!-- Data Table Dtails -->
			<br>

			<h3><span class="badge badge-secondary">Data Table Of Item Details ..</span></h3>
			<!-- Data Table of Item Details(Supplier) START-->
				<div data-spy="scroll" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
							    <td scope="col" class="alert alert-secondary">I. Code</td>
							    <td scope="col" class="alert alert-secondary">I. Name</td>
							    <td scope="col" class="alert alert-secondary">I. Category</td>
							    <td scope="col" class="alert alert-secondary">I. Quantity</td>
							    <td scope="col" class="alert alert-info">I. Sold</td>
							    <td scope="col" class="alert alert-secondary">I. Price</td>
							    <td scope="col" class="alert alert-secondary">I.U. Price</td>
							    <td scope="col" class="alert alert-secondary">I. Color</td>
							    <td scope="col" class="alert alert-secondary">Image 1</td>
							    <!-- <td scope="col" class="alert alert-secondary">Buttons</td> -->
							    <!-- <th scope="col">Image 3</th>
							    <th scope="col">Image 4</th>
							    <th scope="col">Item Description</th> -->
							</tr>
						</thead>
						<tbody>
							<!-- Get data in databse for table (Start) -->
							<?php 
								//first query (that you want to select)
								$query = "SELECT * FROM `items_details` WHERE u_id = $uid ORDER BY it_code DESC;";
								//$query = "SELECT * FROM `items_details` WHERE u_id = $uid;";
								//query execute
								$result = mysqli_query($db, $query);  
								//Add while loop for first column data display and after display next column
								while ($row = mysqli_fetch_array($result)) { 
							?>
							<!-- Get data in databse for table (End) -->
							<tr>
								<td class="alert alert-secondary"><?= $row['it_code']?></td>
								<td><?= $row['it_name']?></td>
								<td><?= $row['it_category']?></td>
								<td><?= $row['it_qty']?></td>
								<td class="alert alert-info"><?= $row['it_sold']?></td>
								<td>Rs.<?= $row['it_price']?></td>
								<td>Rs.<?= $row['it_upprice']?></td>
								<td><?= $row['it_color']?></td>
								<td>
									<?php 	echo "
									<img src='../uploads/".$row['it_img1']."' style='width: 50px;height: auto;' alt = '". $row['it_img1'] ."'>
									"; ?>
								</td>
								<!-- <td>
									<div class="row">
									<form method="POST" action="">
										<input type="text" name="itemid" value="<?= $row['it_code']?>" hidden>
										<button type="submit" class="btn btn-danger"">
											<i class="fas fa-trash-alt" aria-hidden="true"></i>
										</button>
									</form>
									&nbsp;
									<form method="POST" action="" data-toggle="modal" data-target="#UpDate">
										<input type="text" name="itemid" value="<?= $row['it_code']?>" hidden>
										<button type="submit" class="btn btn-primary">
											<i class="fas fa-sync-alt"></i>
										</button>
									</form>
									</div>

									
								</td> -->
								<!-- <td><?= $row['it_img2']?></td>
								<td><?= $row['it_img3']?></td>
								<td><?= $row['it_img4']?></td>
								<td><?= $row['it_description']?></td> -->
							</tr>
							<?php 
								} 
							?>
						</tbody>
					</table>
				</div>
			<!-- Data Table of Item Details(Supplier) END-->
	      </div>
	      <!--Fifth tab End-->
	    </div>
	  </div>
	  <div class="col-3">
	  	<ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
	    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	      <a class="nav-link active" id="v-pills-MyProfile-tab" data-toggle="pill" href="#v-pills-MyProfile" role="tab" aria-controls="v-pills-MyProfile" aria-selected="true">My Profile</a>
	      <a class="nav-link" id="v-pills-EditProfile-tab" data-toggle="pill" href="#v-pills-EditProfile" role="tab" aria-controls="v-pills-EditProfile" aria-selected="false">Edit Profile</a>
	      <a class="nav-link" id="v-pills-AccountDetails-tab" data-toggle="pill" href="#v-pills-AccountDetails" role="tab" aria-controls="v-pills-AccountDetails" aria-selected="false">Account Details</a>
	      <?php 
			//first query (that you want to select)
			$query = "SELECT u_category FROM `users_details` WHERE u_id = '".$_SESSION["c_id"]."'";
			//query execute
			$result = mysqli_query($db, $query);  
			//Add while loop for first column data display and after display next column
			while ($row = mysqli_fetch_array($result)) {
				if($row['u_category'] == 'Buyer'){
					?>
						<a class="nav-link" id="v-pills-PerchaseHistory-tab" data-toggle="pill" href="#v-pills-PerchaseHistory" role="tab" aria-controls="v-pills-PerchaseHistory" aria-selected="false">Perchase History</a>
					<?php
				}else{
					?>
						<a class="nav-link" id="v-pills-AddNewItems-tab" data-toggle="pill" href="#v-pills-AddNewItems" role="tab" aria-controls="v-pills-AddNewItems" aria-selected="false">Add New Items</a>
					<?php
				}
			}
	      ?>
	    </div>
	  </div>
  </div><!-- row -->
</div>
<!-- Container End -->
<!-- index page (HOME Page) Body END -->

<!-- import the footer in to index (HOME) page -->
<?php include 'footerLog.php' ?>