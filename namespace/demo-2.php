<?php
spl_autoload_register();
$shortener 	= new \Gue\URLShortener();
$bitly		= new \Bitly\URLShortener();
$login		= new \Bitly\Auth\login();
?>