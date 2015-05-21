<?php

require_once "Pembeli-DI.php";
//melakukan pembelian dengan bni

try{
	$bniKu = new BNI('12345');
	$bniKu->deposit(2000000);
	$rudy =  new Pembeli("Rudy", $bniKu);
	$rudy->beli("CD Smash - Step forward", 80000);
	echo "Saldo terakhir Rp.".$bniKu->cekSaldo()."<br>";
}
catch (Exception $e){
	echo $e->getMessage()."<br>";
}

?>