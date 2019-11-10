
  <?php include 'header.php';?>
    
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
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Watch (Men)</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">School Bags (Men/Women)</a>
          </div>
        </div>
        <div class="col-10">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right" aria-hidden="true"></i> New Products</li>
            </ol>
          </nav>
          
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card-group">
                  <div class="card" style="width: 18rem;">
                    <?php
                      //Add database into index.php
                      require_once("database/connect.php");
                      //first query (that you want to select)
                      $query_one = "SELECT `it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating` FROM `items_details` WHERE it_code = 001";
                      //query execute
                      $result = mysqli_query($db, $query_one);  
                      //Add while loop for first column data display and after display next column
                      while ($row = mysqli_fetch_array($result)) {    
                        //data
                        echo "<img src='images/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>";
                    ?>
                    <div class="card-body">
                      <form method="POST" name="AddToCard" action="addtocard.php">
                      <h5 class="card-title"> <?= $row['it_name'] ?> <input type="text" name="addcard" value="<?= $row['it_code'] ?>" hidden></h5>
                      <h5>
                        <span class="badge badge-danger">RS. <?= $row['it_upprice'] ?></span>
                        <?php 
                          if($row['it_price'] != 0.00){
                            echo "
                              <small>
                                <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.".$row['it_price']."</span>
                              </small>
                            ";
                          }
                        ?>
                      </h5>
                      <p class="card-text"><?= $row['it_description']?></p>
                      <p>
                        Rating :
                        <?php $item_code = 001 ?>
                        <?php include 'include/rating_include.php';?>
                      </p>
                        <!-- <button type="button" class="btn btn-primary" value="<?= $row['it_code'] ?>" name="card1">Add to card</button> -->
                        <!-- <a href="addtocard.php" class="btn btn-primary" value="<?= $row['it_code'] ?>" name="addcard">Add to card</a> -->
                        <input class="btn btn-primary" type="submit" value="Add to card">
                      </form>
                      <?php
                         }
                         //important you can use php tag like this <?= 
                      ?>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <?php
                      //Add database into index.php
                      require_once("database/connect.php");
                      //first query (that you want to select)
                      $query_one = "SELECT `it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating` FROM `items_details` WHERE it_code = 002";
                      //query execute
                      $result = mysqli_query($db, $query_one);  
                      //Add while loop for first column data display and after display next column
                      while ($row = mysqli_fetch_array($result)) {    
                        //data
                        echo "<img src='images/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>";
                    ?>
                    <div class="card-body">
                      <form method="POST" name="AddToCard" action="addtocard.php">
                      <h5 class="card-title"> <?= $row['it_name'] ?> <input type="text" name="addcard" value="<?= $row['it_code'] ?>" hidden></h5>
                      <h5>
                        <span class="badge badge-danger">RS. <?= $row['it_upprice'] ?></span>
                        <?php 
                          if($row['it_price'] != 0.00){
                            echo "
                              <small>
                                <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.".$row['it_price']."</span>
                              </small>
                            ";
                          }
                        ?>
                      </h5>
                      <p class="card-text"><?= $row['it_description']?></p>
                      <p>
                        Rating :
                        <?php $item_code = 002 ?>
                        <?php include 'include/rating_include.php';?>
                      </p>
                        <input class="btn btn-primary" type="submit" value="Add to card">
                      </form>
                      <?php
                         }
                         //important you can use php tag like this <?= 
                      ?>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <?php
                      //Add database into index.php
                      require_once("database/connect.php");
                      //first query (that you want to select)
                      $query_one = "SELECT `it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating` FROM `items_details` WHERE it_code = 003";
                      //query execute
                      $result = mysqli_query($db, $query_one);  
                      //Add while loop for first column data display and after display next column
                      while ($row = mysqli_fetch_array($result)) {    
                        //data
                        echo "<img src='images/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>";
                    ?>
                    <div class="card-body">
                      <form method="POST" name="AddToCard" action="addtocard.php">
                      <h5 class="card-title"> <?= $row['it_name'] ?> <input type="text" name="addcard" value="<?= $row['it_code'] ?>" hidden></h5>
                      <h5>
                        <span class="badge badge-danger">RS. <?= $row['it_upprice'] ?></span>
                        <?php 
                          if($row['it_price'] != 0.00){
                            echo "
                              <small>
                                <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.".$row['it_price']."</span>
                              </small>
                            ";
                          }
                        ?>
                      </h5>
                      <p class="card-text"><?= $row['it_description']?></p>
                      <p>
                        Rating :
                        <?php $item_code = 003 ?>
                        <?php include 'include/rating_include.php';?>
                      </p>
                        <input class="btn btn-primary" type="submit" value="Add to card">
                      </form>
                      <?php
                         }
                         //important you can use php tag like this <?= 
                      ?>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <?php
                      //Add database into index.php
                      require_once("database/connect.php");
                      //first query (that you want to select)
                      $query_one = "SELECT `it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating` FROM `items_details` WHERE it_code = 004";
                      //query execute
                      $result = mysqli_query($db, $query_one);  
                      //Add while loop for first column data display and after display next column
                      while ($row = mysqli_fetch_array($result)) {    
                        //data
                        echo "<img src='images/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>";
                    ?>
                    <div class="card-body">
                      <form method="POST" name="AddToCard" action="addtocard.php">
                      <h5 class="card-title"> <?= $row['it_name'] ?> <input type="text" name="addcard" value="<?= $row['it_code'] ?>" hidden></h5>
                      <h5>
                        <span class="badge badge-danger">RS. <?= $row['it_upprice'] ?></span>
                        <?php 
                          if($row['it_price'] != 0.00){
                            echo "
                              <small>
                                <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.".$row['it_price']."</span>
                              </small>
                            ";
                          }
                        ?>
                      </h5>
                      <p class="card-text"><?= $row['it_description']?></p>
                      <p>
                        Rating :
                        <?php $item_code = 004 ?>
                        <?php include 'include/rating_include.php';?>
                      </p>
                        <input class="btn btn-primary" type="submit" value="Add to card">
                      </form>
                      <?php
                         }
                         //important you can use php tag like this <?= 
                      ?>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <?php
                      //Add database into index.php
                      require_once("database/connect.php");
                      //first query (that you want to select)
                      $query_one = "SELECT `it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating` FROM `items_details` WHERE it_code = 005";
                      //query execute
                      $result = mysqli_query($db, $query_one);  
                      //Add while loop for first column data display and after display next column
                      while ($row = mysqli_fetch_array($result)) {    
                        //data
                        echo "<img src='images/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>";
                    ?>
                    <div class="card-body">
                      <form method="POST" name="AddToCard" action="addtocard.php">
                      <h5 class="card-title"> <?= $row['it_name'] ?> <input type="text" name="addcard" value="<?= $row['it_code'] ?>" hidden></h5>
                      <h5>
                        <span class="badge badge-danger">RS. <?= $row['it_upprice'] ?></span>
                        <?php 
                          if($row['it_price'] != 0.00){
                            echo "
                              <small>
                                <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.".$row['it_price']."</span>
                              </small>
                            ";
                          }
                        ?>
                      </h5>
                      <p class="card-text"><?= $row['it_description']?></p>
                      <p>
                        Rating :
                        <?php $item_code = 005 ?>
                        <?php include 'include/rating_include.php';?>
                      </p>
                        <input class="btn btn-primary" type="submit" value="Add to card">
                      </form>
                      <?php
                         }
                         //important you can use php tag like this <?= 
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="card-group">
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Item_05.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <span class="badge badge-danger">Rs.5000.00</span>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Item_05.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <span class="badge badge-danger">Rs.5000.00</span>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Item_06.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <span class="badge badge-danger">Rs.5000.00</span>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Item_07.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <span class="badge badge-danger">Rs.5000.00</span>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Item_08.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <span class="badge badge-danger">Rs.5000.00</span>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>




    <?php include 'footer.php';?>
    