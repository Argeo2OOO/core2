<?php include "partials/head.php"; ?>
<div class="main-wrapper">
  <?php include "partials/sidebar.php";?>
  <div class="page-wrapper">
    <?php include "partials/navbar.php";?>
    <div class="page-content">
      <h1>Invoices</h1>
      <hr>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Invoice ID</th>
            <th>Driver's Name</th>
            <th>Customer's Name</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Retrieve invoice data from the database and display it in the table
            $conn = mysqli_connect("localhost", "root", "", "core2_db");
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM core2_payment_info";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["payment_id"] . "</td>";
                echo "<td>" . $row["driverName"] . "</td>";
                echo "<td>" . $row["customerName"] . "</td>";
                echo "<td>" . $row["paymentAmount"] . "</td>";
                echo "<td>" . $row["datePaid"] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='5'>No invoices found.</td></tr>";
            }
            mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>
    <!-- partial:partials/_footer.html -->
    <?php include "partials/footer.php";?>
    <!-- partial -->
  </div>
</div>
</html>
