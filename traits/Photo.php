<?php
include "SocialThing.php";
include "Shareable.php";

class Photo extends SocialThing{
	use Shareable;
}

$photo = new Photo('Penantian.jpg');
$photo->share();

?>