<!doctype html>
<html lang="fr" data-bs-theme="auto">
<head><script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Découvrez les derniers sorties de films et series en HD et 4K avec votre abonnement StreamHeaven. Commencez à regarder sur n'importe quel appareil !">
  <meta name="author" content="Qadoumi Mayzer">
  <link rel="icon" href="StreamHeaven.png?v=2" type="image/png">
  <title>StreamHeaven | Regardez des films et des series en ligne.</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <link href="bootstrap-5.3.3-examples/" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <link href="style.css" rel="stylesheet">
</head>
<body>
<div>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
  </svg>
</div>
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
          id="bd-theme"
          type="button"
          aria-expanded="false"
          data-bs-toggle="dropdown"
          aria-label="Toggle theme (auto)">
    <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
        <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
        Light
        <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
        <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
        Dark
        <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
        <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
        Auto
        <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
      </button>
    </li>
  </ul>
</div>

<main>

  <div class="container">
    <header class="p-3 mb-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="recommandé2.php" class="nav-link px-2 link-body-emphasis">Recommandé</a></li>
            <li><a href="Film.php" class="nav-link px-2 link-body-emphasis">Films</a></li>
            <li><a href="Serie.php" class="nav-link px-2 link-body-emphasis">Séries</a></li>
            <li><a href="anime.php" class="nav-link px-2 link-body-emphasis">Animé</a></li>
            <li><a href="#" class="nav-link px-2 link-body-emphasis">A regarder plus tard</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Rechercher..." aria-label="Search">
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="pp2.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <a class="dropdown-item" href="recommandé1.php"><li class="burger"><img class="pp_nav" src="pp1.png">Mayzer</li></a>
              <a class="dropdown-item" href="recommandé3.php"><li class="burger"><img class="pp_nav" src="pp3.jpg">Sur le T-Max</li></a>
              <li><a class="dropdown-item" href="profil.php">Gérer les profils</a></li>
              <li><a class="dropdown-item" href="compte.php">Compte</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="Accueil.php">Se déconnecter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
</main>

<!--<section>-->
<!--<div class="slider_container" id="slider_container">-->
<!--  <div class="caption" id="slider-caption">-->
<!--    <div class="caption-heading">-->
<!--      <h1>Lorem Ipsum</h1>-->
<!--    </div>-->
<!--    <div class="caption-subhead"><span>dolor sit amet, consectetur adipiscing elit.</span></div><a class="btn" href="#">Sit Amet</a>-->
<!--  </div>-->
<!--  <div class="left-col" id="left-col">-->
<!--    <div id="left-slider"></div>-->
<!--  </div>-->
<!--  <ul class="slider_nav">-->
<!--    <li class="slide-up"> <a href="#"></a></li>-->
<!--    <li class="slide-down"> <a id="down_button" href="#"></a></li>-->
<!--  </ul>-->
<!--</div>-->
<!--</section>-->

<div class="carousel_block">
  <!-- Slide 1 -->
  <div class="myslide_fade">
    <div class="txt">
    </div>
    <img class="slider_img" src="missionimpossible.jpg" />
  </div>
  <!-- Slide 2 -->
  <div class="myslide_fade">
    <div class="txt">
    </div>
    <img class="slider_img" src="F&F%20Xjpeg.jpeg" />
  </div>
  <!-- Slide 3 -->
  <div class="myslide_fade">
    <div class="txt">
    </div>
    <img class="slider_img" src="game-of-thrones.jpeg" />
  </div>
  <!-- Navigation Arrows -->
  <!-- Feel free to replace the navigation icons here -->
  <a class="prev" onclick="plusSlides(-1)">
    <i class="bx bx-chevron-left"></i>
  </a>
  <a class="next" onclick="plusSlides(1)">
    <i class="bx bx-chevron-right"></i>
  </a>
  <!-- 3 trait -->
  <div class="dotsbox" style="text-align: center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>

