<?php 
	if(!isset($_SESSION))
	{
		session_start();
	}

	$_SESSION["SearchId"] = $_POST['searchid'];

	header('location: ../includes/customer.php');

?>
<?php 
				  	//search items
				  	if(isset($_SESSION["SearchId"])){
						$SearchId = $_SESSION["SearchId"];

						//Add database into index.php
						//require_once("../database/connect.php");
						//first query (that you want to select)
						$query_one = "SELECT * FROM `items_details` WHERE u_id = $uid AND it_code = $SearchId;";
						//query execute
						$result = mysqli_query($db, $query_one);

						while ($row = mysqli_fetch_array($result)) {

							$itcode = $row['it_code'];
							$itname = $row['it_name'];
							$itcategory = $row['it_category'];
							$itcolor = $row['it_color'];
							$itqty = $row['it_qty'];
							$itprice = $row['it_price'];
							$itupprice = $row['it_upprice'];
							$itdes = $row['it_description'];

							echo "
								<!-- test -->
							" . $itcode;
						}
					}

				  ?>