<?php

$str="I'm sorry Dave I'm afraid I can't
do that";
 
$voyelle=array('a','o','I','e','u','i');



for($i=0;$i<=(isset($str[$i]));$i++){
    foreach($voyelle as $value){
        if($value == $str[$i]){
    
            echo $str[$i]; 

        }
       
    }
}
?>
