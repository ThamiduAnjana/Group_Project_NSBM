<!-- Data Table of Item Details(Supplier) START-->
	<div data-spy="scroll" class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Item Name</th>
					<th scope="col">Item Quantity</th>
					<th scope="col">Item Amount</th>
					<th scope="col">Date</th>
				</tr>
			</thead>
			<tbody>
				<!-- Get data in databse for table (Start) -->
				<?php 
					//Add database into index.php
					require_once("../database/connect.php");
					//first query (that you want to select)
					$query = "SELECT * FROM perchase_history WHERE u_id = $uid ORDER BY it_code DESC;";
					//query execute
					$result = mysqli_query($db, $query);  
					//Add while loop for first column data display and after display next column
					while ($row = mysqli_fetch_array($result)) {
						?>
						<!-- Get data in databse for table (End) -->
						<tr>
							<td><?= $row['it_name']?></td>
							<td><?= $row['it_qty']?></td>
							<td><?= $row['it_amount']?></td>
							<td><?= $row['it_date']?></td>
						</tr>
						<?php
					} 
					?>
			</tbody>
		</table>
	</div>
<!-- Data Table of Item Details(Supplier) END-->