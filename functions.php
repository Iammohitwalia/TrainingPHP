<?php 
function myMessage() {
    echo "Hello world! <br>";
    echo "Function is a set of rules";
  }
  myMessage();
echo "<br>";

function math(){
    $a = 189 + 26;
    $b = 9 - 30;
    echo "$a" /"$b";
    echo "<br>";
}
math();

function maths(){
    $a = 189 + 26 / 3000;
    $b = 9 % 30 * 1200;
    echo "$a" *"$b";
    echo "<br>";
}
maths();

function argu($fname, $lname, $age){
    echo "$fname, $lname, $age";
    echo "<br>";
}

    argu("Sabhyata" , "Thakur", "25");
    argu("Surbhi" , "Guleria", "23");

    function myfun($num1 , $num2 , $num3){
        $product = $num1 * $num2 * $num3;
        echo "Product is  $product";
    }
    myfun(3,8,5);
    echo "<br>";
    myfun(48,68,78);
    echo "<br>";
    myfun(11,22,33);
    echo "<br>";

    function setHigh($height = 50) {
        echo "The height is : $height <br>";
      }
      
      setHigh(470);
      setHigh(); // will use the default value of 50
      setHigh(345);
      setHigh(290);

function sum($x, $y){
echo $x % $y;
}
echo "<br>".
sum(45,65);
echo "<br>".
sum(76,85);
echo "<br>".
sum(94,74);
echo "<br>".
sum(20,55);
echo "<br>".
sum(25,95);

function add(&$value){
    $value *= 89;
}
$num = 89;

add($num);
echo $num;
echo "<br>";    


function familyname($name , $year , $lname){
    echo "$name $lname Born in $year  <br>";
}
familyname("Isha", "2000" , "Malviya");
familyname("Divyanshi" , "1999" , "Gupta");
familyname("Evaa" , "1996" , "Thakur");
familyname("Pearl" , "1997" , "Puri");

$String = "Hello World";
$reversedStr = strrev($String); 
echo $reversedStr;
echo "<br>";

function readd($a, $b){
   return $a + $b;
}
$result = readd(798765 , 13456780);
echo $result;
echo "<br>";

function addfive(&$num){
    $num += 6;
}
$value = 20;
addfive($value);
echo $value;
echo "<br>";

function summ(...$number){
    return array_sum($number);
}
echo summ(1,2,3,4,5,6);
echo "<br>";

$greet = function($name){
    return"Hello, $name!";
};
echo $greet("Alice");
echo "<br>";

$multiply = fn($a, $b) => $a * $b;
echo $multiply(3, 4);
echo "<br>";

function factorial($n){
    if ($n == 0)return 1;
    return $n * factorial($n - 1);
}
echo factorial(5);
echo "<br>";
function greet($name = "Guest"){
    echo "Hello, $name!";
}
greet();
echo "<br>";

function greeet($name){
    echo "Hello, $name!";
}
greeet ("John");
echo "<br>";

function greets() {
    echo "Hello, World!";
}
greets();
echo "<br>";

function getuser() {
    return ["name" => "John", "age" => 30];
}

$user = getuser();
echo $user['name'];
echo "<br>";

function checknumber($num) {
if ($num < 0) {
    return "Negative Number";
}
return "Positive Number";
}

echo checknumber(-2);
echo "<br>";

function iseven($num) {
    return $num % 2 == 0;
}

if (iseven(11)) {
    echo "Even number";
}
else {
    echo "Odd number";
}
echo "<br>";

function multiplier($factor) {
    return function($number) use ($factor){
        return $number * $factor;
    };
}

//usage 
$double = multiplier(2);
$triple = multiplier(3);

echo $double(5) , " ";
echo $triple(5);
echo "<br>";

function ssum($x, $y){
$z = $x + $y;
return $z;
}

echo "5 + 10 = " . ssum(5, 10) . "<br>";
echo "7 + 13 = " . ssum(7, 13) . "<br>";
echo "2 + 4 = " . ssum(2, 4) . "<br>";

function summynumber(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}
 $a = summynumber(5,3,6,7,89,3,4,33);
 echo $a;
 echo "<br>";

 function myfamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
        $txt = $txt. "Hi, $firstname[$i] $lastname. <br>";
    }
    return $txt;
 }

 $a = myfamily("Doe", "Jane", "John", "Joey");
 echo $a;

 function addnumbers(int $a, int $b) {
    return $a + $b;
 }
 echo addnumbers(5, 10 );

 function geet($name) {
    return "Hello, $name!";
 }

 echo geet("Alice"). "<br>";
 echo geet("Bob"). "<br>";
 echo geet("Charlie"). "<b>";
echo "<br>";

 function square($num) {
    return $num * $num;
 }

 for ($i = 1; $i <= 5; $i++) {
    echo "Square of $i is " . square($i) . "<br>";
 }

 function factoriall($n) {
if ($n == 0) return 1;
return $n * factoriall($n - 1);

 }
 echo factoriall(5);
 echo "<br>";

 function doublee($n) {
    return $n * 2;
 }

 $number = [1,2,3,4];
 $doublee = array_map('doublee', $number);
print_r($doublee);
?>

