<?php $connection = mysqli_connect("localhost", "root", "", "core2_db"); ?>

<!-- End plugin js for this page -->
<?php include "partials/head.php"; ?>

	<div class="main-wrapper">

  <?php include "partials/sidebar.php";?>
	
		<div class="page-wrapper">
					
			<?php include "partials/navbar.php";?>

      <?php 
        if(isset($_GET['page'])) {
          $page = $_GET['page'];
          if($page == 'add') {
      ?>

        <!-- ADD CONTENT -->
        <div class="page-content">
          <div class="row d-flex justify-content-center">
            <div class="col-7">
                <div class="card">
                  <form method="post" action="booking.php">
                    <div class="card-header">
                        <h2>New Booking</h2>
                    </div>
                    <div class="card-body">
                      <div class="form-group mb-2">
                         <label><b>Pick-up location</b> <span class="text-danger">*</span></label>
                         <input class="form-control" type="text" name="pickup" placeholder="Enter Pick-up location" required>
                      </div>
                      <div class="form-group mb-2">
                        <label><b>Drop-off location</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="dropoff" placeholder="Enter Drop-off location" required>
                      </div>
                      <div class="form-group mb-2">
                        <label><b>Driver-ID</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="driverid" placeholder="Enter Driver-ID" required>
                      </div>
                      <div class="form-group mb-2">
                        <label><b>Distance (KM)</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" name="distance" placeholder="Enter Distance (e.g: 1)" required id="inputNumber">
                      </div>
                      <div class="form-group">
                        <label><b>Fare (₱45.00/KM)</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="fare" placeholder="Enter distance value first" readonly id="result">
                      </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn  btn-primary" type="submit" name="create">Submit</button>
                        <a href="booking.php" class="btn btn-secondary">Back</a>
                    </div>
                  </form>
                </div>
            </div>
          </div>
      </div>
      <!-- END ADD CONTENT -->


      <?php } else { 

        $id = $page; 
        $fetch = mysqli_query($connection, "SELECT * FROM core2_booking_info WHERE id='$id'");
        $row = mysqli_fetch_array($fetch);
      ?>


      <!-- UPDATE CONTENT -->
      <div class="page-content">
          <div class="row d-flex justify-content-center">
            <div class="col-7">
                <div class="card">
                  <form method="post" action="booking.php">
                    <input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id">
                    <div class="card-header">
                        <h2>Update Booking</h2>
                    </div>
                    <div class="card-body">
                      <div class="form-group mb-2">
                         <label><b>Pick-up location</b> <span class="text-danger">*</span></label>
                         <input class="form-control" type="text" name="pickup" required value="<?php echo $row['pickup']; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label><b>Drop-off location</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="dropoff" required value="<?php echo $row['dropoff']; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label><b>Driver-ID</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="driverid" placeholder="Enter Distance (e.g: 1)" required value="<?php echo $row['driverid']; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label><b>Distance (KM)</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" name="distance" placeholder="Enter Distance (e.g: 1)" required value="<?php echo $row['distance']; ?>" id="inputNumber">
                      </div>
                      <div class="form-group">
                        <label><b>Fare (₱45.00/KM)</b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="fare" placeholder="Enter distance value first" readonly value="<?php echo $row['fare']; ?>" id="result">
                      </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn  btn-primary" type="submit" name="update">Update</button>
                        <a href="booking.php" class="btn btn-secondary">Back</a>
                    </div>
                  </form>
                </div>
            </div>
          </div>
      </div>
      <!-- END UPDATE CONTENT -->


      <?php } } else { ?>

        <div class="page-content">
            <div class="text-center p-4">
              <h1>404 Page Not Found</h1>
            </div>
        </div>

      <?php } ?>

			


  
<!-- partial:partials/_footer.html -->
<?php include "partials/footer.php"; ?>



<script>
  // Get the input and result elements
  const inputNumber = document.getElementById("inputNumber");
  const result = document.getElementById("result");

  // Add an event listener to the input field
  inputNumber.addEventListener("input", function() {
    // Get the input value
    const inputValue = inputNumber.value;

    // Multiply the input value by 45 and set the result field value
    result.value = inputValue * 45;
  });
</script>