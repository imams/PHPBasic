<?php
include_once "Twitter.php";

$twitter = new Twitter("Mario","Menikahi orang yang di cintai adalah kemungkinan. 
tapi mencintai orang yang di nikahi adalah kewajiban.");
echo "Akun twitter : " . $twitter->username() ."<br>";
echo "Tweet : " . $twitter->tweet(). "<br>";
?>