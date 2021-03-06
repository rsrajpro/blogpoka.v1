<?php
  $pagetitle = "Home";
  include('header.php');

?>
    <main>
      <!--Start carousel -->
      <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./img/Slide/s1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="sw-h5">Corporate wellbeing</h5>
              <p class="sw-s-p">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./img/Slide/s2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="sw-h5">Luxury watches</h5>
              <p class="sw-s-p">Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/Slide/s3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="sw-h5">Living with Dietary Restrictions</h5>
              <p class="sw-s-p">Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!--End carousel -->
      <!--Start About Our website -->
      <div class="container text-center mt-4 c-css">
        <h1 class="pb-2 border-bottom text-uppercase fw-light d-inline">About Our website</h1>
        <p class="mt-4 fs-5 fw-lighter css-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <!--End About Our website -->
      <!--Start Img with HNY text -->
      <div class="container-fluid mt-5">
      <div class="c-css2 row align-self-center">
        <div class="col-xl-6 text-center">
          <img  class="img-fluid m-1 rounded-3" src="./img/h2.png" alt="">
        </div>
        <div class="col-xl-6 align-self-center">
          <h1 class="text-center mt-3 pt-3 fw-normal ">Happy New Year 2022</h1>
          <p class="fs-5 fw-lighter pt-2 css-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>
        </div>
      </div>
    </div>
    <!--End Img with HNY text -->
    <!--Start Our Services -->
    <div class="container pt-3">
      <div class="text-center mt-3"><h1 class="border-bottom border-2 text-uppercase fw-light d-inline">Our Services</h1></div>
      <div class="row row-cols-1 row-cols-lg-3 mt-4">
        <div class="col">
          <div class="card mt-3 text-center">
            <div class="card-header"><i class="fab fa-html5 fa-5x"></i></div>
            <div class="card-body bg-info text-black">
              <div class="card-title fw-bold fs-1">HTML 5</div>
              <div class="card-text css-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia similique sequi impedit esse itaque! Velit corrupti tempora eius sint quis unde doloribus blanditiis labore fuga nihil. At reiciendis maxime ullam.
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-3 text-center">
            <div class="card-header"><i class="fab fa-css3 fa-5x"></i></div>
            <div class="card-body bg-dark text-white">
              <div class="card-title fw-bold fs-1">CSS</div>
              <div class="card-text css-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia similique sequi impedit esse itaque! Velit corrupti tempora eius sint quis unde doloribus blanditiis labore fuga nihil. At reiciendis maxime ullam.
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-3 text-center">
            <div class="card-header"><i class="fab fa-js fa-5x"></i></div>
            <div class="card-body bg-success text-white">
              <div class="card-title fw-bold fs-1">Java Script</div>
              <div class="card-text css-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia similique sequi impedit esse itaque! Velit corrupti tempora eius sint quis unde doloribus blanditiis labore fuga nihil. At reiciendis maxime ullam.
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-3 text-center">
            <div class="card-header" ><i class="fab fa-java fa-5x"></i></div>
            <div class="card-body bg-warning text-black">
              <div class="card-title fw-bold fs-1">Java</div>
              <div class="card-text css-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia similique sequi impedit esse itaque! Velit corrupti tempora eius sint quis unde doloribus blanditiis labore fuga nihil. At reiciendis maxime ullam.
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-3 text-center">
            <div class="card-header"><i class="fab fa-python fa-5x"></i></div>
            <div class="card-body bg-secondary text-white">
              <div class="card-title fw-bold fs-1">Python</div>
              <div class="card-text css-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia similique sequi impedit esse itaque! Velit corrupti tempora eius sint quis unde doloribus blanditiis labore fuga nihil. At reiciendis maxime ullam.
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-3 text-center">
            <div class="card-header"><i class="fab fa-wordpress fa-5x "></i></div>
            <div class="card-body bg-primary text-white">
              <div class="card-title fw-bold fs-1 ">Wordpress</div>
              <div class="card-text css-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia similique sequi impedit esse itaque! Velit corrupti tempora eius sint quis unde doloribus blanditiis labore fuga nihil. At reiciendis maxime ullam.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Our Services -->
    <!--Start Team -->
    <div class="container">
    <div class="text-center mt-3"><h1 class="border-bottom border-2 text-uppercase fw-light d-inline">Our Team</h1></div>
      <div class="t-c-h row row-cols-1 row-cols-lg-4 mt-4">
        <div class="col mt-3 text-center">
          <div class="mt-4"></div>
          <img src="./img/Team/Khadija.png" alt="Khadija" class="img-fluid t-img rounded-pill">
          <h2 class="text-primary pt-1">Khadija</h2>
          <h5 class="fw-normal pt-3 pb-3 text-danger">Managing Director</h5>
          <div class="c-pinter">
            <i class="fab fa-facebook fa-2x p-2"></i>
            <i class="fab fa-instagram fa-2x p-2"></i>
            <i class="fab fa-twitter fa-2x p-2"></i>
            <i class="fab fa-github fa-2x p-2"></i>
          </div>
          <div class="mt-4 mb-4"><a href="#" class="btn btn-primary">Read Me <i class="far fa-arrow-right"></i></a></div>
        </div>
        <div class="col mt-3 text-center">
          <div class="mt-4"></div>
          <img src="./img/Team/rijon.png" alt="Khadija" class="img-fluid t-img rounded-pill">
          <h2 class="text-primary pt-1">Rijon</h2>
          <h5 class="fw-normal pt-3 pb-3 text-danger">Finance Director</h5>
          <div class="c-pinter">
            <i class="fab fa-facebook fa-2x p-2"></i>
            <i class="fab fa-instagram fa-2x p-2"></i>
            <i class="fab fa-twitter fa-2x p-2"></i>
            <i class="fab fa-github fa-2x p-2"></i>
          </div>
          <div class="mt-4 mb-4"><a href="#" class="btn btn-primary">Read Me <i class="far fa-arrow-right"></i></a></div>
        </div>
        <div class="col mt-3 text-center">
          <div class="mt-4"></div>
          <img src="./img/Team/Rafiqul.png" alt="Khadija" class="img-fluid t-img rounded-pill">
          <h2 class="text-primary pt-1">Rafiqul</h2>
          <h5 class="fw-normal pt-3 pb-3 text-danger">Technical Officer</h5>
          <div class="c-pinter">
            <i class="fab fa-facebook fa-2x p-2"></i>
            <i class="fab fa-instagram fa-2x p-2"></i>
            <i class="fab fa-twitter fa-2x p-2"></i>
            <i class="fab fa-github fa-2x p-2"></i>
          </div>
          <div class="mt-4 mb-4"><a href="#" class="btn btn-primary">Read Me <i class="far fa-arrow-right"></i></a></div>
        </div>
        <div class="col mt-3 text-center">
          <div class="mt-4"></div>
          <img src="./img/Team/Jowel.png" alt="Khadija" class="img-fluid t-img rounded-pill">
          <h2 class="text-primary pt-1">Jowel</h2>
          <h5 class="fw-normal pt-3 pb-3 text-danger">Admin Officer</h5>
          <div class="c-pinter">
            <i class="fab fa-facebook fa-2x p-2"></i>
            <i class="fab fa-instagram fa-2x p-2"></i>
            <i class="fab fa-twitter fa-2x p-2"></i>
            <i class="fab fa-github fa-2x p-2"></i>
          </div>
          <div class="mt-4 mb-4"><a href="#" class="btn btn-primary">Read Me <i class="far fa-arrow-right"></i></a></div>
        </div>
      </div>
    </div>
    <!--End Team -->
    <!--Start contact us -->
    <div class="container">
      <div class="text-center mt-3"><h1 class="border-bottom border-2 text-uppercase fw-light d-inline">Our Team</h1></div>
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
      <div class="c-c">?? 2022 blogpoka.com . All Rights Reserved.</div>
    </footer>
    </body>
</html>