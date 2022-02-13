<!DOCTYPE html>
<html>
    <head>
      <style>
        form{
          background: #f0f0f0;
          padding: 20px;
        }
      </style>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="./img/logo.png">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="./img/logo.png" alt="Blogpoka" class="navbar-brand main-logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./services.html">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./team.html">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./account.html">Account</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="./contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Age calculat.html">Age calculat</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link active" href="./login.html">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./signup.html">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
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
      <div class="c-c">© 2022 blogpoka.com . All Rights Reserved.</div>
    </footer>
  </body>
  </html>
