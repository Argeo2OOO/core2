<?php
$connection = mysqli_connect("localhost", "root", "", "core2_db");

if(!$connection) {
  echo '<script>alert("Cannot connect to the database")</script>';
}


// SAVE DATA
if(isset($_POST['create'])){
    $pickup   = mysqli_real_escape_string($connection, $_POST['pickup']);
    $dropoff  = mysqli_real_escape_string($connection, $_POST['dropoff']);
    $driverid = mysqli_real_escape_string($connection, $_POST['driverid']);
    $distance = mysqli_real_escape_string($connection, $_POST['distance']);
    $fare     = mysqli_real_escape_string($connection, $_POST['fare']);
 
    $queryCreate = mysqli_query($connection, "INSERT INTO core2_booking_info (pickup, dropoff, driverid, distance, fare) VALUES ('$pickup', '$dropoff','$driverid', '$distance', '$fare')");
    if($queryCreate) {
       echo '<script>alert("Record has been saved!")</script>';
       echo '<script>window.location.href = "booking.php"</script>';
    } else {
       echo '<script>alert("Something went wrong while saving the record!")</script>';
       echo '<script>window.location.href = "booking.php"</script>'; 
    }
}


// UPDATE DATA
if(isset($_POST['update'])) {
    $id       = mysqli_real_escape_string($connection, $_POST['id']);
    $pickup   = mysqli_real_escape_string($connection, $_POST['pickup']);
    $dropoff  = mysqli_real_escape_string($connection, $_POST['dropoff']);
    $driverid = mysqli_real_escape_string($connection, $_POST['driverid']);
    $distance = mysqli_real_escape_string($connection, $_POST['distance']);
    $fare     = mysqli_real_escape_string($connection, $_POST['fare']);

    $update = mysqli_query($connection, "UPDATE core2_booking_info SET pickup='$pickup', dropoff='$dropoff', driverid='$driverid', distance='$distance', fare='$fare' WHERE id='$id'");
    if($update) {
       echo '<script>alert("Record has been updated!")</script>';
       echo '<script>window.location.href = "booking.php"</script>';
    } else {
       echo '<script>alert("Something went wrong while updating the record!")</script>';
       echo '<script>window.location.href = "booking.php"</script>'; 
    }
}


// DELETE DATA
if(isset($_POST['delete'])) {
    $id       = mysqli_real_escape_string($connection, $_POST['id']);
    $deleee = mysqli_query($connection, "DELETE FROM core2_booking_info WHERE id='$id'");
    if($deleee) {
       echo '<script>alert("Record has been deleted!")</script>';
       echo '<script>window.location.href = "booking.php"</script>';
    } else {
       echo '<script>alert("Something went wrong while deleting the record!")</script>';
       echo '<script>window.location.href = "booking.php"</script>'; 
    }
}

?>




<!-- End plugin js for this page -->
<?php include "partials/head.php"; ?>

	<div class="main-wrapper">

  <?php include "partials/sidebar.php";?>
	
		<div class="page-wrapper">
					
			<?php include "partials/navbar.php";?>

			<div class="page-content">
        <h2 class="text-muted">Booking records</h2>
        <div class="card p-3">
          <div class="table-responsive">
            <a class="btn btn-primary mb-3" href="booking_mgmt.php?page=add">New booking</a> 
            <table class="table table-hover table-bordered text-dark table-sm" id="dataTableExample">

              <thead>
                <tr>
                 <th>ID</th>
                 <th>PICK-UP LOCATION</th>
                 <th>DROP-OFF LOCATION</th>
                 <th>DRIVER-ID</th>
                 <th>ACTION</th>
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
                  <td><?php echo $row['pickup']; ?></td>
                  <td><?php echo $row['dropoff']; ?></td>
                  <td><?php echo $row['driverid']; ?></td>
                  <td>
                    <a class="btn btn-success" href="booking_mgmt.php?page=<?php echo $row['id']; ?>">Update</a>
                    <!-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update">Update</button> -->
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['id']; ?>">Delete</button>
                  </td>
                </tr>
                <?php include 'booking_delete.php'; } } else { ?>
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
<?php include "partials/footer.php"; ?>



