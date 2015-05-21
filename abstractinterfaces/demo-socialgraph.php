<?php
include "Facebook.php";
include "Twitter.php";
include "SocialGraph.php";

$fbtukul = new Facebook("Tukul arwana", "Kembali ke laptop");
$fbtukul->like();
$fbtukul->like();
$fbtukul->like();

$twjokowi = new Facebook("Joko widodo", "Aku rapopo");
$twjokowi->favorite();
$twjokowi->favorite();



$socialGraph = new SocialGraph();
$socialGraph->compareLike($fbtukul, $twjokowi);
?>