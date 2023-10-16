<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form>

        <label>contenido texto</label>
        <input>

        <label>imagen URL</label>
        <input>

        <select>

            <option>Juan</option>
            <option>Santiago</option>
            <option>Pedro</option>


        </select>





    </form>




</body>

</html>





<div class="photo">
    <p>PHOTO</p>
    <div><img class="img" src="/public/perfil/<?php echo $usuario_photo; ?>" alt=""></div>
</div>
<div class="name">
    <p>NAME</p>
    <div><?php echo $usuario_nombre; ?></div>
    <div class="bio">
        <p>BIO</p>
        <div><?php echo $usuario_bio; ?></div>
        <div class="phone">
            <p>PHONE</p>
            <div> <?php echo $usuario_phone; ?> </div>
            <div class="email">
                <p>EMAIL</p>
                <div> <?php echo $usuario_email; ?></div>
                <div class="password">
                    <p>PASSWORD</p>
                    <div> <?php echo "********"; ?></div>
                </div>
            </div>