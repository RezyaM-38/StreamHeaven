<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="StreamHeaven.png?v=2" type="image/png">
  <title>StreamHeaven | Se connecter & S'inscrire</title>
</head>
<body class="block_inscription">
<div class="wrapper">

  <nav class="nav_inscription">

      <div class="logo_inscription">
        <a class="logo_navbar" href="Accueil.php">
        <img class="logo_img_inscription" src="StreamHeaven.png" title="StreamHeaven">
      </a></div>

    <div class="nav-button_inscription">
        <button class="btn white-btn" id="loginBtn" onclick="login()">Se connecter</button>
        <button class="btn" id="registerBtn" onclick="register()">S'inscrire</button>
      </div>


    <div class="nav-menu-btn">
      <i class="bx bx-menu" onclick="myMenuFunction()"></i>
    </div>
  </nav>

  <!----------------------------- Form box ----------------------------------->
  <div class="form-box">

    <!------------------- login form -------------------------->

    <div class="login-container" id="login">
      <div class="top">
        <span>Vous n'avez pas de compte? <a href="#" onclick="register()">S'inscrire</a></span>
        <div class="s_inscrire">Connection</div>
      </div>
      <div class="input-box">
        <input type="text" class="input-field" placeholder="Email">
        <i class="bx bx-user"></i>
      </div>
      <div class="input-box">
        <input type="password" class="input-field" placeholder="Mot de passe">
        <i class="bx bx-lock-alt"></i>
      </div>
      <div class="input-box">
        <input type="submit" class="submit" value="Se connecter">
      </div>
      <div class="two-col">
        <div class="one">
          <input type="checkbox" id="login-check">
          <label for="login-check">Se Souvenir de moi</label>
        </div>
        <div class="two">
          <label><a href="#">Mot de passe oublié?</a></label>
        </div>
      </div>
    </div>

    <!------------------- registration form -------------------------->
    <div class="register-container" id="register">
      <div class="top">
        <span>Vous avez déja un compte? <a href="#" onclick="login()">Se connecter</a></span>
        <div class="s_inscrire">Inscription</div>
      </div>
      <div class="two-forms">
        <div class="input-box">
          <input type="text" class="input-field" placeholder="Nom">
          <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
          <input type="text" class="input-field" placeholder="Prenom">
          <i class="bx bx-user"></i>
        </div>
      </div>
      <div class="input-box">
        <input type="text" class="input-field" placeholder="Email">
        <i class="bx bx-envelope"></i>
      </div>
      <div class="input-box">
        <input type="password" class="input-field" placeholder="Mot de passe">
        <i class="bx bx-lock-alt"></i>
      </div>
      <div class="input-box">
        <input type="submit" class="submit" value="S'inscrire">
      </div>
      <div class="two-col">
        <div class="one">
          <input type="checkbox" id="register-check">
          <label for="register-check"> Se souvenir de moi</label>
        </div>
        <div class="two">
          <label><a href="#">Termes & conditions</a></label>
        </div>
      </div>
    </div>
  </div>
</div>


<script>

  function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
      i.className += " responsive";
    } else {
      i.className = "nav-menu";
    }
  }

</script>

<script>

  var a = document.getElementById("loginBtn");
  var b = document.getElementById("registerBtn");
  var x = document.getElementById("login");
  var y = document.getElementById("register");

  function login() {
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
  }

  function register() {
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
  }

</script>



<script>

  function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
      i.className += " responsive";
    } else {
      i.className = "nav-menu";
    }
  }

</script>

<script>

  var a = document.getElementById("loginBtn");
  var b = document.getElementById("registerBtn");
  var x = document.getElementById("login");
  var y = document.getElementById("register");

  function login() {
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
  }

  function register() {
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
  }

</script>

</body>
</html>
