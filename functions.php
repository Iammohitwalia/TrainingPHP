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
?>