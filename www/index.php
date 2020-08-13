<?php
    session_start();
    header('X-Powered-By: Secrets!');
    
    // Check if the challenge was resolved
    if( isset( $_POST['passwd'] ) && $_POST['passwd'] === 't0p_s3cr3t_444c3sss-' . substr( session_id(), -4 ) ) {
        $_SESSION['auth'] = true;
        header('Location: ./base/a3155c11da7e27fe0f70cefe681b468f/');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area 52</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex-cc">
    <div class="banner">
        <h2>SOLO PERSONAL AUTORIZADO PUEDE ACCEDER AL ÁREA 52</h2>
        <h4>Escribe aquí tu contraseña para poder visualizar el material clasificado</h4>
    </div>
    <form method="POST">
        <input type="password" name="passwd">
        <button>SANTO Y SEÑA</button>
    </form>

    <!--
        Dejo por aquí mi contraseña por si me la olvido algún día:
                t0p_s3cr3t_444c3sss-<?=substr(session_id(), -4)?>

                                                Firmado: ~K
    -->
</body>
</html>