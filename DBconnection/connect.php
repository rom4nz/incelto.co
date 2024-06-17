<?php

$servername = "localhost";
$username = "id21696259_inselto";
$pwd = "Incelto@2001";
$db = "id21696259_inselto_co";

$conn = mysqli_connect($servername, $username, $pwd, $db);

// Check connection
if (!$conn) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>