<!DOCTYPE html>
<html>
<head>
	<title>ShopingCard.LK</title>
</head>
<body>

<?php include 'header.php' ?>

<?php 
	$Item_code = $_REQUEST['addcard'];
	//Add database into index.php
	require_once("database/connect.php");
	//first query (that you want to select)
	$query = "SELECT `it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating` FROM `items_details` WHERE it_code = $Item_code";
	//query execute
	$result = mysqli_query($db, $query);  
	//Add while loop for first column data display and after display next column
	while ($row = mysqli_fetch_array($result)) { 
	
?>

<div class="container">
	<ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right" aria-hidden="true">
        </i> test / test</li>
    </ol>
	<div class="row">
		<div class="col-5">
			<div class="card" style="height: 35rem;">
				<?php 
					echo "<img src='images/".$row['it_img1']."' style='width: 25rem;height: auto;' alt = '". $row['it_img1'] ."'>";
				?>
				<!-- <img class="card-img-top" src="images/Item_01.png" alt="Card image cap"> -->
				<div class="card-body">
				   	<h5 class="card-title">Images</h5>
				   	<div class="card-group">
				   		<?php 
				   			echo "
				   				<a href=''><img style='height: 5rem;' src='images/".$row['it_img1']."' style='width: 25rem;height: auto;' alt = '". $row['it_img1'] ."'></a>
				   				<a href=''><img style='height: 5rem;' src='images/".$row['it_img1']."' style='width: 25rem;height: auto;' alt = '". $row['it_img1'] ."'></a>
				   				<a href=''><img style='height: 5rem;' src='images/".$row['it_img1']."' style='width: 25rem;height: auto;' alt = '". $row['it_img1'] ."'></a>
				   				<a href=''><img style='height: 5rem;' src='images/".$row['it_img1']."' style='width: 25rem;height: auto;' alt = '". $row['it_img1'] ."'></a>
				   			";
				   		?>
				   	</div>
				</div>
			</div>
		</div>
		<div class="col-7">
			<div class="card" style="height: 35rem;">
				<div class="card-body">
				   	<h5 class="card-title"><?= $row['it_name'] ?></h5>
				    <p class="card-text"><?= $row['it_description']?></p>
				    <hr>
				    <div class="row">
					    <div class="col-2">
					    	Quantity :
					    </div>
					    <div class="col-5">
					    	<input type="text" class="form-control" id="qty" value="1" style="width: 150px;height: 35px;">
					    </div>
					    <div class="col-3">
					    	<small class="text-muted"><?= $row['it_qty']?> available / 2 sold</small>
					    </div>
					</div>
					<br>
					<div class="row">
					    <div class="col-2">
					    	Price :
					    </div>
					    <div class="col-5">
					    	<h4><span class="badge badge-danger">RS.<?= $row['it_upprice']?></span>
					    	<small>
                                <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.<?= $row['it_price']?></span>
                            </small></h4>
					    </div>
					</div>
					<br>
					<div class="row">
					    <div class="col-2">
					    	
					    </div>
					    <div class="col-3">
					    	<button type="button" class="btn btn-primary">Buy It Now</button>
					    </div>
					</div>
					<br>
					<div class="row">
					    <div class="col-2">
					    	<h5 class="card-text"><small class="text-muted">
						    	Shipping : 
						    </small></h5>
					    </div>
					    <div class="col-9">
					    	<h5 class="card-text"><small class="text-muted">
						    	May not ship to India - Read item description or contact seller for shipping options.
						    </small></h5>
					    </div>
					</div>
					<div class="row">
					    <div class="col-2">
					    	<h5 class="card-text"><small class="text-muted">
						    	Delivery : 
						    </small></h5>
					    </div>
					    <div class="col-9">
					    	<h5 class="card-text"><small class="text-muted">
						    	Varies
						    </small></h5>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	}
?>
<?php include 'footer.php' ?>

</body>
</html>