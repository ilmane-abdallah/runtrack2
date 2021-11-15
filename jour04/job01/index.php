
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="#" method="get">

    <label for="nom" id="nom">smith</label>
    <input type="text" name="nom">

    <label for="prenom" id="prenom">john</label>
    <input type="text" name="prenom">
    <input type="submit" value="envoyez">


</form>



</body>
</html>
<?php


$pre=array('p','r','e','n','o','m');

foreach($pre as $key=>$value)
    echo $key.$value.'<br/>';


?>

