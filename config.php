<?php
$server = "localhost";
$user = "id13304835_root";
$pw = "9T]2V9uQg-WTyn}v";
$nm_db = "id13304835_covid";
$db = mysqli_connect($server, $user, $pw, $nm_db);

if(!$db){
    die("gagal terhubung ke database: " . mysqli_connect_error());
}
?>