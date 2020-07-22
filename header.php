<?php
  session_start();
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP Login System</title>
  <meta name="description" content="PHP Login System">
  <meta name="author" content="SitePoint">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="description" content="PHP Login System using MySQLi">
  <link rel = "stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <script src="js/scripts.js"></script>
  <header>
  <nav class="nav-header-main">
    <a class ="header-logo" href="php-login.php">
      <img src="img/logo.png" alt="logo">
    </a>
    <ul>
      <li><a href="php-login.php">HOME</a></li>
      <li><a href="#">PORTFOLIO</a></li>
      <li><a href="#">ABOUT ME</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </nav>
  <div class="header-login">
    <?php
        if (isset($_SESSION['userId']) ){
            echo '<form action="includes/logout-inc.php" method="post">
            <button type = "submit" name="logout-submit">Logout</button>
            </form>';
            
        }
        else{
            echo '<form action="includes/login-inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type = "submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Sign Up</a>';
        }
    ?>
      
  </div>

  <div class="header-login-mobile">
    <?php
        if (isset($_SESSION['userId']) ){
            echo '<form action="includes/logout-inc.php" method="post">
            <button type = "submit" name="logout-submit">Logout</button>
            </form>';
            
        }
        else{
            echo '<form action="includes/login-inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password..."><br>
            <button type = "submit" name="login-submit">Login</button>
          </form><br>
          <a href="signup.php" class="header-signup">Sign Up</a>';
        }
    ?>
      
  </div>

</header>

<div class="mobile-navbar">
      <a href="php-login.php">HOME</a>
      <a href="#">PORTFOLIO</a>
      <a href="#">ABOUT ME</a>
      <a href="#">CONTACT</a>
</div>





