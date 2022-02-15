<?php

$pagetitle = "SignUP";
include('header.php');

$database = new mysqli("localhost","root","","blogpoka.v1");

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

if(isset($_POST['reg'])){
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $password = md5($_REQUEST['password']);
    $repassword = md5($_REQUEST['repassword']);

    if($password !== $repassword){
      $error = "Password Did Not Match";
    }
    else{
      if($fullname !== "" || $email !== "" || $password !== ""){
        
        $cquery = "SELECT `id` FROM `user` WHERE `email` = '$email' OR `phone` = '$phone'";

        $rsl = $database->query($cquery);

        $cnt = mysqli_num_rows($rsl);

        if($cnt == 1){
          $error = "Email Or Phone Already Exist";
        }
        else{
          $query = "INSERT INTO `user`(`fullname`, `email`, `phone`, `password`) VALUES ('$fullname','$email','$phone','$password')";

          $excute = $database->query($query);

          if($excute == True){
            header('Location: index.php');
          }
          else{
            $error = "Something Went wrong";
          }
        }
        
      }
      else{
        $error = "Fields are required";
      }
    }
}




?>
      <style>
        form{
          background: #f0f0f0;
          padding: 20px;
        }
      </style>
    <main>
      <div class="container mt-5 mb-5">
        <div class="row d-flex">
          <div class="col-md-6 align-self-center"><img class="img-fluid" src="./img/BlogPoka-sign up.png" alt=""></div>
          <div class="col-md-6 ">
            <form class="" action="" method="post">
              <div class="pt-5 text-center">
                <img src="./img/logo.png" alt="logo" style="height: 80px;" class="mb-2">
                <h1 class="text-uppercase">Sign up</h1>
                <p class="pb-4">Sign up into your Account</p>
              </div>
              <input class="p-2 form-control shadow-none fs-5" type="text" placeholder="Full Name*" name="fullname" required><br>
              <input class="p-2 form-control shadow-none fs-5" type="email" placeholder="Email*" name="email" required><br>
              <input class="p-2 form-control shadow-none fs-5" type="text" placeholder="Phone Number" name="phone"><br>
              <input Class="p-2 form-control shadow-none fs-5" type="password" placeholder="Password*" name="password" required><br>
              <input Class="p-2 form-control shadow-none fs-5" type="password" placeholder="Re-Password*" name="repassword"><br>
              <button type="submit" class="shadow-none fs-5 btn btn-outline-success form-control mb-5" name="reg">Sign UP</button>
            </form>
            <h5 class="text-danger mt-2">
              <?php if(!empty($error)){echo $error;}?>
              </h5>
              <h5 class="text-success mt-2">
              <?php if(!empty($sucess)){echo $sucess;}?>
              </h5>
          </div>
        </div>
      </div>
    </main>
    <footer class="mt-5">
      <div class="container-fluid bg-dark text-light">
        <div class="row border-bottom pb-5">
          <div class="col-md-4 text-center  mt-5 ps-4">
            <img src="./img/logo.png" alt="Logo" class="img-fluid rounded-pill main-logo">
            <p class="css-p mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus dolore tempora laborum laudantium inventore commodi assumenda consequuntur consequatur corrupti officiis perspiciatis odit velit fugit non, nam accusamus sit repellat ut?</p>
          </div>
          <div class="col-md-4 c-5">
            <h2 class="mt-5"><i class="fas fa-angle-double-right"></i> Main Menu</h2>
            <ul class="list-unstyled">
              <li><a href="#"><i class="far fa-hand-point-right"></i> Home</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> Our Services</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> Team</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> Login</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> Sign Up</a></li>
            </ul>
          </div>
          <div class="col-md-4 c-5">
            <h2 class="mt-5"><i class="fas fa-angle-double-right"></i> Footer Menu</h2>
            <ul class="list-unstyled">
              <li class="text-decoration-none text-white"><a href="#"><i class="far fa-hand-point-right"></i> About</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> Privacy Policy</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> Contact Us</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> DMCA</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> TOC</a></li>
              <li><a href="#"><i class="far fa-hand-point-right"></i> Disclaimer</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="c-c">© 2022 blogpoka.com . All Rights Reserved.</div>
    </footer>
  </body>
  </html>
