<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mugen Kuro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="site.css">
</head>
<body>
       
    <nav class="navbar navbar-dark bg-dark  navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" id="navbar-brand"> M̷̭̬͂͊u̵͕̞͖̇̋̅ͅg҉͔̭̲̽́e҉̬̒̍ͅǹ̶̗͇̂ k̴͖͉̭̙̗̄̓͂̏ȗ̴̝̮͍͋͒̎ȓ̶̦̭̳͈̪͌̎̽̈́o҈̱̗̅̔͑̀̚ </a>
          <button clas="bg-light" id="navbar-toggler" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span  class="navbar-toggler-icon"><img src="aparencia\menu-removebg-preview.png" alt="icone de menu axul" id="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-dark" id="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">M̷̭̬͂͊u̵͕̞͖̇̋̅ͅg҉͔̭̲̽́e҉̬̒̍ͅǹ̶̗͇̂ k̴͖͉̭̙̗̄̓͂̏ȗ̴̝̮͍͋͒̎ȓ̶̦̭̳͈̪͌̎̽̈́o҈̱̗̅̔͑̀̚</h5>
              <button style="color: aquamarine;" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div> 
            <div class="offcanvas-body bg-dark" id="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a id="nav-profile-text" class="nav-link active" aria-current="page" href="login/login.php"><img src="aparencia/profile_icon.png" alt="profile" id="nav-profile"> Perfil</a>
                      </li>
                    </ul>
                <li class="nav-item">
                  <a id="nav-link1" class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a id="nav-link2"class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catálogo
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Blut Veihiner</a></li>
                    <li><a class="dropdown-item" href="#">Sternritter</a></li>
                    <li><a class="dropdown-item" href="#">Mugetsu</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Destaques do dia</a></li>
                    <li><a class="dropdown-item" href="#">Promoções</a></li>
                    <li><a class="dropdown-item" href="#">texto</a></li>
                </ul>
                     <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sobre nós
                  </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Quem somos</a></li>
                    <li><a class="dropdown-item" href="#">Trabalhe conosco</a></li>
                    <li><a class="dropdown-item" href="#">Política de privacidade</a></li>
                </ul>
                <audio preload="metadata" controls loop>
                  <source src="aparencia/dancinkrono.mp3" type="audio/mp3">
                </audio>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>


      <div id="banner">
        <img src="aparencia/banner-blue.gif" class="img-fluid" alt="">
      </div>


      <h1 class="title"> </h1>


      <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" id="slide">
          <div class="carousel-item active" >
            <img src="aparencia/varios slide.gif" class="d-block w-100" alt="slide of models">
          </div>
          <div class="carousel-item">
            <img src="aparencia/Sternritter  slide.gif" class="d-block w-100" alt="slide of models">
          </div>
          <div class="carousel-item">
            <img src="aparencia/Mugetsu slide.gif" class="d-block w-100" alt="slide of models">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <br>

       
      <h1 class="title">Este  é o iníco do corpo<br> do nosso lindo site</h1>
      <p>Olá mundo</p>


<br>
<br>
<br>
<br>
<br>

    
 <!-- Footer -->
<footer class="s text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/anderson.queiroz.31542/?viewas=100000686899395&show_switched_toast=0&show_switched_tooltip=0&show_podcast_settings=0" target="_blank" class="me-4 text-reset">
        <i class="fab fa-facebook-f"><img src="facebook.jpeg" alt=""></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"><img src="twitter.jpeg" alt=""></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"><img src="instagram.jpeg" alt=""></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"><img src="linkedin.jpeg" alt=""></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"><img src="github.jpeg" alt=""></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Mugen Kuro / 無限黒
          </h6>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto optio itaque neque ad dolore? Nam odit facere
             dolor quasi. Neque commodi ipsam illo consequuntur beatae aperiam perferendis numquam rerum officia.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Mirror</a>
          </p>
          <p>
            <a href="#!" class="text-reset">catalog</a>
          </p>
          <p>
            <a href="#!" class="text-reset">promotions</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Japan, Hokkaido HK 10012, JP</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contact@mugenkuro.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright: Mugen KURO / 無限黒
    <a class="text-reset fw-bold" href="https://sites.google.com/view/mugenkuro/%E3%83%9B%E3%83%BC%E3%83%A0home">MugenKuro.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
    crossorigin="anonymous"></script>
</body>
</html>