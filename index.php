<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
$tableau = array();
$tableau['nom'] = 'dupont';
$tableau['prenom'] = 'jean';
$tableau['age'] = 28;
$tableau['sexe'] = 'M';
$tableau['profession'] = 'caissier';

$tableau['nom'] = 'piper';
$tableau['prenom'] = 'Eric';
$tableau['age'] = 62;
$tableau['sexe'] = 'M';
$tableau['profession'] = 'retraite';

$tableau['nom'] = 'Durant';
$tableau['prenom'] = 'Julie';
$tableau['age'] = 28;
$tableau['sexe'] = 'F';
$tableau['profession'] = 'avocate';

$tableau['nom'] = 'Rosiere';
$tableau['prenom'] = 'Karima';
$tableau['age'] = 24;
$tableau['sexe'] = 'F';
$tableau['profession'] = 'infirmiere';

$tableau['nom'] = 'Babar';
$tableau['prenom'] = 'Vincent';
$tableau['age'] = 42;
$tableau['sexe'] = 'M';
$tableau['profession'] = 'carreleur';



?>


<?php
$euro=6.55957;
printf("%.2f FF<br />",$euro);
$money1 = 68.753;
$money2 = 54.319;
$money1 = $money1 + $money2;
//echo $money affichera "123.1";
echo "affichage sans printf : " . $money . "<br />";
$monformat = sprintf("%01.1f", $money);

//echo $monformat affichera "123.10"
echo "2 affichage avec sprintf : " . $monformat . "<br />";

$year="2002";
$month="4";
$day="5";
$varDate = sprintf("%04d-%02d-%02d", $year, $month, $day);

//echo $varDate affichera "2002-04-05"
echo "3 affichera avec sprintf : " . $varDate . "<br />";

sprintf("%01.2f",$money);
printf("%01.2f",$money);

?>




</body>
</html>