<?php
//Arithmatic operators
//Addition
$x = 30;
$y = 80;
$z=$x + $y;
echo $z ."<br>";
$a = 40;
$b = -90;
echo $a +  $b . "<br>";

//Subtraction
$x = 50;
$y = 90;
$z = $x - $y;
echo $z . "<br>";
 $x = -90;
 $y = -100;
 echo $x - $y . "<br>";

//Multiplication
$x = 20;
$y = 50;
$z = $x * $y;
echo $z . "<br>";
$x = -50;
$y = 30;
echo $x * $y . "<br>";

//Divide
$x = 70;
$y = 80;
$z = $x / $y;
echo $z . "<br>";

$x = 200;
$y = 60;
echo $x / $y . "<br>";

//Modulus
$x = 30;
$y = 700;
$z = $x % $y;
echo $z . "<br>";

//Expontiation
$x = 20;
$y = 40;
$z = $x ** $y;
echo $z . "<br>";
$x = 4;
$y = 10;
echo $x ** $y . "<br>";
$x = 300;
$y = -60;
echo $x ** $y ."<br>";
$x = 500;
$y  =8900;
echo $x ** $y . "<br>" . "<br>";

//Comparision operators
//Equal 
$x = 300;
$y = 300;
var_dump ($x == $y);
$x = 800;
$y = 500;
var_dump ($x == $y);

//identical operators
$x = 600;
$y = 200;
var_dump($x === $y);

$x = "300";
$y = "306";
var_dump($x === $y);

$x = 410;
$y = "206";
var_dump($x === $y);


//not equal to

$x = 20;
$y = 30;
var_dump($x != $y);

$x = 30;
$y = 30;
var_dump($x != $y);

//Not equal to

$x = 20;
$y = 20;
var_dump($x <> $y);

$x =500;
$y = 600;
var_dump($x <> $y);

//Not identical 

$x = 300;
$y = "300";
var_dump($x !== $y);

$x = 300;
$y = 200;
var_dump($x !== $y);

//Greater than

$x = 700;
$y = 500;
var_dump($x > $y);

$x = 200;
$y = 500;
var_dump($x > $y);

//less than

$x = 400;
$y = 500;
var_dump($x < $y);

$x = 600;
$y = 500;
var_dump($x < $y);

//Greater than equal to

$x = 650;
$y = 600;
var_dump($x >= $y);

$x = 600;
$y = 600;
var_dump($x >= $y);

$x = 500;
$y = 600;
var_dump($x >= $y);

//Less than wqual to

$x = 600;
$y = 900;
var_dump($x <= $y);

$x = 200;
$y = 200;
var_dump($x <= $y);

$x = 20;
$y = 10;
var_dump($x <= $y);

//Spaceship

$x =700;
$y = 600;
var_dump($x <=> $y);

$x =500;
$y = 600;
var_dump($x <=> $y);
$x =220;
$y = 220;
var_dump($x <=> $y);
?>