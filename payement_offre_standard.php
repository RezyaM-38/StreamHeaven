<!doctype html>
<html lang="fr" data-bs-theme="dark">
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
<body class="background_profil">

<main>

  <header>
    <div class="nav_bar_">
      <!-- Logo -->
      <div class="logo_img">
        <a href="Accueil.php">
          <img class="logo" src="StreamHeaven.png" title="StreamHeaven"></a>
      </div>
      
    </div>
  </header>
</main>

<div class="container_payement">
  <main>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Votre panier</span>
          <span class="badge bg-primary rounded-pill">1</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div class="abonnement">

              <h6 class="my-0">Abonnement Offre Standard</h6>
              <small class="text-body-secondary">Sans engagement</small>
            </div>

            <span class="text-body-secondary">4.99 € / Mois</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong>4.99 €</strong>
          </li>
        </ul>

        <form class="card_p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Code Promo">
            <button type="submit" class="btn btn-secondary">Utiliser</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Adresse de facturation</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Un prénom valide est requis.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Un Nom valide est requis.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="vous@exemple.com">
              <div class="invalid-feedback">
                Veuillez entrer une adresse email valide.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="address" placeholder="6 Rue Irvoy" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Adresse 2 <span class="text-body-secondary">(Optionnelle)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Appartement ou Résidence">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Pays</label>
              <select class="form-select" id="country" required>
                <option class="choix_pays" value="">Choisissez</option>
                <option>France</option>
                <option>Allemagne</option>
                <option>Espagne</option>
                <option>Italie</option>
                <option>Belgique</option>
                <option>Portugal</option>
                <option>Suisse</option>
                <option>Pays-Bas</option>
                <option>Royaume-Uni</option>
                <option>Autriche</option>
                <option>Suède</option>
                <option>Norvège</option>
                <option>Danemark</option>
                <option>Finlande</option>
                <option>Grèce</option>
                <option>Irlande</option>
                <option>Pologne</option>
                <option>Hongrie</option>
                <option>République Tchèque</option>
                <option>Luxembourg</option>
              </select>
              <div class="invalid-feedback">
                Veuillez séléctionner un pays valide.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Code Postal</label>
              <input type="text" class="form-control" id="zip" placeholder="38100" required>
              <div class="invalid-feedback">
                Code postal requis.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Sauvegarder ces informations pour la prochaine fois</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payement</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Carte de crédit</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">PayPal</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">ApplePay</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nom du titulaire de la carte</label>
              <input type="text" class="form-control" id="cc-name" placeholder="Mr Dupont Jean " required>
              <small class="text-body-secondary">Nom Prenom</small>
              <div class="invalid-feedback">
                Nom de titulaire requis
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numéro de la carte</label>
              <input type="text" class="form-control" id="cc-number" placeholder="1234-5678-9101-1121" required>
              <div class="invalid-feedback">
                Numéro de carte requis
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Date d'expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="01/01/27" required>
              <div class="invalid-feedback">
                Date d'expiration requis
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">Cryptogramme</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="***" required>
              <div class="invalid-feedback">
                Cryptogramme requis
              </div>
            </div>
          </div>

          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Valider mon abonnement</button>
        </form>
      </div>
    </div>
  </main>

</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="checkout.js"></script>
</body>
</html>

