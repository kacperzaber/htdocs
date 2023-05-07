<?php
session_start(); // uruchamiam sesję

if(isset($_SESSION['isLog']) && $_SESSION['isLog'] == true) { // sprawdzam czy uzytkownik się już zalogował
  header('Location: website/my-website.php'); // przekierowuje na strone
  exit(); // od razu wykonuje header, nie wykonując niepotrzebnie kodu ze strony login.php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Login</title>
</head>

<body class="login-page">
  <form autocomplete="off" action="login.php" method="post">
    <div class="form-icon"></div>
    <div class="form-login">
      <input id="user" name="user" type="text" placeholder=" " />
      <label for="user">User</label>
    </div>

    <div class="form-login">
      <input id="password" name="password" type="password" placeholder=" " />
      <label for="password">Password</label>
    </div>
    <div class="form-spacer"></div>
    <button class="login" type="submit">Login</button>
    <div class="return-home">
      <a href="index.html"> Back </a>
</div>
<div class="komunikat">
    <?php
    if(isset($_SESSION['error'])){
      echo $_SESSION['error'];
    }      
    ?>
    </div>
  </form> 
</body>

</html>