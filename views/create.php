


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Crear</h1>
<form style="display: flex; flex-direction:column" method="post" action="../handle_db/create.php">

<label>ID:</label>
<input type="number" disabled value="<?= $id ?>"/>


<label >Email:</label>
<input type="text" value="<?= $Email ?>"  />

<label >Contrasena:</label>
<input type="text" value="<?= $Contrasena?>" />

<label >Photo:</label>
<input type="text" value="<?= $Photo ?>" />

<label >Name:</label>
<input type="text" value="<?= $Name ?>"/>

<label >Bio:</label>
<input type="text"  value="<?= $Bio ?>"/>
 
<label >Phone:</label>
<input type="text" value="<?= $Phone ?>"/>

<button>Guardar</button>
</form>



</body>
</html>
