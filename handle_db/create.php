<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){

extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"] . "../config/database.php");


$hash = password_hash($Contrasena, PASSWORD_DEFAULT);

 $response = $mysqli->query("INSERT INTO users1 (Email, Contrasena) VALUES ('$Email','$hash')");

  header("Location: /views/dashboard.php");


echo "estas ingresando";}
 else {

echo "no esta ingresando";

}



?>