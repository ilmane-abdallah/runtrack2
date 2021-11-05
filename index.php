	
<?php


$str='Tous ces instants seront
perdus dans le temps comme les larmes sous la pluie.';
$num=0;
while(isset($str[$num])==true){
    if(isset($num)==true and $num % 2 ==0){
        echo $str[$num];


    }else{
        echo false;
    }

    $num++;
}

  


?>