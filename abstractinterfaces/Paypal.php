<?php
require_once 'PaymentMethod.php';

class Paypal extends PaymentMethod{
	private $balance;

	public function __construct($email,$password){
		//ceritanya akses ke database
		if($email == "morgan@gmail.com" & $password="12345"){
			$this->email = $email;
			echo "Berhasil login ke paypal";
		}
		else{
			$pesan = "User ada user dengan usernam/password tersebut :(";
			throw new Exception($pesan);
		}
	}

	private function kirimNotifikasi ($pesan = "Informasi Penting"){
		echo "Mengirim email notifikasi $pesan ke $this->email <br>";
	}

	public function kredit($jumlah){
		$this->kirimNotifikasi('Pengeluaran dana');
		$this->balance -= $jumlah;
	}

	public function deposit ($jumlah){
		$this->kirimNotifikasi('Penerimaan dana');
		$this->balance += $jumlah;
	}

	public function cekSaldo(){
		return $this->balance;
	}

}

?>