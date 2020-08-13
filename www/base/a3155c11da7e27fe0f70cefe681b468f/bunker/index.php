<?php
    session_start();
    header('X-Powered-By: Bunkers!');
    // Get out of my base!
    isset( $_SESSION['auth'] ) or header('Location: ../../../index.php');
    // Check xpedient
    if( isset( $_POST ) ) {
        if ( isset( $_POST['ufo-id'] ) && $_POST['ufo-id'] === 'ID:uf0:d3adb33f:' . substr( session_id(), -4 ) )
            $_SESSION['xpedient'] = "identified";
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if( !isset( $_SESSION['xpedient'] ) ) { ?>
    <div class="monitor">
        <p>Te doy la bienvenida al <b>BÚNKER</b></p>
        <hr>
        <p>Da gusto verte por aquí de nuevo, agente <b>K</b></p>
        <p>
            Al parecer, un OVNI ha sido visto por el pueblo.<br>
            Necesitamos comprobar que no es uno de los nuestros.
        </p>
        <p>
            Por favor, introduce su número de identificación aquí:
        </p>
        <form method="POST">
            <input name="ufo-id" type="text">
            <button>COMPROBAR</button>
        </form>
        <br>
    </div>
    <?php } ?>
</body>
</html>