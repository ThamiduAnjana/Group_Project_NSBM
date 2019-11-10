<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom-style.css">

    <title>ShopingCard.LK</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="images/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
        ShoppingCard.LK
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i> NEW PRODUCTS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-right" aria-hidden="true"></i> 
              CATEGORY
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Electrical</a>
              <a class="dropdown-item" href="#">Bags</a>
              <a class="dropdown-item" href="#">Dresses</a>
            </div>
          </li>
        </ul>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search for anything" aria-label="Search" style="width: 500px;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
        </form>
        <form class="form-inline">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> 
                Accounts
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#SignIn"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#SignUp"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
              </div>
            </li>
          </ul>
        </form>
      </div>
    </nav>

    <!-- Sign in -->
    <form method="POST" name="SignInForm">
      <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Sign Up -->
    <form method="POST" name="SignInForm">
      <div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter First Name">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Last Name">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Address Line 1">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Address Line 2">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Enter E-mail">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputCity" placeholder="Enter City">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputCity" placeholder="Enter Province">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputCity" placeholder="Enter Postal Code">
                </div>
                <div class="form-group col-md-6">
                  <select id="inputState" class="form-control">
                    <option selected>Country</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </div>
      </div>
    </form>