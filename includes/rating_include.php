<?php 
  //Add database into index.php
  //require_once("../database/connect.php");
  //$db = new mysqli("localhost","root","","group_pro_20");
  //first query (that you want to select)
  //$query_one = "SELECT it_rating FROM items_details WHERE it_code = $item_code";
  //query execute
  //$result = mysqli_query($db, $query_one);  
  //Add while loop for first column data display and after display next column
  //while ($row = mysqli_fetch_array($result)) {    

    //data
    switch ($row['it_rating']) {
      case 20:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 40:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 60:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 80:
        echo "
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
        ";
        break;
      case 100:
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
  //}
?>