

<!--import the header (Navigation bar) in to Search (HOME) page -->
<?php 
  
  if(!isset($_SESSION))
  {
    session_start();
  }

  if (isset($_SESSION["c_id"])) {
    include 'headerLog.php';
  }else{
    include 'headeradd.php';
  }

  //include 'headeradd.php' 

?>
<!-- Search page (HOME Page) Body START -->
<br>

<?php 

  if(isset($_POST['searchitems'])){
    $SearchItemCat = $_POST['searchitems'];
  }
  if(isset($_GET["sk"])){
    $SearchItemCat = $_GET["sk"];
  }
  

  //Add database into index.php
  require_once("../database/connect.php");
  //first query (that you want to select)
  $query_one = "SELECT * FROM `items_details` WHERE it_category LIKE '%$SearchItemCat%' OR it_name LIKE '%$SearchItemCat%';";
  //query execute
  $result = mysqli_query($db, $query_one);  
   
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
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
            $query_one = "SELECT * FROM items_details WHERE it_category LIKE '$SearchItemCat'  LIMIT $page1,5";

             $result = mysqli_query($db, $query_one);

            while ($row = mysqli_fetch_array($result)) {
              //echo "<h1>".$row['it_code']."<h1>";
              $img = $row['it_img1'];
              echo "<div class='card' style='width: 18rem;'>
                      <img src='../uploads/$img' style='width: 200px;height: auto;' alt = '$img'>
                      <!--<img src='../uploads/".$row['it_img1']."' style='width: 200px;height: auto;' alt = '". $row['it_img1'] ."'>-->
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
                        include 'rating_include.php';
                        // <script>location.href = 'includes/rating_include.php'</script>
              echo "    </p>
              ";
              echo "
                       <input class='btn btn-primary' style='margin-bottom: 2px;' type='submit' value='Add to card'>
                     </form>
                  </div><!-- card -->
                </div><!-- card -->
              ";
              $itrate = $row['it_rating'];
              //add reating for products
              if(isset($row['it_rating'])){
                if($itrate <= 100){
                  $rate = $row['it_rating'] + 1;
                }else{
                  $rate = $row['it_rating'];
                }
              }else{
                $rate = 1;
                //echo $rate;
              }
              //query
              $query_add = "UPDATE `items_details` SET `it_rating`= $rate WHERE it_code = $item_code;";
              //$query_add = "INSERT INTO `items_details`(`it_rating`) VALUES ($rate) WHERE it_code = $item_code;";
              //query execute
              mysqli_query($db, $query_add);

            }
          ?>
          </div><!-- card-group -->
          <?php
            //Count
            $query_two = "SELECT * FROM items_details WHERE it_category LIKE '$SearchItemCat';";

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
                      <a class="btn btn-outline-primary" style="margin-left: 2px;margin-right: 1px;" href="searchpro.php?page=<?php echo "$i";?>&sk=<?php echo "$SearchItemCat";?>" id="page"><?php echo "$i"; ?></a>
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
  </div><!-- row -->
</div><!-- container -->
<!-- Search page (HOME Page) Body END -->


<!-- import the footer in to Search (HOME) page -->
<?php include 'footer.php' ?>