<?php
$servername = "warzone-loadout.mysql.database.azure.com";
$username = "WarzoneTracker@warzone-loadout";//(isset($_SESSION["SQLUSER"]) ? $_SESSION["SQLUSER"] : $_ENV['SQLUSER']);
$password = '$$GetLoadout$$';//(isset($_SESSION["SQLPW"]) ? $_SESSION["SQLPW"] : $_ENV['SQLPW']);
$dbname = "warzoneloadout";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>