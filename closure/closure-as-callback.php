<?php

$minimal 	= 75;
$dataNilai	= [
	["nama"=>"Imam","nilai"=>90],
	["nama"=>"Revino","nilai"=>80],
	["nama"=>"andina","nilai"=>70],
	["nama"=>"Elfata","nilai"=>60],
];

array_walk($dataNilai, function($siswa) use ($minimal){
	echo "Siswa :". $siswa['nama']. "<br>";
	echo "Nilai :". $siswa['nilai']. "<br>";
	echo "Status :";
		if ($siswa['nilai'] >= $minimal){
			echo "Lulus <br>";
			}
		else{
			echo "Tidak lulus <br>";
		}
	}
	
	)

?>