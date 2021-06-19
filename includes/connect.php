<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$base = "pwa_projekt";

$dbc = mysqli_connect($servername, $username, $password, $base) or die('Error connecting to MySQL server.' . mysqli_connect_error());

mysqli_set_charset($dbc, "utf8");

?>