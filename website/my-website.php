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
                    <li><a href="#home"> Home</li>
                    <li><a href="#games">Games</a></li>
                    <li><a href="#todolist">TO-DO LIST</a></li>
                    <li><a href="#wyszukiwarka">Wyszukiwarka</a></li>
                    <li><a href="#counter">Odliczanie do wakacji</a></li>
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
        
        </section>    
        <section id="counter">  
           <h1>Odliczanie do wakacji</h1>
           <h3>
            <span class="days">.</span> dni
            <span class="hours">.</span> godzin
            <span class="minutes">.</span> minut
            <span class="seconds">.</span> sekund
           </h3>
           <h1>Stoper</h1>
           <div class="stoper">
           <button class="start">Start</button>
           <button class="reset">Reset</button>
           <div class="time">
            <p>Czas od startu:</p>
            <div class='time'></div>
           </div>
           </div>
        <section>
            <section id="todolist">
                <h1>To Do List</h1>
                <h1>Liczba zadań:<span></span></h1>
                <input type="text"> <input type="button" value="Dodaj" class='add'>
                <ul>         
                </ul>
                
            </section>       
            <section id="wyszukiwarka">
                <h1>Wyszukiwarka</h1>
                <input type="text">       
                <ul>
                    <li>brukselka</li>           
                    <li>groch</li>           
                    <li>batat</li>           
                    <li>ziemniak</li>           
                    <li>burak</li>           
                    <li>fasola</li>           
                    <li>marchewka</li>           
                    <li>piertruszka</li>           
                    <li>por</li>           
                </ul>
                
            </section>
        <a class ='link' href="#home">Back to Home </a>
    </div>
    <script src="main.js"></script>
</body>

</html>