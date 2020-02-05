<?php
require("Pokemon.php");

$bidoof = new Pokemon("Bidoof", 200, 40, "bidoof");
$darkrai = new Pokemon("Darkrai", 200, 100, "darkrai");
$goupix = new Pokemon("Goupix", 200, 40, "goupix");
$matoufeu = new Pokemon("Matoufeu", 200, 100, "matoufeu");
$noctali = new Pokemon("Noctali", 200, 60, "noctali");
$tygnon = new Pokemon("Tygnon", 200, 100, "tygnon");

?>

<img src=<?php echo$bidoof->getAvatar()?>.png style="width:20%">
<img src=<?php echo$darkrai->getAvatar()?>.png style="width:20%">
<img src=<?php echo$goupix->getAvatar()?>.png style="width:20%">
<img src=<?php echo$matoufeu->getAvatar()?>.png style="width:20%">
<img src=<?php echo$noctali->getAvatar()?>.png style="width:20%">
<img src=<?php echo$tygnon->getAvatar()?>.png style="width:20%">
