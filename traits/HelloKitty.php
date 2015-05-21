<?php
include "Sayap.php";
class HelloKitty implements Sayap{
	public function terbang(){
		echo "Hello kitty terbang dengan sayap berwarna pink :) <br>";
	}
}

$helloKitty = new HelloKitty();
$helloKitty->terbang();
?>