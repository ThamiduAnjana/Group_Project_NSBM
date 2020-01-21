<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>WWW.ShoppingCard.LK</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font-Awesome CSS (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/custom-style.css">
</head>
	<body>

	<!-- Make nav bar START -->
		<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
		  <!-- Link for company logo START-->
	      <a class="navbar-brand" href="#">
	      	<!-- Image Company Logo -->
	        <img src="../images/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
	        <!-- Company Name -->
	        ShoppingCard.LK
	      </a>
	      <!-- Link for company logo END-->
	      <!-- START Menu List -->
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item">
	          	<!-- Home Menu Button -->
	            <a class="nav-link" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a>
	          </li>
	          <!-- <li class="nav-item">
	          	<!-- New Products Menu Button 
	            <a class="nav-link" href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i> NEW PRODUCTS</a>
	          </li>
	          <li class="nav-item dropdown">
	          	<!-- Category Menu Button 
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-right" aria-hidden="true"></i> 
	              CATEGORY
	            </a>
	            <!-- START Category Dropdown Menu 
	            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	              <a class="dropdown-item" href="#">Electrical</a>
	              <a class="dropdown-item" href="#">Bags</a>
	              <a class="dropdown-item" href="#">Dresses</a>
	            </div>
	            <!-- END Category Dropdown Menu
	          </li> -->
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
	        <!-- Sign & SignUp Dropdown Menu START -->
	        <form class="form-inline">
	          <ul class="navbar-nav mr-auto">
	            <li class="nav-item dropdown">
	              <!-- Accounts Menu -->
	              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> 
	                Accounts
	              </a>
	              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                <!-- Signin Menu -->
	                <a class="dropdown-item" href="" data-toggle="modal" data-target="#SignIn"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
	                <!-- SignUp Menu -->
	                <a class="dropdown-item" href="" data-toggle="modal" data-target="#SignUp"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
	              </div>
	            </li>
	          </ul>
	        </form>
	        <!-- Sign & SignUp Dropdown Menu END -->
	      </div>
	      <!-- END Menu List -->
	    </nav>	
	<!-- Make nav bar END -->

	<!-- Signin Modle START-->
    <form method="POST" name="SignInForm" action="../actions/signinphp.php">
      <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <!-- Title -->
              <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
              <!-- Exit Button -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <!-- Exit Button -->
            </div>
            <!-- Form START -->
            <div class="modal-body">
              <!-- Enter Email -->
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <!-- Enter Email -->
              <!-- Enter Password -->
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="InputPassword" id="InputPassword" placeholder="Password">
              </div>
              <!-- Enter Password -->
            </div>
            <!-- Form END -->
            <!-- Buttons -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            <!-- Buttons -->
          </div>
        </div>
      </div>
    </form>
    <!-- Signin Modle END-->

    <!-- <script type="text/javascript" src="js/signinval.js"></script> -->

    <!-- SignUp Modle START-->
    <form method="POST" name="SignUpForm" action="../actions/signupphp.php">
      <div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <!-- Title -->
              <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
              <!-- Exit Button -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <!-- Exit Button -->
            </div>
            <div class="modal-body">
              <!-- Name -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="Fname" id="inputFname" placeholder="Enter First Name">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="Lname" id="inputLname" placeholder="Enter Last Name">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <select id="inputState" class="form-control" name="ctype">
                    <option selected>Seller</option>
                    <option>Buyer</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <!-- empty -->
                </div>
              </div>
              <!-- Address -->
              <div class="form-group">
                <input type="text" class="form-control" name="AddressL1" id="inputAddress" placeholder="Address Line 1">
              </div>
              <!-- Address -->
              <div class="form-group">
                <input type="text" class="form-control" name="AddressL2" id="inputAddress" placeholder="Address Line 2">
              </div>
              <!-- Email -->
              <div class="form-group">
                <input type="text" class="form-control" name="Email" id="inputEmail" placeholder="Enter E-mail">
              </div>
              <!-- Contact No -->
              <div class="form-group">
                <input type="text" class="form-control" name="ContactNo" id="inputContactNo" placeholder="Enter Contact No" maxlength="10">
              </div>
              <!-- City, Province -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="inputCity" id="inputCity" placeholder="Enter City">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="inputProvince" id="inputProvince" placeholder="Enter Province">
                </div>
              </div>
              <!-- Postal Code, Country Selection Option -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="inputPostalCode" id="inputPostalCode" placeholder="Enter Postal Code">
                </div>
                <div class="form-group col-md-6">
                  <select id="inputState" class="form-control" name="Country">
                    <option selected>Country</option>
                    <option>Sri Lanka</option>
                  </select>
                </div>
              </div>
              <!-- Postal Code, Country Selection Option -->
              <!-- Password -->
              <div class="form-group">
                <input type="password" class="form-control" name="Password" id="inputAddress" placeholder="Password" maxlength="8">
              </div>
              <!-- Confrim Password -->
              <div class="form-group">
                <input type="password" class="form-control" name="ConPassword" id="inputConPassword" placeholder="Confrim Password" maxlength="8">
              </div>
            </div>
            <!-- Buttons -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
            <!-- Buttons -->
          </div>
        </div>
      </div>
    </form>
    <!-- SignUp Modle END-->