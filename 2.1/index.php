<?php

use frankwsb\src\Roman;

require_once "src/Roman.php";

$romanNumberConverted = Roman::convertNumberToRoman(21);
// echo $romanNumberConverted; // XXI

$numberToRoman = Roman::convertRomanToNaturalNumber('IV');
echo $numberToRoman; // 4