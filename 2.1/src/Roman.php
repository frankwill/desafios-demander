<?php

namespace frankwsb\src;

class Roman
{
  public int $num;

  public static function convertNumberToRoman(int $num): string
  {
    $map = [
      1000 => 'M',
      900  => 'CM',
      500  => 'D',
      400  => 'CD',
      100  => 'C',
      90   => 'XC',
      50   => 'L',
      40   => 'XL',
      10   => 'X',
      9    => 'IX',
      5    => 'V',
      4    => 'IV',
      1    => 'I'
    ];

    $roman = '';
    foreach ($map as $value => $symbol) {
      while ($num >= $value) {
        $roman .= $symbol;
        $num -= $value;
      }
    }
    return $roman;
  }

  public static function convertRomanToNaturalNumber(string $roman): int
  {
    $map = [
      'M' => 100,
      'CM' => 900,
      'D' => 500,
      'CD' => 400,
      'C' => 100,
      'XC' => 90,
      'L' => 50,
      'XL' => 40,
      'X' => 10,
      'IX' => 9,
      'V' => 5,
      'IV' => 4,
      'I' => 1
    ];

    $num = 0;
    $prevValue = 0;

    $romanArray = str_split($roman);

    foreach ($romanArray as $char) {
      $currentValue = $map[$char];      
      
      if($currentValue > $prevValue) {
        $num += $currentValue - 2 * $prevValue;
      } else {
        $num += $currentValue;
      }

      $prevValue = $currentValue;
    }

    return $num;
  }
}
