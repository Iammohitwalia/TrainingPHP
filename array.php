<?php

//Indexed Array

$color = array("Red","Blue","Green","Black");
echo $color [0];
echo "<br>";
$car = array("Alto","BMW","Audi","Thar","Scorpio");
echo $car[3];
echo "<br>";

$fruits = array("Apple","Kiwi","Pinapple","Mango");
echo $fruits[2];
echo "<br>";


//Associative Array

$person = ["name"=> "Cherry" ,"age" => 28, "city" => "Newyork"];
echo $person["city"];
echo "<br>";

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964 , "city" => "canada");
echo $car ["model"];
echo "<br>";


//Multidimensional Array

$student = array(
   array ("John", 25,"A"),
   array("Jane", 30,"B"),
   array("Doe", 35, "C")
);
echo $student [1][0];
echo "<br>";

    $person = array(
    "John" => array("age" => 25, "grade" => "A"),
    "Jane" => array("age" => 30, "grade" => "B"),
    "Doe" => array("age" => 22, "grade" => "C"),
    "Ram" => array("age" => 28, "grade" =>"D", "subject" => "English")
    );
    
    echo $person["Ram"]["subject"];
    echo "<br>";

$matrix = [
    [1 , 2 ,3],
    [4 , 5 ,6],
    [7 , 8 ,9]
];
echo $matrix [2][2];
echo "<br>";

?>