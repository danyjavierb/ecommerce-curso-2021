<?php
if(isset($_GET['error'])){

  switch ($_GET['error']) {
    case 'loginError':
      echo "<script>alert('Username o Password incorrectos')</script>";
      break;
    case 'datosExistentesError':
        echo "<script>alert('Username o email ya estan registrados')</script>";
        break;  
    default:
    echo "<script>alert('ocurrio un error intente mas tarde..')</script>";
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Products - Red store</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index.html">
              <img src="images/logo.png" alt="" width="125px"
            /></a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.html">Home</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="account.html">Account</a></li>
              <!-- TODo: 22:20 -->
            </ul>
          </nav>
          <a href="cart.html"
            ><img src="images/cart.png" alt="" width="30px" height="30px"
          /></a>
          <img
            src="images/menu.png"
            alt=""
            class="menu-icon"
            onclick="menutoggle()"
          />
        </div>
      </div>
    </div>
    <!-- Navigation ends here -->
    <!-- Account Page -->

    <div class="account-page">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="images/image1.png" width="100%" />
          </div>
          <div class="col-2">
            <div class="form-container">
              <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="indicator" />
              </div>
              <!-- FORMULARIO LOGIN -->
              <form method='POST' action="login.php" id="LoginForm">
                <input name="username" type="text" placeholder="Username" />
                <input name="password" type="password" placeholder="Password" />

                <button type="submit" class="btn">Login</button>
                <a href="">Forgot Password</a>
              </form>
               <!-- FORMULARIO REGISTRO -->
              <form method='POST' action="registro.php" id="RegForm">
                <input required name="nombre" type="text" placeholder="Name" /> 
                <input required name="username" type="text" placeholder="Username" />
                <input required name="email" type="email" placeholder="Email" />
                <input required name="password" type="password" placeholder="Password" />
                <button type="submit" class="btn">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>
              Download App for Android <br />
              and ios mobile phone
            </p>
            <div class="app-logo">
              <img src="images/play-store.png" alt="" />
              <img src="images/app-store.png" alt="" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo-white.png" alt="" />
            <p>
              Lorem, ipsum dolor sit amet consectetur <br />adipisicing elit.
              Porro, eum?
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>

          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2020 - introidx</p>
      </div>
    </div>
    <!-- JS for Toggle menu -->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
    <!-- 
js for toggle form -->
    <script>
      var LoginForm = document.getElementById("LoginForm");
      var RegForm = document.getElementById("RegForm");
      var indicator = document.getElementById("indicator");

      function register() {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";
      }

      function login() {
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";
      }
    </script>
  </body>
</html>
