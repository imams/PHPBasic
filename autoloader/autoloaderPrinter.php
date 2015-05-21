<?php

class autoloaderPrinter{
	public function cetakBuku($buku){
		echo "Class " . __CLASS__ . " : ";
		echo "Mencetak buku $buku <br>";
		return "Buku $buku";
	}

}


?>