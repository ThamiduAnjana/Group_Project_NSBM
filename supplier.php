<?php include 'header.php' ?>
<br>
<div class="container">
	<div class="row"> <!-- Text Boxes to insert data (Supplier) START-->
		<div class="card">
		  <div class="card-body">
		    <form>
		      <div class="row"><!-- 1 row Text Boxes to insert data (Supplier) START-->
			    <div class="col">
			      	<input type="text" class="form-control" placeholder="Item Code" style="width: 35rem;">
			    </div>
			    <div class="col">
					<button type="button" class="btn btn-success">Search</button>
			    </div>
			  </div><!-- 1 row Text Boxes to insert data (Supplier) END-->
			  <hr>
		      <div class="row"><!-- 2 row Text Boxes to insert data (Supplier) START-->
			    <div class="col">
			      	<input type="text" class="form-control" placeholder="Item Code" style="width: 10rem;">
			    </div>
			    <div class="col">
					<button type="button" class="btn btn-success">Insert</button>
			      	<button type="button" class="btn btn-primary">Update</button>
					<button type="button" class="btn btn-danger">Delete</button>
			    </div>
			  </div><!-- 2 row Text Boxes to insert data (Supplier) END-->
			  <br>
			  <div class="row"><!-- 3 row Text Boxes to insert data (Supplier) START-->
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Item name" style="width: 20rem;">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Item Color" style="width: 20rem;">
			    </div>
			  </div><!-- 3 row Text Boxes to insert data (Supplier) END-->
			  <br>
			  <div class="row"><!-- 4 row Text Boxes to insert data (Supplier) START-->
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Item Quantity" style="width: 10rem;">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Item Price" style="width: 15rem;">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Item Update Price" style="width: 12rem;">
			    </div>
			  </div><!-- 4 row Text Boxes to insert data (Supplier) END-->
			  <br>
			  <div class="row"><!-- 5 row Text Boxes to insert data (Supplier) START-->
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Item Description" style="width: 43rem;">
			    </div>
			  </div><!-- 5 row Text Boxes to insert data (Supplier) END-->
			</form>
		  </div>
		</div>
		<div class="card">
		  <div class="card-body">
		  	<form>
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Insert Image [1]</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Insert Image [2]</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Insert Image [3]</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Insert Image [4]</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1">
			  </div>
			</form>
		  </div>
		</div>
	</div><!-- Text Boxes to insert data (Supplier) END-->
	<br>
	<h3><span class="badge badge-secondary">Data Table Of Item Details ..</span></h3>
	<div class="row"><!-- Data Table of Item Details(Supplier) START-->
		<div class="table-responsive">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Item Code</th>
			      <th scope="col">Item Name</th>
			      <th scope="col">Item Quantity</th>
			      <th scope="col">Item Price</th>
			      <th scope="col">I.U. Price</th>
			      <th scope="col">Item Color</th>
			      <th scope="col">Image 1</th>
			      <th scope="col">Image 2</th>
			      <th scope="col">Image 3</th>
			      <th scope="col">Image 4</th>
			      <th scope="col">Item Description</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<!-- Get data in databse for table (Start) -->
				<?php 
					//Add database into index.php
					require_once("database/connect.php");
					//first query (that you want to select)
					$query = "SELECT `it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating` FROM `items_details`;";
					//query execute
					$result = mysqli_query($db, $query);  
					//Add while loop for first column data display and after display next column
					while ($row = mysqli_fetch_array($result)) { 
				?>
				<!-- Get data in databse for table (End) -->
			    <tr>
			      <td><?= $row['it_code']?></td>
			      <td><?= $row['it_name']?></td>
			      <td><?= $row['it_qty']?></td>
			      <td><?= $row['it_price']?></td>
			      <td><?= $row['it_upprice']?></td>
			      <td><?= $row['it_color']?></td>
			      <td><?= $row['it_img1']?></td>
			      <td><?= $row['it_img2']?></td>
			      <td><?= $row['it_img3']?></td>
			      <td><?= $row['it_img4']?></td>
			      <td><?= $row['it_description']?></td>
			    </tr>
			    <?php 
					} 
				?>
			  </tbody>
			</table>
		</div>
	</div><!-- Data Table of Item Details(Supplier) END-->
</div>

<?php include 'footer.php' ?>