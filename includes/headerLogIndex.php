<!-- session -->
<?php 
	if(!isset($_SESSION))
	{
		session_start();
	}

	//Add database into index.php
	require_once("database/connect.php");
	//first query (that you want to select)
	$query = "SELECT u_fname FROM `users_details` WHERE u_id = '".$_SESSION["c_id"]."'";
	//query execute
	$result = mysqli_query($db, $query);  
	//Add while loop for first column data display and after display next column
	while ($row = mysqli_fetch_array($result)) {
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>WWW.ShoppingCard.LK</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-Awesome CSS (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom-style.css">
</head>
	<body>

	<!-- Make nav bar START -->
		<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
		  <!-- Link for company logo START-->
	      <a class="navbar-brand" href="#">
	      	<!-- Image Company Logo -->
	        <img src="images/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
	        <!-- Company Name -->
	        ShoppingCard.LK
	      </a>
	      <!-- Link for company logo END-->
	      <!-- START Menu List -->
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	          	<!-- Home Menu Button -->
	            <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> HOME <span class="sr-only">(current)</span></a>
	          </li>
	          <li class="nav-item active">
	          	<!-- Profile Menu Button -->
	            <a class="nav-link" href="includes/customer.php"><i class="fa fa-user-circle"></i> Hi. ! <?= $row['u_fname'] ?> <span class="sr-only">(current)</span></a>
	          </li>
	        </ul>
	        <!-- Item Search Box And Button START -->
	        <form class="form-inline" method="POST" action="searchpro.php">
            <!-- Item Search Box START -->
            <input class="form-control mr-sm-2" type="search" placeholder="Search for anything" aria-label="Search" style="width: 500px;" name="searchitems">
            <!-- Item Search Box END -->
            <!-- Item Button START -->
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i> 
              Search
            </button>
            <!-- Item Button END -->
          </form>
	        <!-- Item Search Box And Button END -->
	        <!-- Log Out START -->
	        <form class="form-inline" method="POST" action="actions/signout.php">
	          <!-- Signout Menu -->
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="margin-left: 15px;">
              <i class="fas fa-sign-out-alt"></i> 
              LogOut
            </button>
	        </form>
	        <!-- Log Out END -->
	      </div>
	      <!-- END Menu List -->
	    </nav>	
	<!-- Make nav bar END -->
<?php } ?>