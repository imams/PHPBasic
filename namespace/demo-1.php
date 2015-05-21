<?php
//buatan kita
namespace Gue;
class URLShortener {
	public function __construct(){
		echo "Membuat shortener...";
	}
}

//dari bitly
namespace Bitly;
class URLShortener {
	public function __construct(){
		echo "Membuat shortener dengan API bitly...";
	}
}

$shortener = new \Gue\URLShortener();
$bitly = new \Bitly\URLShortener();
?>