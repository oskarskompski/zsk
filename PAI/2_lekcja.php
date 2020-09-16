
<?php
$name = 'Jarek';
$lastname = 'Pojarek';
echo 'imię: $name<br>';
echo "imię: $name<br>";
// konkatenacja .
echo " nazwisko: $lastname".'<br>';
echo 'jakby nie bylo jest bardzo milo';



//2

$prawda=true;
$fałsz=false;

echo $prawda; //1
echo "$fałsz<br>";//nic nie wyświetli

// typ intiger
$bin = 0b1011; //11
$oct = 011; //9
$dec = 11; //11
$hex = 0xA;//10

//echo $hex.'<br>';

//składnia heredoc

$name2 = 'janusz';
$text = <<< LABEL
<hr>
Imie: $name2<br>
<hr>
LABEL;
echo $text;

echo <<< L
  heredoc 2<br>
  Imie:$name<hr>
L;


//nowdoc

//echo <<<'L' //wszystko jako tekst
//  nowdoc <br>
//  Imię: $name2<hr>
//L;

$city = 'Buk';
echo "Nazwa zmiennej : \$city, wartosc: $city"

?>
