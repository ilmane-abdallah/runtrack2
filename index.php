<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<?php
    $booléens = true;
    $chaineDeCaractere = 'Variable chaine de caractère';
    $int = 20;
    $float = 20.5;
?>
<body>
    <table>
    <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>  
</tr>
    <tr>

    <td>string</td>
    <td> 'Variable chaine de caractère'</td>
    <td><?= $chaineDeCaractere ?></td>
</tr>

<tr>

<td>int</td>
<td>entiers</td>
<td><?=$int?></td>
</tr>

<tr>

<td>float</td>
<td>nombre decimaux</td>
<td><?=$float?></td>
</tr>

<tr>

<td>bool</td>
<td>booléens</td>
<td><?=$booléens ?></td>

</tr>


</table>

</body>
</html>