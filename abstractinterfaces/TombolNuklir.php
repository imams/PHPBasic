<?php

include "Tombol.php";

class TombolNuklir extends Tombol{
	public function tekan(){
		echo "Bom nuklir telah di luncurkan! <br>";
		sleep(3);
		echo "Boommmm!!! <br>";
	}
}

?>