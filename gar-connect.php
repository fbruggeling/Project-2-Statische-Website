<?php

// Auteur: R. Wigmans
// Functie: connectie database maken

/////////////SERVER-instellingen voorbeelden PDO connectie//////////////

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage";

// connectiem maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "connect database";

?> 