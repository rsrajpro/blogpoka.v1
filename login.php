<?php
  $pagetitle = "Login - Blogpoka";
  include('header.php');

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
          <div class="col-md-6 align-self-center"><img class="img-fluid" src="./img/BlogPoka-login.png" alt=""></div>
          <div class="col-md-6 ">
            <form method="post" action="action.php">
              <div class="pt-5 text-center">
                <img src="./img/logo.png" alt="logo" style="height: 80px;" class="mb-2">
                <h1>Login</h1>
                <p class="pb-4">Login into your Account</p>
              </div>
              
                <input class="p-2 form-control fs-5" type="text" placeholder="Email" name="username"><br>
              <input Class="p-2 form-control fs-5" type="password" placeholder="Password" name="password"><br>
              <button type="submit" class="fs-5 btn btn-dark form-control mb-5" name="submit">Login</button>
            
            </form>
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
      <div class="c-c">?? 2022 blogpoka.com . All Rights Reserved.</div>
    </footer>
  </body>
  </html>
