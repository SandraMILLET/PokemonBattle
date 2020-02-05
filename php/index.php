<?php
require("Pokemon.php");

$bidoof = new Pokemon("Bidoof", 200, 40, "bidoof");
$darkrai = new Pokemon("Darkrai", 200, 100, "darkrai");
$goupix = new Pokemon("Goupix", 200, 40, "goupix");
$pichu = new Pokemon("Pichu", 200, 40, "pichu");
$noctali = new Pokemon("Noctali", 200, 60, "noctali");
$tygnon = new Pokemon("Tygnon", 200, 100, "tygnon");

?>

<img src=<?php echo$bidoof->getAvatar()?>.png>
<img src=<?php echo$darkrai->getAvatar()?>.png>
<img src=<?php echo$goupix->getAvatar()?>.png>
<img src=<?php echo$pichu->getAvatar()?>.png>
<img src=<?php echo$noctali->getAvatar()?>.png>
<img src=<?php echo$tygnon->getAvatar()?>.png>
