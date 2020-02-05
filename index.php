<?php
require("Pokemon.php");

$bidoof = new Pokemon("Bidoof", 200, 40, $avatar);
$darkrai = new Pokemon("Darkrai", 200, 100, $avatar);
$goupix = new Pokemon("Goupix", 200, 40, $avatar);
$matoufeu = new Pokemon("Matoufeu", 200, 100, $avatar);
$noctali = new Pokemon("Noctali", 200, 60, $avatar);
$tygnon = new Pokemon("Tygnon", 200, 100, $avatar);

?>

<img src=<?php echo$bidoof->getAvatar()?>.png style="width:20%">
