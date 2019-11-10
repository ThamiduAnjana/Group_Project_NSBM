<!DOCTYPE html>
<html>
<head>
	<title>ShopingCard.LK</title>
</head>
<body>

<?php include 'header.php' ?>

<div class="container">
	<ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right" aria-hidden="true">
        </i> test / test</li>
    </ol>
	<div class="row">
		<div class="col-5">
			<div class="card" style="height: 35rem;">
				<img class="card-img-top" src="images/Item_01.png" alt="Card image cap">
				<div class="card-body">
				   	<h5 class="card-title">Images</h5>
				   	<div class="card-group">
				   		<a href=""><img style="height: 5rem;" src="images/Item_01.png" alt="Card image cap"></a>
				   		<a href=""><img style="height: 5rem;" src="images/Item_01.png" alt="Card image cap"></a>
				   		<a href=""><img style="height: 5rem;" src="images/Item_01.png" alt="Card image cap"></a>
				   		<a href=""><img style="height: 5rem;" src="images/Item_01.png" alt="Card image cap"></a>
				   	</div>
				</div>
			</div>
		</div>
		<div class="col-7">
			<div class="card" style="height: 35rem;">
				<div class="card-body">
				   	<h5 class="card-title">Card title</h5>
				    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				    <hr>
				    <div class="row">
					    <div class="col-2">
					    	Quantity :
					    </div>
					    <div class="col-5">
					    	<input type="text" class="form-control" id="qty" value="1" style="width: 150px;height: 35px;">
					    </div>
					    <div class="col-3">
					    	<small class="text-muted">9 available / 2 sold</small>
					    </div>
					</div>
					<br>
					<div class="row">
					    <div class="col-2">
					    	Price :
					    </div>
					    <div class="col-5">
					    	<h4><span class="badge badge-danger">RS.150.00</span>
					    	<small>
                                <span class='badge badge-secondary' style='text-decoration: line-through;'>RS.300.00</span>
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

<?php include 'footer.php' ?>

</body>
</html>