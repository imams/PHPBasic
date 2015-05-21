<?php

abstract class PaymentMethod{

	public function cekNamaPembayaran(){
		return "Anda melakukan pembayran dengan ".get_class($this)."<br>";
	}
	abstract public function kredit($jumlah);
	abstract public function deposit($jumlah);
	abstract public function cekSaldo();

}

?>