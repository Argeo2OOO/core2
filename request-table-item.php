<?php
session_start();
include('dbConnection.php');
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

  <title>Transport Network Vehicle System - Dashboard</title>

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

    <!-- partial:partials/_sidebar.html -->
    <?php include('sidebar-reqitems-table.php') ?>
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->

      <!-- partial -->

      <div class="page-content">
        <div class="row">

          <div class="col-55 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-4 col-xl-6 mt-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Logistic 2</h5>
                        <p class="card-text mb-3">This is where all the item request displayed.</p>
                        <a href="#" class="btn btn-primary" id="log2btn">Visit</a>
                      </div>
                    </div>
                  </div>
                  <script>
                    const log2Button = document.querySelector('#log2btn');

                    log2Button.addEventListener('click', () => {
                      const password = window.prompt('Please enter the password:');

                      // Check if the entered password is correct
                      if (password === 'log2xdd') {
                        // Redirect the user to the desired page
                        window.location.href = 'http://localhost/TNVS/demo1/log2-item.php';
                      } else {
                        alert('Incorrect password! Please try again.');
                      }
                    });
                  </script>
                  <div class="col-12 col-md-4 col-xl-6 mt-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Core 1</h5>
                        <p class="card-text mb-3">This is where all the item request displayed.</p>
                        <a href="#" class="btn btn-primary" id="core1btn">Visit</a>
                      </div>
                    </div>
                  </div>
                  <script>
                    const core1Button = document.querySelector('#core1btn');

                    core1Button.addEventListener('click', () => {
                      const password = window.prompt('Please enter the password:');

                      // Check if the entered password is correct
                      if (password === 'core1xdd') {
                        // Redirect the user to the desired page
                        window.location.href = 'http://localhost/TNVS/demo1/core1-item.php';
                      } else {
                        alert('Incorrect password! Please try again.');
                      }
                    });
                  </script>
                  <div class="col-12 col-md-4 col-xl-6 mt-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Core 2</h5>
                        <p class="card-text mb-3">This is where all the item request displayed.</p>
                        <a href="#" class="btn btn-primary" id="core2btn">Visit</a>
                      </div>
                    </div>
                  </div>
                  <script>
                    const core2Button = document.querySelector('#core2btn');

                    core2Button.addEventListener('click', () => {
                      const password = window.prompt('Please enter the password:');

                      // Check if the entered password is correct
                      if (password === 'core2xdd') {
                        // Redirect the user to the desired page
                        window.location.href = 'http://localhost/TNVS/demo1/core2-item.php';
                      } else {
                        alert('Incorrect password! Please try again.');
                      }
                    });
                  </script>
                  <div class="col-12 col-md-4 col-xl-6 mt-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Human Resource 1</h5>
                        <p class="card-text mb-3">This is where all the item request displayed.</p>
                        <a href="#" class="btn btn-primary" id="hr1btn">Visit</a>
                      </div>
                    </div>
                  </div>
                  <script>
                    const hr1Button = document.querySelector('#hr1btn');

                    hr1Button.addEventListener('click', () => {
                      const password = window.prompt('Please enter the password:');

                      // Check if the entered password is correct
                      if (password === 'hr1xdd') {
                        // Redirect the user to the desired page
                        window.location.href = 'http://localhost/TNVS/demo1/hr1-item.php';
                      } else {
                        alert('Incorrect password! Please try again.');
                      }
                    });
                  </script>
                  <div class="col-12 col-md-4 col-xl-6 mt-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Human Resource 2</h5>
                        <p class="card-text mb-3">This is where all the item request displayed.</p>
                        <a href="#" class="btn btn-primary" id="hr2btn">Visit</a>
                      </div>
                    </div>
                  </div>
                  <script>
                    const hr2Button = document.querySelector('#hr2btn');

                    hr2Button.addEventListener('click', () => {
                      const password = window.prompt('Please enter the password:');

                      // Check if the entered password is correct
                      if (password === 'hr2xdd') {
                        // Redirect the user to the desired page
                        window.location.href = 'http://localhost/TNVS/demo1/hr2-item.php';
                      } else {
                        alert('Incorrect password! Please try again.');
                      }
                    });
                  </script>
                  <div class="col-12 col-md-4 col-xl-6 mt-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Administrative</h5>
                        <p class="card-text mb-3">This is where all the item request displayed.</p>
                        <a href="#" class="btn btn-primary" id="adminbtn">Visit</a>
                      </div>
                    </div>
                  </div>
                  <script>
                    const adminButton = document.querySelector('#adminbtn');

                    adminButton.addEventListener('click', () => {
                      const password = window.prompt('Please enter the password:');

                      // Check if the entered password is correct
                      if (password === 'adminxdd') {
                        // Redirect the user to the desired page
                        window.location.href = 'http://localhost/TNVS/demo1/admin-item.php';
                      } else {
                        alert('Incorrect password! Please try again.');
                      }
                    });
                  </script>
                  <div class="col-12 col-md-4 col-xl-6 mt-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Finance</h5>
                        <p class="card-text mb-3">This is where all the item request displayed.</p>
                        <a href="#" class="btn btn-primary" id="finbtn">Visit</a>
                      </div>
                    </div>
                  </div>
                  <script>
                    const finButton = document.querySelector('#finbtn');

                    finButton.addEventListener('click', () => {
                      const password = window.prompt('Please enter the password:');

                      // Check if the entered password is correct
                      if (password === 'finxdd') {
                        // Redirect the user to the desired page
                        window.location.href = 'http://localhost/TNVS/demo1/fin-item.php';
                      } else {
                        alert('Incorrect password! Please try again.');
                      }
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

      </div>

      <!-- partial:partials/_footer.html -->
      <?php include('footer.php') ?>
      <!-- partial -->

    </div>
  </div>

  <!-- core:js -->
  <script src=" ../assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
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