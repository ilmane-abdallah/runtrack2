<?php



$num = 0;



for ( $num = 0 ; $num <= 100 ; $num++ ){

	if($num <= 20){

		 	echo ("<i>");
		 	}

	if($num >= 25 and $num <= 50 ){

		 	echo ("<u>");
		 	} 

	if( $num == 42 ) {
		$num == false;
		echo ("</i></u>"."LaPlateforme_");

	} else {
		echo $num;
	}

	echo ("<br/>"."</i>"."</u>");

		 	
}

?>