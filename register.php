<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_start();
if(isset($_POST['sub']))
{
  $user_id=$_POST['usertype'];
  $_SESSION['usertype'] = $user_id;
}
  
  ?>
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
            <div class="col-sm-10 mx-auto ">
                <div class="card mb-3 sh border-0 shadow-lg" >
                   <form action="code.php" method="post" enctype="multipart/form-data">
                   <div class="row g-0 ">
                      
                      <div class="col-sm-12">
                        <div class="card-body rounded-5">
                          <h2 class="card-title ms-5 mt-5 text-center text-sky">Registration Form</h2>
                          <form class="p-5" action="js/script.js" method="get">
                            <div class="mb-3">
                              <label for="name" class="form-label"><i class="fa-solid fa-user fs-5"></i> Name</label>
                              <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="name" placeholder="Enter Your Name" required>
                             
                            </div>
                            <div class="mb-3">
                              <label for="fname" class="form-label"><i class="fa-solid fa-user fs-5"></i> Father Name</label>
                              <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="fname" placeholder="Enter Your Father Name" required>
                             
                            </div>
                           
                            <div class="mb-3">
                              <label for="" class="form-label"><i class="fa-solid fa-user fs-5"></i> Select Course</label>
                             <select name="course" id="" class="form-select" required>
                              <option value="">---select Course---</option>
                              <option value="Cse">CSE</option>
                              <option value="btech">BTECH</option>
                              <option value="Cse">MCA</option>
                              <option value="Cse">BCA</option>
                             </select>
                             
                            </div>
                            <div class="mb-3">
                              <label for="phone" class="form-label"><i class="fa-solid fa-user fs-5"></i> Phone No</label>
                              <input type="number" class="form-control" id="eid" aria-describedby="emailHelp" name="phone" placeholder="Enter Your Phone No" required>
                             
                            </div>
                            <div class="mb-3">
                              <label for="eid" class="form-label"><i class="fa-solid fa-user fs-5"></i> Email Id</label>
                              <input type="email" class="form-control" id="eid" aria-describedby="emailHelp" name="email" placeholder="Enter Your Email" required>
                             
                            </div>
                            <div class="mb-3">
                              <label for="eid" class="form-label"><i class="fa-solid fa-user fs-5"></i> User Type</label>
                              <select name="usertype" id="" class="form-select" required>
                                <option value="">---Select User Type----</option>
                                <option value="student">Student</option>
                                <option value="admin">Admin</option>
                              </select>
                            </div>

                            <div class="mb-4">
                              <label for="rpass" class="form-label"><i class="fa-solid fa-lock"></i> UserId</label>
                              <input type="text" class="form-control" id="rpass" placeholder="Enter Your Password" name="userid" required>
                            </div>
                            <div class="mb-4">
                              <label for="rpass" class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
                              <input type="password" class="form-control" id="rpass" placeholder="Enter Your Password" name="password" required>
                            </div>
                            <div class="mb-4">
                              <label for="rpass" class="form-label"><i class="fa-solid fa-lock"></i> Upload</label>
                              <input type="file" class="form-control" id="rpass"  name="marks_name" required>
                            </div>

                            <button type="Submit" class="btn btn-primary text-blue form-control mt-2 border-0" onclick="res()" name="sub" value="sub">Register</button>
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