<?php

function bonjour($jour){
    if($jour == true){
         return "Bonjour";
    }else if ($jour == false){
         return "Bonsoir";
    }
}

echo bonjour(false);
?>