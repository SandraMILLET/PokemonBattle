<?php

require 'class/Pokemon.php';

$pok1 = new Pokemon('Bidoof', 'Je suis un peu gros', 'img/bidoof.png');
$pok2 = new Pokemon('Darkrai', 'Je suis tout noir', 'img/darkrai.png');
$pok3 = new Pokemon('Goupix', 'Tellement gentil et mignon', 'img/goupix.png');
$pok4 = new Pokemon('Noctali', 'Trop mimi trop cute', 'img/noctali.png');
$pok5 = new Pokemon('Pichu', 'Attention je grille', 'img/pichu.png');
$pok6 = new Pokemon('Tygnon', 'Je cogne fort !', 'img/tygnon.png')


?>

<!DOCTYPE html>
<html>

<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid logo">
        <div class="row">
            <div class="col-12">
                <img class="reset-logo" title="Reset the Game" src="img/pokemon-logo.png">
            </div>

        </div>
    </div>


    <div class="container-fluid poke">
        <div class="row">

            <img class="pokeball" src="https://cdn.dribbble.com/users/1060557/screenshots/2623317/poke-dribbble.png">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 box-choose">

                <img class="choix" src="https://fontmeme.com/permalink/200205/ddcfaa26c48d26b0fc79dd6bb5e91a2c.png"
                    alt="police-pokemon"></a>

            </div>
        </div>

        <!-- POKEMON AVATAR -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">

                    <img data-name="<?php echo $pok1->getName()   ?>" class="avatar"
                        src="<?php echo $pok1->getAvatar(); ?>">
                </div>
                <div class="col-2">

                    <img data-name="<?php echo $pok2->getName()   ?>" class="avatar"
                        src="<?php echo $pok2->getAvatar(); ?>">
                </div>
                <div class="col-2">

                    <img data-name="<?php echo $pok3->getName()   ?>" class="avatar"
                        src="<?php echo $pok3->getAvatar(); ?>">
                </div>
                <div class="col-2">

                    <img data-name="<?php echo $pok4->getName()   ?>" class="avatar"
                        src="<?php echo $pok4->getAvatar(); ?>">
                </div>
                <div class="col-2">

                    <img data-name="<?php echo $pok5->getName()   ?>" class="avatar"
                        src="<?php echo $pok5->getAvatar(); ?>">
                </div>
                <div class="col-2">

                    <img data-name="<?php echo $pok6->getName()   ?>" class="avatar"
                        src="<?php echo $pok6->getAvatar(); ?>">
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="box-btn">
        <button onclick="attaquer()" type="button" id="boutonatk">Attaquer !</button>
    </div>

    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>