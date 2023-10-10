<?php 

$string = "admin";
$hash = password_hash($string, PASSWORD_DEFAULT);

$hash = "$2y$10.$N7zXoxnybsrUlITMkvIheD.sk1h5LGaOZwuYq71PuyZgQox6QoHm";


$verify = password_verify($string, $hash);


?>