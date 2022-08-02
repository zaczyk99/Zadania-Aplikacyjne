<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
</head>

<body>

<?php


$str = $_POST['szyfr'];
$trans = array(
"a" => "2", "b" => "22", "c" => "222", 
"d" => "3", "e" => "33", "f" => "333", 
"g" => "4", "h" => "44", "i" => "444", 
"j" => "5", "k" => "55", "l" => "555", 
"m" => "6", "n" => "66", "o" => "666", 
"p" => "7", "q" => "77", "r" => "777", "s" => "7777", 
"t" => "8", "u" => "88", "v" => "888", 
"w" => "9", "x" => "99", "y" => "999", "z" => "9999", 
" " => "0",  );
$pozmianie = strtr("$str", $trans);




$length = strlen($str);

echo "Wersja gdzie każda liczba jest oddzielona przecinkiem dla czytelnego odczytu </br>";

for ($index = 0; $index < $length; $index++) {
    echo strtr("$str[$index]", $trans);
    echo ",";
}
echo "</br></br>";
echo "Wersja bez oddzielania </br>";


for ($index = 0; $index < $length; $index++) {
    echo strtr("$str[$index]", $trans);
}
?>






</body>
</html>
