<?php

$title = "Bro";
$nama = "Imam";


function bisa($nama){
	echo "Anda pasti bisa closure, $nama ! \n";
}

$nama = function() use ($title, $nama){
	return $title.' '.$nama;
};

bisa($nama());