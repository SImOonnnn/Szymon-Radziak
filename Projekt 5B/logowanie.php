<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<style> 
Body {
    display: flex;
    align-items: center;
    min-height: 100vh;
  font-family: Helvetica;
  background-color: #E8EEF2;
  color: #D6C9C9;
}
button { 
       background-color: #4CAF50; 
       width: 50%;
        color: orange; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 25px; 
        width: 400px;
        margin: 0 auto;
        background-color: #37393A;
    } 
</style> 

<?php

    include("Łączenie.php");


    $users_create_tab = mysqli_query($db_connect, "CREATE TABLE IF NOT EXISTS users (
        User_Id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        UserFirstName VARCHAR(50) NOT NULL,
        UserEmail VARCHAR(255) NOT NULL,
        UserPassword VARCHAR(255) NOT NULL,
        PRIMARY KEY (User_Id),
        UNIQUE KEY UserEmail (UserEmail)
      )");

$user = mysqli_query($db_connect, "REPLACE INTO users VALUES (1, 'Manchester', 'test123@gmail.com', 'Manchester123')");
$user = mysqli_query($db_connect, "REPLACE INTO users VALUES (2, 'Paris', 'paris123@gmail.com', 'paris123')");
$user = mysqli_query($db_connect, "REPLACE INTO users VALUES (3, 'barcelona', 'barc123@gmail.com', 'barc123')");
$user = mysqli_query($db_connect, "REPLACE INTO users VALUES (4, 'bayern', 'bayern123@gmail.com', 'bayern123')");
$user = mysqli_query($db_connect, "REPLACE INTO users VALUES (5, 'borussia', 'borussia123@gmail.com', 'borussia123')");


$zawodnicy_table = mysqli_query($db_connect, "CREATE TABLE IF NOT EXISTS zawodnicy (
    id INT(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    imie VARCHAR(255) NOT NULL,
    cena FLOAT(20) NOT NULL,
    klub_id INT(25) NOT NULL
  )");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (1, 'Max', 123123, 1)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (2, 'Adam', 123123, 1)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (3, 'Patryk', 123123, 1)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (4, 'Wiktor', 123123, 1)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (5, 'Konrad', 123123, 1)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (6, 'Marcin', 123123, 1)");

$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (7, 'PMax', 123123, 2)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (8, 'PAdam', 123123, 2)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (9, 'PPatryk', 123123, 2)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (10, 'PWiktor', 123123, 2)");

$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (11, 'FMax', 123123, 3)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (12, 'FAdam', 123123, 3)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (13, 'FPatryk', 123123, 3)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (14, 'FWiktor', 123123, 3)");

$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (15, 'BMax', 123123, 4)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (16, 'BAdam', 123123, 4)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (17, 'BPatryk', 123123, 4)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (18, 'BWiktor', 123123, 4)");

$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (19, 'BoMax', 123123, 5)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (20, 'BoAdam', 123123, 5)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (21, 'BoPatryk', 123123, 5)");
$zawodnicy = mysqli_query($db_connect, "REPLACE INTO zawodnicy VALUES (22, 'BoWiktor', 123123, 5)");
    ?>
</head>  
<body>  
      
    <div class="container"> 
    <h1> Zaloguj sie </h1>
    <form method="POST">
            Login : 
            <input type="text" placeholder="Wpisz login" name="email" required>
            Haslo :
            <input type="password" placeholder="Wpisz haslo" name="password" required>
            <button type="submit">Login</button> 

           
    </form>   
    </div> 

    <?php
    session_start();
    if (isset($_POST["email"])) {
      if (empty($_POST["email"])) {
        echo ("<div class=\"form__error-container\">Pole email musi zostać wypełnione</div>");
      } else if (empty($_POST["password"])) {
        echo ("<div class=\"form__error-container\">Pole hasła musi zostać wypełnione</div>");
      } else {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($stmt = mysqli_prepare($db_connect, "SELECT `User_Id`, `UserFirstName`,`UserPassword` FROM `users` WHERE `UserEmail` = '$email'")) {
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $mysqlId, $mysqlFirstName, $mysqlPassword);
            mysqli_stmt_fetch($stmt);
            if ($password === $mysqlPassword) {
              session_regenerate_id();
              $_SESSION['loggedin'] = TRUE;
              $_SESSION['firstName'] = $mysqlFirstName;
              $_SESSION['id'] = $mysqlId;
              header('location: Strona_glowna.html');
              exit;
            } else {
              echo ("<div class=\"form__error-container\">Podano złe hasło</div>");
            }
          } else {
            echo ("<div class=\"form__error-container\">Nie znaleziono użytkownika</div>");
          }
        } else {
          echo ("<div class=\"form__error-container\">Nie znaleziono użytkownika</div>");
        }
      }
    }
    ?>
</body>   
</html>
