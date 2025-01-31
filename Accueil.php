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

  <header>
    <div class="nav_bar_">
      <!-- Logo -->
      <div class="logo_img">
        <a href="Accueil.php">
        <img class="logo" src="StreamHeaven.png" title="StreamHeaven">
      </div></a>

      <!-- Bouton -->
      <div class="identifier">
        <a href="S'identifier.php" class="bouton_identifier">S'inscrire</a>
      </div>
    </div>
  </header>
</main>

<section class="catalogue">

  <h1>UN NUAGE DE DIVERSTISSEMENT</h1>
  <h2>Découvrez nos films et series en illimité et sans pub</h2>
  <p>Profitez de nos offres imbatable: A partir de 2,99€ par mois sans engagement.</p>
  <div class="inscription"><a href="profil.php">Se connecter</a></div>
  <img src="catalogue.jpg">
</section>

<section class="selection">
  <h2>Ce qui cartonne en ce moment</h2>

  <div class="slider_container_recommander_selection">
      <button class="arrow_left_recommander_arrow" id="Previous">&#8249;</button>

      <div class="slider_block_selection">

        <div class="slide_image_selection">
          <img src="squid%20game%20cover.jpg" width="300" height="350">
        </div>

        <div class="slide_image_selection">
          <img src="Gladiator%20II.jpg" width="300" height="350">
        </div>

        <div class="slide_image_selection">
          <img src="F&Fx_cover.jpg" width="300" height="350">
        </div>

        <div class="slide_image_selection">
          <img src="Power_Book_I_cover.jpg" width="300" height="350" >
        </div>

        <div class="slide_image_selection">
          <img src="jackal.jpg" width="300" height="350">
        </div>

        <div class="slide_image_selection">
          <img src="A_L_aube_de_l_amerique.jpg" width="300" height="350">
        </div>

        <button class="arrow_right_recommander_arrow id="Next">&#8250;</button>

        <script defer src="script.js"></script>
      </div>
</section>


<section class="prix_abonnement">

  <h2 class="abonnement">Selectionnez un abonnement</h2>

  <div class="cards__inner">

    <div class="cards__card card">
    <p class="card__heading">Offre étudiante</p>
    <p class="card__price">2.99€/Mois</p>
    <ul class="card_bullets flow" role="list">
      <li>Qualité Vidéo:<br>1080p full HD</li>
      <li>Appareils pris en charge:<br>TV, Ordinateur, Smartphone, Tablette</li>
      <li>Lectures simultanées:<br>2 Appareils</li>
      <li>Publicité: Aucune</li>
    </ul>
    <a class="card__cta cta" href="payement_offre_etudiant.php">Souscrire</a>
  </div>
  <div class="overlay cards__inner"></div>

    <div class="cards__card card">
      <p class="card__heading">Offre Standard</p>
      <p class="card__price">4.99€/Mois</p>
      <ul class="card_bullets flow" role="list">
        <li>Qualité Vidéo:<br>1080p full HD</li>
        <li>Appareils pris en charge:<br>TV, Ordinateur, Smartphone, Tablette</li>
        <li>Lectures simultanées:<br>3 Appareils</li>
        <li>Téléchargement:<br>Illimité</li>
        <li>Publicité: Aucune</li>
      </ul>
      <a class="card__cta cta" href="payement_offre_standard.php">Souscrire</a>
    </div>

    <div class="overlay cards__inner"></div>

    <div class="cards__card card">
      <p class="card__heading">Offre Premium</p>
      <p class="card__price">6.99€/Mois</p>
      <ul class="card_bullets flow" role="list">
        <li>Qualité Vidéo:<br>4k HDR</li>
        <li>Appareils pris en charge:<br>TV, Ordinateur, Smartphone, Tablette, Console</li>
        <li>Lectures simultanées:<br>4 Appareils</li>
        <li>Téléchargement:<br>Illimité</li>
        <li>Publicité: Aucune</li>
      </ul>
      <a class="card__cta cta" href="payement_offre_premium.php">Souscrire</a>
    </div>
    <div class="overlay cards__inner"></div>
    </section>

<section class="FAQ">
    <h2 class="titre_FAQ">FAQ</h2>

    <div class="accordeon_container">

      <div class="accordeon">
        <button class="accordeon_bouton">StreamHeaven, qu'est ce que c'est ?</button>
        <div class="panel_accordeon">
      <span class="txt_panel">Streamheaven, le paradis du streaming !<br>
        Laissez-vous emporter dans les nuages avec Streamheaven, votre espace d’évasion ultime. Profitez
        d’une sélection infinie de films, séries, documentaires et contenus exclusifs, accessibles
        à tout moment. Déconnectez-vous du quotidien et plongez dans un monde où chaque nuage cache une nouvelle aventure à découvrir.</span>
        </div>
      </div>

      <div class="accordeon">
        <button class="accordeon_bouton">Que regarder sur Streamheaven ?</button>
        <div class="panel_accordeon">
          <span class="txt_panel">StreamHeaven prose une sélection infinie de films, séries, documentaires, animés et contenus exclusifs qui vous transportera au-delà des nuages.</span>
        </div>
      </div>

      <div class="accordeon">
        <button class="accordeon_bouton">Combien coute StreamHeaven ?</button>
        <div class="panel_accordeon">
          <span class="txt_panel">Streamheaven propose plusieurs formules adaptées à vos besoins :<br> Les offres vont de 2.99 € jusqu'a 6.99 € par mois, sans engagement.</span>
        </div>
      </div>

      <div class="accordeon">
        <button class="accordeon_bouton">Où puis-je regarder StreamHeaven ?</button>
        <div class="panel_accordeon">
          <span class="txt_panel">Streamheaven est disponible sur tous vos appareils connectés ! Vous pouvez regarder vos contenus préférés sur :<br>
            Mobiles, navigateurs Web, consoles de jeux, décodeurs TV et TV connectées.</span>
        </div>
      </div>
    </div>
</section>

      <footer>
        <hr>
        <div class="logo_footer_container">
          <div class="logo_footer">
            <a href="Accueil.php" title="StreamHeaven">
            <img src="StreamHeaven.png"></a>
          </div>
        </div>

        <div class="block_footer">
          <div class="plan_site">
            <h5 class="titre_footer">Plan du site</h5>
            <a href="recommandé1.php">Recommander</a>
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

      <script src="script.js"></script>

</body>
</html>
