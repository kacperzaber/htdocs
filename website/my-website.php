<?php

session_start();

if(isset($_SESSION['isLog']) && $_SESSION['isLog'] == true) { // sprawdzam czy uzytkownik się już zalogował
    
  }
  else {
    header('Location: ../login_page.php'); // przekierowuje na strone
    exit(); // od razu wykonuje header, nie wykonując niepotrzebnie kodu ze strony login.php
  }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moja strona</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style-website.css">
</head>

<body>
    <div class="container">
        <section id="home">
        <header><img src="header.png"/></header>
        
            <div class="nav">
                <ul class="menu">
                    <li>Home</li>
                    <li><a href="#games">Games</a></li>
                    <li><a href="https://github.com/kacperzaber">GitHub</a></li>
                    <li><a href="../cv/index.html">CV</a></li>                    
                   
                
            <div class="logout">
            <?php
            echo "Welcome " .$_SESSION['user'].'! [<a href="../logout.php">Wyloguj</a>]'
            ?>
            </div>
            </ul>
            </div>

</br>       
            </br>
            </br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>              
                
        </section>
        <section id="games">
            <h1>Games</h1>
            <ul class="game">
                <li>Gra 1</li>
                <li>Gra 2</li>
                <li>Gra 3</li>
            </ul>
            <a href="#home">Back to Home </a>
        </section>        
    </div>
</body>

</html>