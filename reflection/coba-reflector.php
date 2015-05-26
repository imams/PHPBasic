<?php
include_once "Penulis.php";
include_once "Buku.php";
$aam	= new Penulis("Aam Amirudin", "Bandung");
$buku 	= new Buku("Membingkai surga dalam rumah tangga", $aam);
//echo $buku;
$reflector = new ReflectionClass($buku);
echo $reflector->getParentClass()->getName()."<br><br>";
var_dump($reflector->getInterfaceNames());
echo "<br>";
echo "<br>";
var_dump($reflector->getMethods());
echo "<br>";
echo "<br>";
var_dump($reflector->getConstructor());
echo "<br>";
echo "<br>";
$constructor = $reflector->getConstructor();
var_dump($constructor->getParameters());
echo "<br>";
echo "<br>";
$parameters = $constructor->getParameters();
var_dump($parameters[0]->getDefaultValue());
?>