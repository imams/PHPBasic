<?php

spl_autoload_register(function($class){
	include $class.'.php';
});

$printer = new autoloaderPrinter();
$buku = $printer->cetakBuku('Menyelami framework laravel');

$kurir = new autoloaderKurir();
$kurir->kirim($buku, 'Bandung');
?>