<?php 
	$connection = mysqli_connect("localhost", "root", "", "core2_db"); 
	include "partials/head.php"; 
?>

	<div class="main-wrapper">

  	<?php include "partials/sidebar.php";?>
	
		<div class="page-wrapper">
					
		<?php include "partials/navbar.php";?>

		<div class="page-content">
	        <h2 class="text-muted">Transport analytics</h2>
	        <div class="card p-3">
	          <div class="table-responsive">
	            <table class="table table-hover table-bordered text-dark " id="dataTableExample">
	              <thead>
	                <tr>
	                 <th>#</th>
	                 <th>DISTANCE (KM)</th>
	                 <th>FARE (₱ 45.00/KM)</th>
	                </tr>
	              </thead>
	              <tbody>
	                <?php 
                	  $i = 1;
	                  $fetch = mysqli_query($connection, "SELECT * FROM core2_booking_info");
	                  if(mysqli_num_rows($fetch) > 0) {
	                    while($row = mysqli_fetch_array($fetch)) {
	                ?>
	                <tr>
	                  <td><?php echo $i++; ?></td>
	                  <td><?php echo $row['distance']; ?> <b>km</b></td>
	                  <td>₱ <?php echo number_format($row['fare'], 2, '.', ','); ?></td>
	                </tr>
	                <?php } } else { ?>
	                  <tr class="text-center">
						  
	                    <td colspan="100%">No record found</td>
	                  </tr>
	                <?php
	                  }
	                ?>
	              </tbody>
	            </table>
	          </div>
	        </div>
        </div>
			

<!-- partial:partials/_footer.html -->
<?php include "partials/footer.php";?>
<!-- partial -->
		
		 