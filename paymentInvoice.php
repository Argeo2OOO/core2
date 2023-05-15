<?php 
	include "partials/head.php"; 
	$connection = mysqli_connect("localhost", "root", "", "core2_db");

	if(!$connection) {
	  echo '<script>alert("Cannot connect to the database")</script>';
	}

	date_default_timezone_set('Asia/Manila');
	$date_today  = date('Y-m-d');

	if(isset($_GET['payment_id'])) {
		$payment_id = $_GET['payment_id'];
		$getDriver = mysqli_query($connection, "SELECT * FROM core2_payment_info WHERE payment_id='$payment_id'");
		$driverName = mysqli_fetch_array($getDriver);
		$dName = $driverName['driverName'];
?>
	<div class="main-wrapper">
		<?php include "partials/sidebar.php";?>
			<div class="page-wrapper">
			<?php include "partials/navbar.php";?>
			<div class="page-content">
				<h1>INVOICE</h1>
				<hr>
				<h5><b>Driver's name:</b> <?php echo $dName; ?></h5>
				<p class="text-muted"><b>Date:</b> <?php echo date("F d, Y", strtotime($date_today)); ?></p>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Customer's name</th>
							<th>Date paid</th>
							<th>Amount paid</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						   $i = 1;

						   // DISPLAY TOTAL EARNINGS OF ALL THE DRIVERS
						   $total = mysqli_query($connection, "SELECT *, SUM(paymentAmount) as pera FROM core2_payment_info WHERE datePaid='$date_today' AND driverName='$dName'");
						   $rowTotal = mysqli_fetch_array($total);

                           $fetch = mysqli_query($connection, "SELECT * FROM core2_payment_info WHERE datePaid='$date_today' AND driverName='$dName'");
                           if(mysqli_num_rows($fetch) > 0) {
                           		while ($row = mysqli_fetch_array($fetch)) {
                        ?>		
                        	<tr>
                        		<td><?php echo $i++; ?></td>
                        		<td><?php echo $row['customerName']; ?></td>
                        		<td><?php echo date("F d, Y", strtotime($row['datePaid'])); ?></td>
                        		<td><b>₱ <?php echo number_format($row['paymentAmount'], 2, '.', ','); ?></b></td>
                        	</tr>
                        <?php } } else { ?>
                           	<tr>
                           		<td colspan="100%" class="text-center">No record found</td>
                           	</tr>
                        <?php } ?>
					</tbody>
					<tfoot>
						<tr>
                    		<td colspan="3" class="text-center"><b>Total</b></td>
                       		<td><b>₱ <?php echo number_format($rowTotal['pera'], 2, '.', ','); ?></b></td>
                    	</tr>
					</tfoot>
				</table>
			</div>


	<?php } else { ?>


			<div class="main-wrapper">
			<?php include "partials/sidebar.php";?>
				<div class="main-wrapper">
			<?php include "partials/sidebar.php";?>
				<div class="page-wrapper">
				<?php include "partials/navbar.php";?>
				<div class="page-content text-center d-flex ">
					<h3 class="text-center"><b>404</b> Page Not Found</h3>
				</div>


	<?php } ?>
<!-- partial:partials/_footer.html -->
<?php include "partials/footer.php";?>
<!-- partial -->
</html>