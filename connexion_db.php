<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "worldcup2030";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

?>