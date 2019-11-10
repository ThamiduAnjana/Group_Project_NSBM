<?php 
  //Add database into index.php
  require_once("database/connect.php");
  //first query (that you want to select)
  $query_one = "SELECT `it_rating` FROM `items_details` WHERE it_code = $item_code";
  //query execute
  $result = mysqli_query($db, $query_one);  
  //Add while loop for first column data display and after display next column
  while ($row = mysqli_fetch_array($result)) {    

    //data
    switch ($row['it_rating']) {
      case 1:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 2:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 3:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 4:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 5:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
        ";
        break;
                              
      default:
        echo "
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
        ";
        break;
    }
  }
?>