<h3>Recommandé pour vous</h3>

<div class="slider_container_recommander">
  <button class="arrow_left_recommander_arrow" id="Previous">&#8249;</button>

  <div class="slider_block">

    <div class="slide_image">
      <img src="squid%20game%20cover.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like1" type="checkbox">
      <label for="like1" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Power_Book_I_cover.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like2" type="checkbox">
      <label for="like2" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Prison%20break.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like3" type="checkbox">
      <label for="like3" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="a%20contre%20sens.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like4" type="checkbox">
      <label for="like4" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Gladiator%20II.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like5" type="checkbox">
      <label for="like5" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="avenger_endgame.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like6" type="checkbox">
      <label for="like6" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Frenchie%20shore.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like7" type="checkbox">
      <label for="like7" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="wolverine%20&%20deadpool.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like8" type="checkbox">
      <label for="like8" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="badboy.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like9" type="checkbox">
      <label for="like9" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Shohun.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like10" type="checkbox">
      <label for="like10" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="House%20of%20dragon%20.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like11" type="checkbox">
      <label for="like11" aria-label="like">❤</label>
    </div>

  </div>
  <button class="arrow_right_recommander_arrow id="Next">&#8250;</button>
</div>

<h3>Séries</h3>
<div class="slider_container_recommander">
  <button class="arrow_left_recommander_arrow" id="Previous">&#8249;</button>

  <div class="slider_block">

    <div class="slide_image">
      <img src="House%20of%20dragon%20.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like12" type="checkbox">
      <label for="like12" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Shohun.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like13" type="checkbox">
      <label for="like13" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="vikings.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like14" type="checkbox">
      <label for="like14" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Viking%20Valhalla.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like15" type="checkbox">
      <label for="like15" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="swat.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like16" type="checkbox">
      <label for="like16" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Therookie.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like17" type="checkbox">
      <label for="like17" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Ghost.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like18" type="checkbox">
      <label for="like18" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Power_Book_I_cover.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like19" type="checkbox">
      <label for="like19" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Prison%20break.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like20" type="checkbox">
      <label for="like20" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Frenchie%20shore.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like21" type="checkbox">
      <label for="like21" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="squid%20game%20cover.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like22" type="checkbox">
      <label for="like22" aria-label="like">❤</label>
    </div>

    <script defer src="script.js"></script>
    <button class="arrow_right_recommander_arrow id="Next">&#8250;</button>
  </div>
</div>

<h3>Films</h3>
<div class="slider_container_recommander">
  <button class="arrow_left_recommander_arrow" id="Previous">&#8249;</button>

  <div class="slider_block">

    <div class="slide_image">
      <img src="Gladiator%20II.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like23" type="checkbox">
      <label for="like23" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="a%20contre%20sens.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like24" type="checkbox">
      <label for="like24" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="badboy.jpg"width="100%" height="100%">
      <input class="toggle-heart" id="like14" type="checkbox">
      <label for="like25" aria-label="like25">❤</label>
    </div>

    <div class="slide_image">
      <img src=wolverine%20&%20deadpool.jpg width="100%" height="100%">
      <input class="toggle-heart" id="like26" type="checkbox">
      <label for="like26" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="avenger_endgame.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like27" type="checkbox">
      <label for="like27" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Montecristo_cover.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like28" type="checkbox">
      <label for="like28" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="gran%20turismo.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like29" type="checkbox">
      <label for="like29" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="creedIII.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like30" type="checkbox">
      <label for="like30" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="souslaseine.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like31" type="checkbox">
      <label for="like31" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="batman.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like32" type="checkbox">
      <label for="like32" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="topgun2.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like33" type="checkbox">
      <label for="like33" aria-label="like">❤</label>
    </div>

    <script defer src="script.js"></script>
    <button class="arrow_right_recommander_arrow id="Next">&#8250;</button>
  </div>
</div>

