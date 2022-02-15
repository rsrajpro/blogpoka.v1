<?php
  $pagetitle = "Contact US";
  include('header.php');

?>
    <main>
      <div class="container-fluid bg-primary text-white pt-5 pb-5 text-center">
        <h1 class="c-border d-inline text-uppercase fw-bold">Contact US</h1>
      </div>
    <!--Start contact us -->
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-2">
        <div class="col bg-light mt-3">
          <form action="" class="mt-5">
            <input type="text" placeholder="Name" class="p-2 text-danger fs-5 form-control border-none"><br>
            <input type="email" placeholder="Email" class="p-2 fs-5 form-control border-none"><br>
            <input type="text" placeholder="Subject" class="p-2 fs-5 form-control border-none"><br>
            <textarea name="message" class="fs-5 form-control border-none" cols="30" rows="10" placeholder="Message"></textarea><br>
            <button class="btn btn-primary form-control mb-4">Send</button>
          </form>
        </div>
        <div class="col">
          <!--Map Code-->
        </div>
      </div>
    </div>
    <!--End contact us -->

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