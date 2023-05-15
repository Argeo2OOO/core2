<?php include "partials/head.php"; ?>
	<div class="main-wrapper">
		<?php include "partials/sidebar.php";?>
			<div class="page-wrapper">
			<?php include "partials/navbar.php";?>
			<div class="page-content">
				<h1>PAYMENT</h1>
				<hr>
				<form action="process_payment.php" method="post">
					<div class="form-group mb-3">
						<label for="amount"><b>Driver's name</b></label>
						<input type="text" class="form-control" name="driverName" placeholder="Enter Driver's name..." required>
					</div>
					<div class="form-group mb-3">
						<label for="amount"><b>Customer's name</b></label>
						<input type="text" class="form-control" name="customerName" placeholder="Enter Customer's name..." required>
					</div>
					<div class="form-group mb-3">
						<label for="amount"><b>Payment amount</b></label>
						<input type="text" class="form-control" name="amount" placeholder="Enter Payment amount..." required>
					</div>

					<button type="submit" class="btn btn-primary" name="payment">Pay Now</button>
				</form>
			</div>
			<!-- partial:partials/_footer.html -->
			<?php include "partials/footer.php";?>
			<!-- partial -->
</html>