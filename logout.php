<?php
session_start(); // uruchamiam sesję

session_unset(); // niszczę sesję , więc użytkownik zostaje wylogowany
header('Location: login_page.php')
?>