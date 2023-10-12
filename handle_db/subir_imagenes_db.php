<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

 $name = $_FILES['imagen']['name'];
 $tmp_name = $_FILES['imagen']['tmp_name'];
 $type = $_FILES["imagen"]["type"];


}   


?>