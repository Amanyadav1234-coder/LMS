<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System</title>
    <link rel="shortcut icon" href="img/elearning-logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  if(isset($_POST['sub']))
  {
    $connect=mysqli_connect("localhost","root","","lsm");
 
  $i=1;
  $user_id=$_POST['user_id'];
  $user_type=$_POST['user_type'];
  $user_password=$_POST['user_password'];
  // echo $user_id;
  $query="select * from registerinfo where userid='$user_id' and password='$user_password'";
  $res=mysqli_query($connect,$query);

 if( $row = mysqli_fetch_array($res))
 {
   
  if($user_type=="admin" && $user_password==$row['password'])
  {
    header('location:desh.php');
   $_SESSION['user'] = $user_id;
   $_SESSION['user_type'] = $user_type; 
  }
   
  elseif($user_type=="user" && $user_password==$row['password'])
  {
    header('location:studentdesh.php');
   $_SESSION['user'] = $user_id;
   $_SESSION['user_type'] = $user_type; 
  }
   
 }
 else{
  echo "<script>alert('Your Password is Incorrect');window.location.href='login.php';</script>";
 }
  }
  ?>
    <!-- outer start -->
     <div class="container-fluid">
        <div class="row sticky-top bg-light">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand text-sky ps-4" href="index.html"><i class="fa-solid fa-book fs-2 me-2 text-sky"></i>eLEARNING</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active px-4 py-3" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active px-4 py-3" aria-current="page" href="about.php">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active px-4 py-3" aria-current="page" href="login.php">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active px-4 py-3" aria-current="page" href="register.php">Register</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active ps-4 py-3" aria-current="page" href="contact.php">contact us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active ps-4" aria-current="page" href="#">
                              <button type="button" class="btn btn-info text-light">Join Now <i class="fa-solid fa-arrow-right text-light"></i></button>
                            </a>
                          </li>
                         
                          
                      </div>
                    </div>
                  </nav>
            </div>
           
        </div>
        <div class="row my-5 ">
            <div class="col-sm-10 mx-auto">
                <div class="card mb-3 sh" >
                   <form action="" method="post">
                   <div class="row g-0">
                      <div class="col-md-6 bg-sky p-5 ">
                        <h1 class=" text-light lh ms-5">Hello, Welcome!</h1>
                       <h4 class="text-center"> <a href="register.html" class="text-decoration-none text-light">Don't have an account</a></h4>
                      <a href="register.html" class="text-decoration-none"> <p class="text-center mt-4"> <button class="btn btn-outline-light px-5">Register</button></p></a>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body rounded-5">
                          <h2 class="card-title ms-5 mt-5">Login Form</h2>
                          <form class="p-5">
                            <div class="mb-3">
                              <label for="un" class="form-label"><i class="fa-solid fa-user fs-5"></i> Username</label>
                              <input type="text" class="form-control" id="u" aria-describedby="emailHelp" name="user_id">
                             
                            </div>
                            <div class="mb-4">
                              <label for="pass" class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
                              <input type="password" class="form-control" id="pass" placeholder="Enter Your Password" name="user_password">
                            </div>
                            <div class="mb-4">
                              <label for="pass" class="form-label"><i class="fa-solid fa-lock"></i> User Type</label>
                              <select name="user_type" id="" class="form-select">
                                <option value="">--Select type---</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                              </select>
                            </div>
                            <div class="mb-3">
                             <h6 class="text-center"> <a href="#" class="text-decoration-none text-dark">Forgot password</a></h6>
                            </div>
                            <button type="submit" class="btn btn-primary text-blue form-control mt-2 border-0" onclick="login()" name="sub">Login</button>
                            <h6 class="mt-3 text-center">or login with social platforms</h6>
                            <p class="text-center mt-3 cha"><i class="fa-brands fa-instagram bg-light fs-4 p-2 rounded-4 text-danger border border-danger sh"></i>
                                <i class="fa-brands fa-twitter bg-light fs-4 p-2 rounded-4 text-info border border-info sh"></i>
                                <i class="fa-brands fa-facebook bg-light fs-4 p-2 rounded-4 text-primary border border-primary sh"></i>
                                <i class="fa-brands fa-google bg-light fs-4 p-2 rounded-4 text-success border border-dark sh"></i>
                                <i class="fa-brands fa-telegram bg-light fs-4 p-2 rounded-4 text-primary border border-primary sh"></i></p>
                            
                          </form>
                        </div>
                      </div>
                    </div>
                   </form>
                  </div>
            </div>
        </div>
       <div class="row back-img3 text-light">
        <div class="col-sm-11 mx-auto">
          <div class="row mt-5">
            <div class="col-sm-12">
              <p class="text-center"><img src="img/lms-logo.png" alt="" data-aos="fade-down"
                data-aos-duration="3000"></p>
            </div>
            <div class="row">
              <div class="col-sm-6 mx-auto" data-aos="fade-up"
              data-aos-duration="3000">
                <h3>Powerful Learning Management System WP Theme</h3>
              </div>
              <div class="row">
                <div class="col-sm-10 mx-auto" data-aos="fade-up"
                data-aos-duration="3000">
                  <h5 class="justify"> Awesome features for creating online courses, teacher profile, extended user profiles, lesson management, quiz system, video hosting, ranking system, question system, attachments, course progress, etc.,</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10 mx-auto">
                  <img src="img/lms-devices.png" alt="" class="w-100" data-aos="flip-left"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="2000">
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class="row pb-5" style="background-color: #FDF6EA; padding-top: 200px;">
        <div class="col-sm-11 mx-auto">
          <div class="row row-cols-2 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100 border-0 bg-org hover" data-aos="fade-down"
     data-aos-duration="3000">
                <p class="text-center px-5"><img src="img/c1.png" class="card-img-top w-50 rounded-circle" alt="..." style="height: 100px;"></p>
                <h5 class="card-title text-center">One Click Demo Import</h5>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-0 bg-org hover" data-aos="fade-up"
     data-aos-duration="3000">
                <p class="text-center px-5"><img src="img/{121AFF88-1256-41B2-B37D-5B72DF72D20D}.png" class="card-img-top w-50 rounded-circle" alt="..." style="height: 100px;"></p>
                <h5 class="card-title text-center">
                  No need of Code Skills</h5>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-0 bg-org hover" data-aos="fade-down"
     data-aos-duration="3000">
                <p class="text-center px-5"><img src="img/{198C7EB3-0BBB-4103-8ACA-07D957CDB494}.png" class="card-img-top w-50 rounded-circle" alt="..." style="height: 100px;"></p>
                <h5 class="card-title text-center">Responsive for All Devices</h5>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-0 bg-org hover" data-aos="fade-up"
     data-aos-duration="3000">
                <p class="text-center px-5"><img src="img/{AE0CFC38-8F8F-4486-9805-FD8336D8D446}.png" class="card-img-top w-50 rounded-circle" alt="..." style="height: 100px;"></p>
                <h5 class="card-title text-center">NexGen Documentation</h5>
              </div>
            </div>
         
          </div>
        </div>
       </div>
       <div class="row mt-2">
        <div class="col-sm-9 mx-auto">
         <div class="row">
          <div class="col-sm-10">
            <h6>Copyright © 2020 LMS Theme All Rights Reserved
              <b>Aman Yadav</b></h6>
          </div>
          <div class="col-sm-2">
            <span ><i class="fa-brands fa-twitter fs-5 px-2 h"></i></span>
            <span><i class="fa-brands fa-facebook fs-5 px-2 h"></i></span>
            <span><i class="fa-brands fa-youtube fs-5 px-2 h"></i></span>
            <span><i class="fa-brands fa-instagram fs-5 px-2 h"></i></span>
          </div>
         </div>
        </div>
       </div>
     </div>
    <!-- outer end -->
   
   <script src="js/bootstrap.bundle.js"></script> 
   <script>

    if (document.getElementById('slider1') != null) {
      var slider1 = new Splide('#slider1', {
        type: 'loop',
        perPage: 5,
        rewindByDrag: true,
        focus: 0,
        autoplay: true,
        speed: 1000,

        breakpoints: {
          991: {
            perPage: 2
          },
          561: {
            perPage: 1
          },
        }
      });

      slider1.mount();
    }

  </script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="js/script.js"></script>
</body>
</html>