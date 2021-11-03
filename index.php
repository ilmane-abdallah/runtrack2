<?php

$bool = false;

for($i=0;$i<=1337;$i++){
    if($i==26 || $i==38 || $i==88 || $i==1111 || $i==3233){
        echo ($bool);
    }
    else{
        echo($i."<br/>");
    }
}

?>