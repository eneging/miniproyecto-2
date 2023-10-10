<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
 require_once($_SERVER["DOCUMENT_ROOT"] .  "../config/database.php" ); 



extract($_POST);

$response = $mysqli->query("SELECT * FROM users WHERE Email= '$email' AND Contrasena= '$contrasena'");



    session_start();
    $_SESSION["users"] = $response->fetch_assoc();
    header("Location: /views/dashboard.php");

if ($response->num_rows === 1){

echo "las credenciales coincidaden";

} else{

    echo "no coincide";
}


 } else {
   

echo "fallo";

 }
 

?>