<h3>Animes</h3>
<div class="slider_container_recommander">
  <button class="arrow_left_recommander_arrow" id="Previous">&#8249;</button>

  <div class="slider_block">

    <div class="slide_image">
      <img src="onepiece.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like34" type="checkbox">
      <label for="like34" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="dbz.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like35" type="checkbox">
      <label for="like35" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="naruto.jpg"width="100%" height="100%">
      <input class="toggle-heart" id="like36" type="checkbox">
      <label for="like36" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="narutoshippuden.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like37" type="checkbox">
      <label for="like37" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="Boruto.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like38" type="checkbox">
      <label for="like38" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="snk.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like39" type="checkbox">
      <label for="like39" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="deathnote.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like40" type="checkbox">
      <label for="like40" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="kuroko.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like41" type="checkbox">
      <label for="like41" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="demonslayer.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like42" type="checkbox">
      <label for="like42" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="onepunchman.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like43" type="checkbox">
      <label for="like43" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="vinlandsaga.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like44" type="checkbox">
      <label for="like44" aria-label="like">❤</label>
    </div>

    <script defer src="script.js"></script>
    <button class="arrow_right_recommander_arrow id="Next">&#8250;</button>
  </div>
</div>

<h3>Documentaire</h3>
<div class="slider_container_recommander">
  <button class="arrow_left_recommander_arrow" id="Previous">&#8249;</button>

  <div class="slider_block">

    <div class="slide_image">
      <img src="gims.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like45" type="checkbox">
      <label for="like45" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="dreamland.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like46" type="checkbox">
      <label for="like46" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="les_routes_esclaves.jpg"width="100%" height="100%">
      <input class="toggle-heart" id="like47" type="checkbox">
      <label for="like47" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="une_traque_americaine_o_j_simpson.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like48" type="checkbox">
      <label for="like48" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="l'ocean.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like49" type="checkbox">
      <label for="like49" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="all_that_breathes.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like50" type="checkbox">
      <label for="like50" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="nouveau_j_sur_terre.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like51" type="checkbox">
      <label for="like51" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="destination.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like52" type="checkbox">
      <label for="like52" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="avec-les-leopards.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like53" type="checkbox">
      <label for="like53" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="kerviel.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like54" type="checkbox">
      <label for="like54" aria-label="like">❤</label>
    </div>

    <div class="slide_image">
      <img src="histoire_france.jpg" width="100%" height="100%">
      <input class="toggle-heart" id="like55" type="checkbox">
      <label for="like55" aria-label="like">❤</label>
    </div>

    <script defer src="script.js"></script>
    <button class="arrow_right_recommander_arrow id="Next">&#8250;</button>
  </div>
</div>

<footer>
  <hr>
  <div class="logo_footer_container">
    <div class="logo_footer">
      <a href="recommandé2.php" title="StreamHeaven">
        <img src="StreamHeaven.png"></a>
    </div>
  </div>

  <div class="block_footer">
    <div class="plan_site">
      <h5 class="titre_footer">Plan du site</h5>
      <a href="recommandé2.php">Recommander</a>
      <a href="Film.php">Films</a>
      <a href="Serie.php">Séries</a>
      <a href="anime.php">Animés</a>
    </div>

    <div class="regles">
      <h5 class="titre_footer">Règles et conditions</h5>
      <a href="#">Politique de confidentialité</a>
      <a href="#">Conditions d'utilisation</a>
      <a href="#">Politique de confidentialité relative aux enfants</a>
      <a href="#">Gérer les cookies</a>
      <a href="#">Mention Légal</a>
    </div>

    <div class="support">
      <h5 class="titre_footer">Support</h5>
      <a href="#">Centre d'aide</a>
      <a href="#">Appareils pris en charge</a>
      <a href="#">Règles de classification des contenues</a>
    </div>
  </div>

  <div class="copyright">
    <p class="copyright_texte">© 2025 StreamHeaven Tous droits réservés</p>
  </div>

</footer>

</body>
</html>



