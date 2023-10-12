<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" ){

extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

var_dump($_POST);

$emails !== "" && $mysqli->query("UPDATE users1 SET Email = '$emails' WHERE Usuario_ID = $id ");
$name !== "" && $mysqli->query("UPDATE users1 SET  Name = '$name' WHERE Usuario_ID = $id ");
$photo !== "" && $mysqli->query("UPDATE users1 SET Photo = '$photo' WHERE Usuario_ID = $id ");
$bio !== "" && $mysqli->query("UPDATE users1 SET Bio = '$bio' WHERE Usuario_ID = $id ");
$phone !== "" && $mysqli->query("UPDATE users1 SET  Phone = '$phone' WHERE Usuario_ID = $id ");


if ($Contrasena !== ""){


    $hast= password_hash($Contrasena, PASSWORD_DEFAULT);
    $mysqli->query("UPDATE users1 SET Contrasena = '$hast' WHERE Usuario_ID = $id");
}

header("Location: /views/dashboard.php");

} else {

    header("Location: /index.php");


}



?>