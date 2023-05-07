<?php
session_start(); // uruchamiam sesję

require_once "connect.php"; // once - tylko raz , require - wymagaj

$connect = new mysqli($host, $db_user, $db_password, $db_name);

if ($connect->connect_errno != 0) // sprawdzam czy połączenie się udało
{
    echo "Error: " . $connect->connect_errno;
} else {

    $login = $_POST['user']; // globalne zmienne, w celu ich późniejszego wykorzystania
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_name='$login' AND password='$password'";

    if ($result = @$connect->query($sql)) { // wysyłam zapytanie do bazy
        $users = $result->num_rows; // liczba zwróconych wierszy
        if ($users > 0) {
            $_SESSION['isLog'] = true;
            $row = $result->fetch_assoc(); // tworzę tablice asocjacyjna, abym mógł sie dostać do rekordów    
            $_SESSION['user'] = $row['user_name']; // przypisuje name usera to zmiennej sesyjnej , globalnej
            unset($_SESSION['error']);
            $result->free_result(); // zwalniam pamięć z niepotrzebnych zaciągniętych danych

            header('Location: website/my-website.php');
        } else {         
            $_SESSION['error'] = '<span style="color: red ; font-size:20px; font-family: Arial, Helvetica, sans-serif"> Nieprawidłowy login lub hasło! </span>'; // Tworzę zmienną sesyjną w przypadku podania złych danych logowania
            header('Location: login_page.php');
        }
    }
    $connect->close();
}
?>