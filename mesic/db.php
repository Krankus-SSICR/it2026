<?php
    $servername = "localhost";
    $username = "krankus";
    $password = "databaze456";
    $db = "it2026";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Selhalo připojení k db". $conn->connect_error);
    }    

?>