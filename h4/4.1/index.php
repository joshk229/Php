<?php


function Celciusnaarfahrenheit() {
$c = 7;
$f = NULL;
$f = ($c * 9 / 5) + 32;

echo $f."°F";
}

function deelbaar3() {
$a = 4;

if ($a % 3 ) {
$deelbaar = true;
}
else {
$deelbaar = false;
}

return $deelbaar;
}

function reversestring() {
$string = "Broodjes te koop overal";
return strrev($string);
}

Celciusnaarfahrenheit();

if (deelbaar3()) {
echo "<br><br> is niet deelbaar door 3";
}
else {
echo "<br><br> is deelbaar door 3";
}

echo "<br><br>".reversestring();
