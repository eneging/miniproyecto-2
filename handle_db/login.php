<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
 require_once($_SERVER["DOCUMENT_ROOT"] .  "../config/database.php" ); 


extract($_POST);
$response = $mysqli->query("SELECT * FROM users1 WHERE Email= '$email' ");

   

if ($response->num_rows === 1){
 
    $data = $response->fetch_assoc();


if (password_verify($contrasena, $data["Contrasena"])){
session_start();
$_SESSION["users1"] = $data;
header("Location: /views/dashboard.php");

}

else{

    echo "no coincide";
 
}

}
}

else{

    echo "no coincide nig";


}

?>

