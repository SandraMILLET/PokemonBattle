<?php
require("Pokemon.php");

$bidoof = new Pokemon("Bidoof", 200, 40, "bidoof");
$darkrai = new Pokemon("Darkrai", 200, 100, "darkrai");
$goupix = new Pokemon("Goupix", 200, 40, "goupix");
$pichu = new Pokemon("Pichu", 200, 40, "pichu");
$noctali = new Pokemon("Noctali", 200, 60, "noctali");
$tygnon = new Pokemon("Tygnon", 200, 100, "tygnon");

?>
<a href="" onclick=""><img class="darkrai" src=<?php echo$darkrai->getAvatar()?>.png></a>
<a href="" onclick=""><img class="bidoof" src=<?php echo$bidoof->getAvatar()?>.png></a>
<a href="" onclick=""><img class="goupix" src=<?php echo$goupix->getAvatar()?>.png></a>
<a href="" onclick=""><img class="pichu" src=<?php echo$pichu->getAvatar()?>.png></a>
<a href="" onclick=""><img class="noctali" src=<?php echo$noctali->getAvatar()?>.png></a>
<a href="" onclick=""><img class="tygnon" src=<?php echo$tygnon->getAvatar()?>.png></a>
