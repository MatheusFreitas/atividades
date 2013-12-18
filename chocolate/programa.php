<?php

$contagem = 0;
$chocE = 0;
$chocB = 0;
$promoE = 0;
$promoB = 0;

$chocE = $_POST["chocolateescuro"];
$chocB = $_POST["chocolatebranco"];

$contagem = 3;
while($contagem <= $chocE) {
  $promoB = $promoB + 1;
  $contagem = $contagem + 3;

}

$contagem = 2;
while($contagem <= $chocB) {
	$promoE = $promoE + 1;
	$contagem = $contagem + 2;
}

