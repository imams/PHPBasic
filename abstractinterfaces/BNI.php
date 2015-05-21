<?php

class BNI {

	private $saldo;

	public function __construct($pin){
		if($pin == '12345'){
			echo "Berhasil mengaktifkan kartu BNI <br>";
		}
		else{
			$pesan = "PIN yang anda masukan salah :( ";
			throw new Exception($pesan);
		}
	}

	private function catatTransaksi($jenis, $jumlah){
		echo "Mencatat transaksi $jenis sejumlah $jumlah ke buku tabungan <br>";
	}

	public function kredit($jumlah){
		$this->catatTransaksi('transfer keluar', $jumlah);
		$this->saldo -= $jumlah;
	}

	public function deposit($jumlah){
		$this->catatTransaksi('deposit dana', $jumlah);
		$this->saldo += $jumlah;
	}

	public function cekSaldo(){
		return $this->saldo;
	}

}

?>