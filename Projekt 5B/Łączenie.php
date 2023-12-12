<?php
$server = 'localhost';
$login = 'root';
$password = '';
$database = 'football';

$db_connect = mysqli_connect($server, $login, $password);

if (!$db_connect) {
    exit("Błąd połączenia z serwerem: " . mysqli_connect_error());
} else {
    $db_create = mysqli_query($db_connect, "CREATE DATABASE IF NOT EXISTS $database");

    $db_connect = mysqli_connect($server, $login, $password, $database);
}