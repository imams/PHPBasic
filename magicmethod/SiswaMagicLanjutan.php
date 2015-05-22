<?php
class Siswa {
	private $nama;
	private $alamat;
	private $berat;
	private $tinggi;

	public function __get($atribute){
		if (property_exists($this, $atribute)){
			if (method_exists($this,'get'.$atribute)){
				return call_user_func([$this,'get'.$atribute]);
			}
			else{
				return $this->$atribute;
			}
		}
	}

	public function __set($atribut, $value){
		if (property_exists($this, $atribut)){
			$this->$atribut = $value;
		}
	}

	public function getBerat(){
		return $this->berat ." kg";
	}

	public function getTinggi(){
		return $this->tinggi . " cm";
	}
}

$siswa 			= new Siswa();
$siswa->nama 	= " Beni";
$siswa->alamat 	= " Bandung";
$siswa->berat 	= 67;
$siswa->tinggi 	= 180;

echo "Siswa " . $siswa->nama . " tinggal di " . $siswa->alamat ."<br>" ;
echo "Dengan berat " .$siswa->berat . " kg dan tinggi " . $siswa->tinggi . " CM <br>";
?>