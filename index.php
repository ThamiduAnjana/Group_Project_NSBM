<!-- import the header (Navigation bar) in to index (HOME) page -->
<?php 

  if(!isset($_SESSION))
  {
    session_start();
  }
  
  //Get Data, Sql & connect Database. Add database into index.php
  require_once("database/connect.php"); 

    //include 'header.php'
    if (isset($_SESSION["c_id"])) {
      //check users category
      $uid = $_SESSION["c_id"];
      //$query_one = "SELECT * FROM items_details LIMIT $page1,5;";
      $query_one = "SELECT * FROM users_details WHERE u_id = $uid;";

      $result = mysqli_query($db, $query_one);

      while ($row = mysqli_fetch_array($result)) {
        if($row['u_category'] != "Buyer"){
          header('location: includes/customer.php');
        }
      }

      include 'includes/headerLogIndex.php';
    }else{
      include 'includes/header.php';
    }

    //check value
    if(isset($_SESSION["Notice"])){

    }else{
      $_SESSION["Notice"] = '0';
    }

    if($_SESSION["Notice"] == '1' && isset($_SESSION["c_id"])){
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Succsesfuly Purchase..!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php
      unset( $_SESSION["Notice"]);
    }elseif($_SESSION["Notice"] == '2' || $_SESSION["Notice"] == '3' && !isset($_SESSION["c_id"])){
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Please sign in your account..!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php
      unset( $_SESSION["Notice"]);
    }elseif($_SESSION["Notice"] == '4' && !isset($_SESSION["c_id"])){
        ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Please Try Again..!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        unset( $_SESSION["Notice"]);
      }elseif($_SESSION["Notice"] == '6' && !isset($_SESSION["c_id"])){
        ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Thank you. Subscribed..!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        unset( $_SESSION["Notice"]);
    }else{

    }
  ?>
  <?php 
    
  ?>
  <!-- index page (HOME Page) Body START -->
  <!-- SlideShow Panel Start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Slide_img_01.png" class="d-block w-100" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="images/Slide_img_02.png" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="images/Slide_img_01.png" class="d-block w-100" alt="Image 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  <!-- SlideShow Panel End -->
      <br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right" aria-hidden="true"></i> Categories</li>
              </ol>
            </nav>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-wtach-tab" data-toggle="pill" href="#v-pills-wtach" role="tab" aria-controls="v-pills-wtach" aria-selected="true"><i class="fa fa-clock-o" aria-hidden="true"></i> Watch (Men)</a>
              <a class="nav-link" id="v-pills-bag-tab" data-toggle="pill" href="#v-pills-bag" role="tab" aria-controls="v-pills-bag" aria-selected="false"><i class="fa fa-shopping-bag" aria-hidden="true"></i> School Bags (Men/Women)</a>
            </div>
          </div>
          <div class="col-10">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right" aria-hidden="true"></i> Top Products</li>
              </ol>
            </nav>
            
              <div class="tab-content" id="v-pills-tabContent">
                <!-- Category Watch (Start)-->
                <div class="tab-pane fade show active" id="v-pills-wtach" role="tabpanel" aria-labelledby="v-pills-wtach-tab">
                  <div class="card-group">
                    <?php

                      //get page no
                      if(isset($_GET["page"])){
                        $page = $_GET["page"];
                      }else{
                        $page = 1;
                      }
                      //set new page no
                      if($page == 1){
                        $page1 = 0;
                      }else{
                        $page1 = ($page*5)-5;
                      }

                    ?>
                      <div class="card-group">
                      <?php
                        //$query_one = "SELECT * FROM items_details LIMIT $page1,5;";
                        $query_one = "SELECT * FROM items_details WHERE it_category LIKE 'Watch'  LIMIT $page1,5";

                        $result = mysqli_query($db, $query_one);

                        while ($row = mysqli_fetch_array($result)) {
                          //echo "<h1>".$row['it_code']."<h1>";
                          $img = $row['it_img1'];
                          echo "<div class='card' style='width: 18rem;'>
                                  <img src='uploads/$img' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>
                                  <!--<img src='uploads/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>-->
                                        <div class='card-body'>
                                          <form method='POST' name='AddToCard' action='includes/addtocard.php'>
                                          <h5 class='card-title'> ".$row['it_name']." <input type='text' name='addcard' value='".$row['it_code']."' hidden></h5>
                                          <h5>
                                  "; 
                                  if($row['it_upprice'] != 0.00){
                                    echo "
                                      <span class='badge badge-danger'>RS. ". $row['it_upprice']."</span>
                                    ";
                                  }else{
                                    echo "
                                      <span class='badge badge-danger'>RS. ". $row['it_price']."</span>
                                    ";
                                  }
                                  if($row['it_price'] != 0.00 && $row['it_upprice'] != 0.00){
                                    echo "
                                      <small>
                                        <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.".$row['it_price']."</span>
                                      </small>
                                    ";
                                  }
                                  echo "
                                          </h5>
                                          <p class='card-text'>".$row['it_description']."</p>

                                  ";          
                                  echo "    <p>
                                            Rating :
                                  ";
                                            $item_code = $row['it_code'];
                                            //require_once('includes/rating_include.php');
                                            include 'includes/rating_include.php';
                                            // <script>location.href = 'includes/rating_include.php'</script>
                                  echo "    </p>
                                  ";
                                  echo "
                                          <input class='btn btn-primary' type='submit' value='Add to card'>
                                        </form>
                                      </div><!-- card -->
                                    </div><!-- card -->
                                  ";
                          }
                        ?>
                      </div><!-- card-group -->
                      <?php
                      //Count
                      $query_two = "SELECT * FROM items_details WHERE it_category LIKE 'Watch';";

                      $result1 = mysqli_query($db, $query_two);

                      $cou = mysqli_num_rows($result1);
                      
                      $cal = $cou/5;

                      $loop = ceil($cal);

                      ?>

                  </div><!-- card-group -->
                  <br>
                  <center>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><!-- page-link -->
                          <a class="page-link btn-outline-primary" style="margin-left: 2px;margin-right: 1px;" href="#" tabindex="-1"><span aria-hidden="true">&laquo;</span></a>
                        </li>
                        <!-- <li class="page-item"><a class="page-link" href="#page">Previous</a></li> -->
                        <?php

                          for($i = 1;$i <= $loop;$i++){
                            ?>
                              <li class="page-item">
                                <a class="btn btn-outline-primary" style="margin-left: 2px;margin-right: 1px;" href="index.php?page=<?php echo "$i";?>" id="page"><?php echo "$i"; ?></a>
                              </li>
                            <?php
                          }
                        ?>
                        <li class="page-item disabled" style="margin-left: 2px;margin-right: 1px;">
                          <a class="page-link btn-outline-primary" href="#" tabindex="-1"><span aria-hidden="true">&raquo;</span></a>
                        </li>
                      </ul>
                    </nav>
                  </center>
                </div>
                <!-- Category Watch (End)-->
                <!-- Category Bag (Start)-->
                <div class="tab-pane fade" id="v-pills-bag" role="tabpanel" aria-labelledby="v-pills-bag-tab">
                  <div class="card-group">
                    <?php 
                        
                      //get page no
                      if(isset($_GET["page"])){
                        $page = $_GET["page"];
                      }else{
                        $page = 1;
                      }
                      //set new page no
                      if($page == 1){
                        $page1 = 0;
                      }else{
                        $page1 = ($page*5)-5;
                      }

                      ?>
                        <div class="card-group">
                        <?php
                          //$query_one = "SELECT * FROM items_details LIMIT $page1,5;";
                          $query_one = "SELECT * FROM items_details WHERE it_category LIKE 'Bag'  LIMIT $page1,5";

                          $result = mysqli_query($db, $query_one);

                          while ($row = mysqli_fetch_array($result)) {
                            //echo "<h1>".$row['it_code']."<h1>";
                          $img = $row['it_img1'];
                          echo "<div class='card' style='width: 18rem;'>
                                  <img src='uploads/$img' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>
                                  <!--<img src='uploads/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>-->
                                        <div class='card-body'>
                                          <form method='POST' name='AddToCard' action='includes/addtocard.php'>
                                          <h5 class='card-title'> ".$row['it_name']." <input type='text' name='addcard' value='".$row['it_code']."' hidden></h5>
                                          <h5>
                                  "; 
                                  if($row['it_upprice'] != 0.00){
                                    echo "
                                      <span class='badge badge-danger'>RS. ". $row['it_upprice']."</span>
                                    ";
                                  }else{
                                    echo "
                                      <span class='badge badge-danger'>RS. ". $row['it_price']."</span>
                                    ";
                                  }
                                  if($row['it_price'] != 0.00 && $row['it_upprice'] != 0.00){
                                    echo "
                                      <small>
                                        <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.".$row['it_price']."</span>
                                      </small>
                                    ";
                                  }
                                  echo "
                                          </h5>
                                          <p class='card-text'>".$row['it_description']."</p>

                                  ";          
                                  echo "    <p>
                                            Rating :
                                  ";
                                            $item_code = $row['it_code'];
                                            //require_once('includes/rating_include.php');
                                            include 'includes/rating_include.php';
                                            // <script>location.href = 'includes/rating_include.php'</script>
                                  echo "    </p>
                                  ";
                                  echo "
                                          <input class='btn btn-primary' type='submit' value='Add to card'>
                                        </form>
                                      </div><!-- card -->
                                    </div><!-- card -->
                                  ";
                                }
                        ?>
                        </div><!-- card-group -->
                        <?php
                        //Count

                        $query_two = "SELECT * FROM items_details WHERE it_category LIKE 'Bag';";

                        $result1 = mysqli_query($db, $query_two);

                        $cou = mysqli_num_rows($result1);
                        
                        $cal = $cou/5;

                        $loop = ceil($cal);

                        ?>
                  </div><!-- card-group -->
                  <br>
                  <center>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><!-- page-link -->
                          <a class="page-link btn-outline-primary" style="margin-left: 2px;margin-right: 1px;" href="#" tabindex="-1"><span aria-hidden="true">&laquo;</span></a>
                        </li>
                        <!-- <li class="page-item"><a class="page-link" href="#page">Previous</a></li> -->
                        <?php

                          for($i = 1;$i <= $loop;$i++){
                            ?>
                              <li class="page-item">
                                <a class="btn btn-outline-primary" style="margin-left: 2px;margin-right: 1px;" href="index.php?page=<?php echo "$i";?>" id="page"><?php echo "$i"; ?></a>
                              </li>
                            <?php
                          }
                        ?>
                        <li class="page-item disabled" style="margin-left: 2px;margin-right: 1px;">
                          <a class="page-link btn-outline-primary" href="#" tabindex="-1"><span aria-hidden="true">&raquo;</span></a>
                        </li>
                      </ul>
                    </nav>
                  </center>
                </div>
                <!-- Category Bag (End) -->
            </div>
          </div>
        </div>
      </div>
<!-- index page (HOME Page) Body END -->

<!-- import the footer in to index (HOME) page -->
<?php include 'includes/footer.php' ?>