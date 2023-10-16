<?php

require_once('../config/database.php');

function all () {

global $mysqli;

$response =$mysqli->query("SELECT * FROM users1");
$data = $response->fetch_all(MYSQLI_ASSOC);


return $data;
}



function getByID($id)

{
    global $mysqli;
    $response = $mysqli->query("SELECT * FROM users1 WHERE Usuario_ID = $id ");

    $data = $response ->fetch_assoc();
 
    return $data;


}
?>