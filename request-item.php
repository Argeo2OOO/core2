<?php
include('dbConnection.php');
session_start();

if (isset($_POST['Add'])) {
    if (($_POST['department'] == "") || ($_POST['name'] == "") || ($_POST['item_name'] == "") || ($_POST['category'] == "") || ($_POST['quantity'] == "") || ($_POST['purpose'] == "") || ($_POST['location'] == "") || ($_POST['process'] == "")) {
        // msg displayed if required field missing
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    } else {
        // Assigning User Values to Variable
        $department = $_POST['department'];
        $rname = $_POST['name'];
        $itemn = $_POST['item_name'];
        $category = $_POST['category'];
        $quantity = ($_POST['quantity']);
        $purpose = $_POST['purpose'];
        $location = ($_POST['location']);
        $delivery = ($_POST['process']);
        $status = "Pending";
        $sql = "INSERT INTO log1_wh_itemreq (department, name ,item_name, category, quantity, purpose, location, process, status) VALUES ('$department', '$rname', '$itemn', '$category', '$quantity', '$purpose', '$location', '$delivery', '$status')";


        if (mysqli_query($connection, $sql)) {
            // below msg display on form submit success
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Request Submitted Successfully</div>';
            // include('create-project.php');
        } else {
            // below msg display on form submit failed
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit Your Request </div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Transport Network Vehicle System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="../assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/vendors/sweetalert2/sweetalert2.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="../assets/images/lulan.png" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <span class="noble-ui-logo d-block mb-2">Request Item</span>




                                        <?php if (isset($msg)) {
                                            echo $msg;
                                        } ?>
                                        <form action="" method="POST"> <!-- To be able to add all the inputted data -->
                                            <div class="form-group col-md-15 mt-md-3">
                                                <label for="department">Department</label>
                                                <select class="form-select form-select-md" aria-label=".form-select-sm example" name="department" required>
                                                    <option selected>--Select your Department--</option>
                                                    <option value="Logistic 2">Logistic 2</option>
                                                    <option value="Administrative">Administrative</option>
                                                    <option value="Finance">Finance</option>
                                                    <option value="Human Resource 1">Human Resource 1</option>
                                                    <option value="Human Resource 2">Human Resource 2</option>
                                                    <option value="Core 1">Core 1</option>
                                                    <option value="Core 2">Core 2</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-15 mt-md-3">
                                                <label for="name">Requestor Name</label>
                                                <input type="text" class="form-control" id="requestn" placeholder="Enter your name" name="name" required>
                                            </div>
                                            <div class="form-group col-md-15 mt-md-3">
                                                <label for="item">Item Name</label>
                                                <input type="text" class="form-control" id="itemn" placeholder="Item Name" name="item_name">
                                            </div>
                                            <div class="form-group col-md-15 mt-md-3">
                                                <label for="category">Category</label>
                                                <select class="form-select form-select-md" aria-label=".form-select-sm example" name="category" required>
                                                    <option selected>--Category--</option>
                                                    <option value="Items">Items</option>
                                                    <option value="Vehicles">Vehicles</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-15 mt-md-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="number" class="form-control" id="quantity" placeholder="Item Quantity" name="quantity" required>
                                            </div>
                                            <div class="form-group col-md-15 mt-md-3"> <!-- mt-md-3 to expand the spaces-->
                                                <label for="purpose">Request Purpose</label>
                                                <textarea class="form-control" id="purpose" rows="5" placeholder="Reason" name="purpose" required></textarea>
                                            </div>
                                            <div class="form-group col-md-15 mt-md-3">
                                                <label for="location">Location</label>
                                                <input type="text" class="form-control" id="location" placeholder="Deparment Location" name="location" required>
                                            </div>
                                            <div class="form-group col-md-15 mt-md-3">
                                                <label for="delivery">Mode of Process</label>
                                                <select class="form-select form-select-md" aria-label=".form-select-sm example" name="process" required>
                                                    <option value="Pick-Up">Pick-Up</option>
                                                    <option value="Delivery">Delivery</option>
                                                </select>
                                            </div>
                                            <div class="col-md-15 mt-md-3" style="text-align: center;">
                                                <button type="submit" class="btn btn-primary" name="Add">Submit</button>
                                                <a href="request-table-item.php" class="btn btn-secondary active" role="button" aria-pressed="true">View All Requested Items</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- partial:partials/_footer.html -->

                    <!-- partial -->

                </div>
            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="../assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="../assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="../assets/vendors/feather-icons/feather.min.js"></script>
    <script src="../assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard-light.js"></script>
    <script src="../assets/js/datepicker.js"></script>
    <!-- End custom js for this page -->

</body>

</html>