<?php

//Indexed Array

$color = array("Red","Blue","Green","Black");
echo $color [0];

$car = array("Alto","BMW","Audi","Thar","Scorpio");
echo $car[3];

$fruits = array("Apple","Kiwi","Pinapple","Mango");
echo $fruits[2];


//Associative Array

$person = ["name"=> "Cherry" ,"age" => 28, "city" => "Newyork"];
echo $person["city"];

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964 , "city" => "canada");
echo $car ["model"];


//Multidimensional Array

$student = array(
   array ("John", 25,"A"),
   array("Jane", 30,"B"),
   array("Doe", 35, "C"),
);
echo $student [1][0];

$students =array(
    array("Rohan",10,"A","English"),
    array("Mohan",11 ,"B","Hindi"),
    array("Ram",12,"C","Science"),
    array("Shyam",13,"D","Sanskrit"),
);
echo $students [3][3];

$matrix = [
    [1 , 2 ,3],
    [4 , 5 ,6],
    [7 , 8 ,9],
];
echo $matrix [2][2];

?>