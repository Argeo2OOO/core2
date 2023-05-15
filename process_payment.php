



<?php 
  $connection = mysqli_connect("localhost", "root", "", "core2_db");

  if(!$connection) {
    echo '<script>alert("Cannot connect to the database")</script>';
  }


  if(isset($_POST['payment'])) {
    $driverName   = mysqli_real_escape_string($connection, $_POST['driverName']);
    $customerName = mysqli_real_escape_string($connection, $_POST['customerName']);
    $amount       = mysqli_real_escape_string($connection, $_POST['amount']);
    $datePaid     = date('Y-m-d H:i');


    $save = mysqli_query($connection, "INSERT INTO core2_payment_info (driverName, customerName, paymentAmount, datePaid) VALUES ('$driverName', '$customerName', '$amount', '$datePaid')");
    if($save) {
       echo '<script>alert("You have successfully paid the driver.")</script>';
       echo '<script>window.location.href = "paymentInfo.php"</script>';
    } else {
       echo '<script>alert("Something went wrong while paying the driver!")</script>';
       echo '<script>window.location.href = "payment.php"</script>'; 
    }
  }
  
?>