<?php

//wersja php 7.4.9
echo PHP_VERSION,'<br>';
//echo phpinfo();
//interpolacja ,

echo 'a', 'b', 'c'; //show a show b show c
echo 'a'. 'b'. 'c'; //add a+b+c show abc

$pow=2**10;
echo $pow; //1024

//operatory bitowe
//and &, or |, not ~, xor ^, <<, >>

$bin = 0b1010;
echo "<br>$bin<br>";

$bin = $bin << 2; // 101000
echo $bin;//40

$bin = $bin >> 3; // 101
echo $bin; //5

//porownanie

$x=1;
$y=1.0;

if ($x == $y) {
  echo '$x jest równa $y';
}
else {
  echo '$x nie jest równa $y';
};

echo '<br>';

if ($x === $y) {
  echo '$x jest równa $y';
}
else {
  echo '$x nie jest równa $y';
};

echo '<br>';
echo gettype($x); //integer
echo '<br>';
echo gettype($y); //double
echo '<br>';

$x=1;
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=$x++;
echo $x; //3
echo $y; //2
$y=++$x*2-1;
echo $x; //4
echo $y;  //7

//operatory rzutowania
//bool, int, float, string, array, object, unstet

$test1 = '123abc45';
$test2 = 20;
$test3 = 0;

echo '<br>';

echo '<br>Typy danych $test1: ' ,gettype($test1);
$test1=(int)$test1;
echo $test1; //123
echo '<br>Typ danych $test1: ' ,gettype($test1);

echo '<br>Typy danych $test2: ' ,gettype($test2);
$test2=(bool)$test2;
echo $test2; //false
echo '<br>Typ danych $test2: ' ,gettype($test2);

echo '<br>Typy danych $test3: ' ,gettype($test3);
$test3=(float)$test3;
echo $test3; //false
echo '<br>Typ danych $test3: ' ,gettype($test3);

//rozmiar typu intiger
echo '<hr',  PHP_INT_SIZE, ' <hr> '; //8

//kontrola typu zmiennych
//is_int(), is_string(), is_float(), is_null()

echo '<br>';

$a=1;
$b=null;

echo is_int($a);
echo is_null($b);
 ?>
