<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    require_once($_SERVER["DOCUMENT_ROOT"] . "../config/database.php");

    try {
        if (isset($Email, $Contrasena) && $Email !== "" && $Contrasena !== "") {
            $hash = password_hash($Contrasena, PASSWORD_DEFAULT);
            $response = $mysqli->query("INSERT INTO users (Email, Contrasena) VALUES ('$Email', '$hash')");

            if ($response) {
                $res = $mysqli->query("SELECT * FROM users WHERE Email = '$Email';");
                if ($res) {
                    session_start();
                    $_SESSION["users"] = $res->fetch_assoc();
                    header("Location: /view/dashboard.php");
                } else {
                    echo "Error al buscar usuario en la base de datos.";
                }
            } else {
                echo "Error al insertar datos en la base de datos.";
            }
        } else {
            header('Location: /views/register.php');
        }
    } catch (mysqli_sql_exception $e) {
        if ($mysqli->errno === 1062) {
            echo "El correo ya está en uso.";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "Ingresa desde POST.";
}
?>
