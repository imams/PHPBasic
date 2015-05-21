<?php
abstract class SocialTHing{
	private $content;

	public function __construct($content){
		$this->content = $content;
	}

	public function content(){
		return $this->content;
	}
}
?>