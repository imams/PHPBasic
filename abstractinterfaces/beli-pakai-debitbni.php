<?php
require_once "DebitBNI.php";
require_once "Pembeli.php";

try {
	$paymentMethod = new DebitBNI("12345");
	$paymentMethod->deposit(20000000);
	$rahmat = new Pembeli("Morgan", $paymentMethod);
	$rahmat->beli ("Sepatu dance", 250000);
	echo "Saldo terakhir rp.".number_format($paymentMethod->cekSaldo())."<br>";
	echo $paymentMethod->cekNamaPembayaran();
}
catch(Exception $e){
	echo $e->getMessage()."<br>";
}

?>