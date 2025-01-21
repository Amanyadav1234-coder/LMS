<?php
session_start();
if($_SESSION['user']=="")
{
  session_destroy();
  header('location:login.php');
 
}
$email = $_SESSION['user'] ;
$usertype = $_SESSION['user_type'] ;
// echo $_SESSION['user_type'];
?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path=""
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Student Dashboard - Student Info</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="#"
      rel="stylesheet" />

    <link rel="stylesheet" href="vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
       <?php include("studentmenu.php")?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
        <div class="col-sm-8 mx-auto shadow-lg p-3 my-5">
        <?php
if(isset($_POST['submit']))
{
$news=$_POST['news'];
$tname=$_POST['tname'];
$connect=mysqli_connect("localhost","root","","lsm");
$query="insert into feedback(news,name,date)values('$news','$tname',now())";
mysqli_query($connect,$query);
if(mysqli_affected_rows($connect)>0)
{
  echo"<script>alert('News and Event forward Successfully')</script>";
}
else
{
  echo"<script>alert('Not Submit Please try Again')</script>";
}
}
?>
          <h1 class="text-center">Add FeedBack And Complent</h1>
          <form method="post" >
            <div class="row">
              <div class="col">
                <label for="">Enter Messages</label>
                <textarea name="news" id=""rows="3" class="form-control my-2" required></textarea>
              </div>
            </div>
            <div class="row my-4">
              <div class="col">
                <label for="">Enter Your Name:</label>
                <input type="text" name="tname" id="" class="form-control my-1" required>
              </div>
            </div>
              <div class="col">
                <label for="">Choice Messages Type: </label>
                <select name="mess_type" id="" class="form-select my-2" required>
                    <option value="">---select type---</option>
                    <option value="feedback">FeedBack</option>
                    <option value="complent">Complent</option>
                </select>
              </div>
          
            <div class="row">
              <div class="col">
                <input type="submit" id="" class="form-control btn btn-outline-primary  mb-5 mt-3" name="submit" value="submit">
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-8 mx-auto">

        </div>
       </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with Aman Yadav
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
                </div>
                <div class="d-none d-lg-inline-block">
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="vendor/libs/jquery/jquery.js"></script>
    <script src="vendor/libs/popper/popper.js"></script>
    <script src="vendor/js/bootstrap.js"></script>
    <script src="vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

    <!-- Page JS -->
    <script src="js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
