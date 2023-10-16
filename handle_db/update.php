


<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);
var_dump($_FILES);
 $name = $_FILES['Photo']['name'];
 $tmp_name = $_FILES['Photo']['tmp_name'];
 $type = $_FILES["Photo"]["type"];

 $route_db = "/public/img/$name";
 $route = $_SERVER["DOCUMENT_ROOT"] . $route_db;

if (move_uploaded_file($tmp_name, $route)){

require_once($_SERVER["DOCUMENT_ROOT"]."/config/database.php");

$$route_db !== "" && $mysqli->query("UPDATE  users1 SET Photo = '$route_db' WHERE Usuario_ID = $id ");

header("Location: /views/dashboard.php");
}



}   


?>



<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" ){

extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");



$emails !== "" && $mysqli->query("UPDATE users1 SET Email = '$emails' WHERE Usuario_ID = $id ");
$name !== "" && $mysqli->query("UPDATE users1 SET  Name = '$name' WHERE Usuario_ID = $id ");
$phone !== "" && $mysqli->query("UPDATE users1 SET  Phone = '$phone' WHERE Usuario_ID = $id ");
$bio !== "" && $mysqli->query("UPDATE users1 SET Bio = '$bio' WHERE Usuario_ID = $id ");



if ($Contrasena !== ""){


    $hast= password_hash($Contrasena, PASSWORD_DEFAULT);
    $mysqli->query("UPDATE users1 SET Contrasena = '$hast' WHERE Usuario_ID = $id");


   
}



echo ("<script> 
Swal.fire({
    title: 'Custom animation with Animate.css',
    showClass: {
      popup: 'animate__animated animate__fadeInDown'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
  })
</script>");



?>
<?php

header("Location: /views/dashboard.php");



} else {

    header("Location: /index.php");


}

?>


</body>
</html>

