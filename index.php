<?php

$fizz="Fizz";
$buzz="Buzz";
$fizzb="FizzBuzz";

for($i=0;$i<=100;$i++){

    if($i % 3 == 0 && $i % 5 == 0){
        echo ($fizzb."</br>");
    }

    else if($i %3 == 0){
        echo ($fizz."</br>");
    }

    elseif($i % 5 == 0){
          echo ($buzz."</br>");
    }

    else {
        echo ($i."</br>");
    }


}


?>
