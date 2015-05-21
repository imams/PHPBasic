<?php
class SocialGraph{
	public static function compareLike (Likeable $social1, Likeable $social2){
		
		if ($social1->totalLike() > $social2->totalLike()){
			echo $social1->platform() . " " . $social1->user();
			echo " Lebih populer dari " . $social2->platform(). " ";
			echo $social2->user() . "<br>";
		}

		elseif ($social1->totalLike() < $social2->totalLike()){
			echo $social2->platform() . " ".$social2->user();
			echo " Lebih populer dari ". $social1->platform() . " ";
			echo $social1->user() . " <br> ";
		}

		else{
			echo "Kedua user sama-sama populer";
		}

	}
}
?>