<link rel="stylesheet" href="main.css">
<body class="fund">
<?php 

$salario = (double)($_POST['G']);
echo "O valor informado foi R$ ".number_format($salario,2); 

if ($salario <=3000){
$salario += ($salario * 50)/100; }
else if ($salario > 3000 && $salario <= 10000){
$salario += ($salario * 20 )/100; }
else { $salario += ($salario * 15)/100; }

echo " e o reajuste salarial foi para R$ " .number_format($salario,2). "!";
?><br />

<button ><a class="voltar" href="calculo.html">  Voltar </a></button>
</body>
