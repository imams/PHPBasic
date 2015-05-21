<?php
include "SocialThing.php";
include "Shareable.php";

class Status extends SocialThing{
	use Shareable;
}

$status = new Status("Menikah itu mendewasakan. bukan menunggu dewasa. berhenti ah mencari alasan. Move On!");
$status->share();
?>