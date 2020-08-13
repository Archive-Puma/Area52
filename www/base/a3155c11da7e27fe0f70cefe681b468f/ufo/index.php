<?php
    session_start();
    header('X-Powered-By: Aliens?');
    // Get out of my base!
    isset( $_SESSION['auth'] ) or header('Location: ../../../index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="_">
        Buenas noches, ser de la raza humana. No vas a poder obtener lo que quieres de nosotros.
        Tenemos protección contra cualquier arma disponible en el Area 52.
        <?php if ( isset( $_GET['x'] ) ) echo('Salvo para los XSS'); ?>
    </p>
    <?php
        if ( isset( $_GET['x'] ) ) {
            echo('<p class="_">');
            echo(
                (strpos($_GET['x'], '<') !== false && strpos($_GET['x'], '>') !== false && strpos($_GET['x'], '/') !== false)
                    ? 'Tu ganas. Mi ID es:<br>ID:uf0:d3adb33f:' . substr( session_id(), -4 )
                    : 'Has dicho algo que no me afecta: ' . $_GET['x']
            );
            echo('</p>');
        }
    ?>
    <form method="GET">
        <input name="x" type="text">
    </form>
</body>
</html>