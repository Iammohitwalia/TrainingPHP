<?php

// logical operators
//and operator
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}

$x = 40;
$y = 30;

 if ($x == 40 and $y == 60){
    echo "Hy Everyone";
 }
 $a = true;
$b = false;

if ($a and $b) {
    echo "Both are true";
} else {
    echo " one is false"; 
}

$x = 5;
$y = 4;
if (($x > $y) and ($x >3)){
    echo "hello";
}
$age = 20;

if ($age >= 18 && $age <= 21){
    echo "You are eligible.";
}

$a = 10;
$b = 20;

if ($a == 10 && $b == 20){
    echo "condition is true";

}


//or & || operator
$a = 10;
$b = 20;

if ($a == 10 or $b == 20) {
    echo " This is true";
}

$a = 10;
$b = 20;

if ($a == 10 or $b == 40) {
    echo " one is true";
}
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello everyone!";
}

$x =50;
$y = 90;

if( $x ==40 || $y == 80) {
    echo "true or false";
}

//not & ! operator

$age = 20;

if (!($age >=18)){
    echo "You are eligible.";
}

$x = 500;  

if (!($x == 280)) {
    echo "Hello world!";
}

//xor operator
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hellooo!!!";
}

//string operators
//concatenation 

$fname = "how's You";
$Sname ="where are you?";
$Fname ="what are you doing";
echo $fname . $Sname . $Fname;

$x=157;
$y=219;
$z=4511;
$a=715;
$b=800;
echo $x . $y . $z . $a . $b;

$d=1.33;
$e=15.41;
$f=123.43;
$g=23.111;
$h=4332.3234;
echo $d . $e . $f . $g .$h ;

//concatenation assignment operator
$s = "hello";
$s .= "this is";
$s .= "our world";
$s .= 456;
echo $s;

$txt1 = "Heloo";
$txt2 = "world";
$txt1 .= $txt2 ;
echo $txt1 . "<br>";


//conditional assignment operators

echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$me = "Rajani";
echo $result = (empty($me)) ? "anonymous" : "logged in";
echo("<br>");

$a = 15;
echo  ($a > 10) ? $b = "true" : $c = "false";
echo "<br>";
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status . "<br>";

$score = 85;
$result = $score >= 50 ?: "Failed";
echo $result; 
?>