<?php
    session_start();
    header('X-Powered-By: UFOs!');
    // Get out of my base!
    isset( $_SESSION['auth'] ) or header('Location: ../../index.php');
    // Check the secret
    !isset( $_GET['bird'] ) or header('Location: ./ufo');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El pueblo</title>
    <link rel="stylesheet" href="style.css">
    <!--
        ¿Nuestros mayor enemigo? ¡Los ROBOTS!
                            Firmado: ~K
    -->
</head>
<body>
    <img class="x mountains" src="village/mountains.png">
    <img class="x trees" src="village/trees.png">
    <img class="x backbush" src="village/backbush.png">
    <img class="x houses" src="village/houses.png">
    <img class="x grass" src="village/grass.png">
    <img class="x middlebush" src="village/middlebush.png">
    <a href="?bird"><img class="bird" src="village/bird.gif"></a>
    <img class="sign" src="village/sign.png">
    <img class="x lights" src="village/lights.gif">
    <img class="x street" src="village/street.png">
    <img class="x moths" src="village/moths.gif">
    <img class="x frontbush" src="village/frontbush.png">

    <!--
                         _____
                      ,-"     "-.
                     / o       o \
                    /   \     /   \
                   /     )-"-(     \
                  /     ( 6 6 )     \
                 /       \ " /       \
                /         )=(         \
               /   o   .--"-"--.   o   \
              /    I  /  -   -  \  I    \
          .--(    (_}y/\       /\y{_)    )--.
         (    ".___l\/__\_____/__\/l___,"    )
          \                                 /
           "-._      o O o O o O o      _,-"
               `--Y--.___________.--Y--'
                  |==.___________.==|
                  `==.___________.=='
    -->

</body>
</html>