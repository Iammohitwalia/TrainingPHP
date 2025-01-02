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

    $students = array(
        "Aarav" => array("age" => 20,"rollno."=> 01,"Division"=> "First"),
        "sourabh" =>array ("age" => 18,"rollno."=> 02,"Division"=> "second"),
        "avinash" =>array ("age" => 20,"rollno."=> 03,"Division"=> "third"),
        "lovely" => array("age" => 17,"rollno."=> 04,"Division"=> "fourth"),
        "samriti" =>array ("age" => 21,"rollno."=> 05,"Division"=> "fifth"),
        "divisha" => array("age" => 20,"rollno."=> 06,"Division"=> "sixth"),
        "sharanya" => array("age" => 15,"rollno."=> 07,"Division"=> "seventh")
    );
echo $students["sharanya"]["Division"];
echo "<br>";
echo $students["divisha"]["rollno."];
echo "<br>";
echo 
$students["sourabh"]["age"];
echo"<br>";

$matrix = [
    [1 ,2 ,3,4,5],
    [6 ,7,8,9,10],
    [11,12,13,14],
];
echo $matrix [2][2];
echo "<br>";

$employes =[
    "employe"=>["age"=>20, "division"=>"first" ,"salary"=> "10k"],
    "employe1"=>["age"=>20, "division"=>"second", "salary"=> "20k"],
    "employe2"=>["age"=>20, "division"=>"third" ,"salary"=> "30k"],

];

echo $employes ["employe2"]["salary"];




?>