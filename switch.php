<?php
//Switch Statement
//1
$favfruit = "Litchi";
switch($favfruit) {
case "Litchi":
echo "My favorite fruit is Litchi" ;
break;
case "Mango":
echo "My favorite fruit is Mango" ;
break;
case "Orange":
echo "My favorite fruit is Orange" ;
break;
case "Kiwi":
echo "My favorite fruit is Kiwi " ;
break;
default:
echo "None of my favorite Fruit is here" ;
} echo "<br>";

//2

$color = "black";
switch ($color) {
case "blue":
echo "The color is blue.";
break;
case "green":
echo "The color is green.";
break;
case "black":
echo "The color is black.";
break;
default:
echo "Color not recognized.";
break;
} echo "<br>";

//3
$member = "sister";
switch ($member) {
case "brother":
echo "He is my brother";
break;
case "sist":
case "aunt":
case "auncle":
case "mother":
case "sister":
echo " I find  my sister yeah!!!!";
break;
default:
echo "I cant find my sister here";
} echo "<br>";

//4
$a = 6;
switch ($a) {
case 2 :
echo "Today is Tuesday";
break;
case 5 :
echo "Today is Friday";
break;
case 7 :
echo "Today is Sunday";
break;
default:
echo "I Dont know the Day!!!"; 
} echo "<br>";

//5
$m = 01;
switch($m) {
default:
echo "I know the month is January";
break;
case 10:
echo "October";
break;
case 06:
echo "June";
break;
case 07:
echo "July";
break;
case 01:
echo "January";
case 03:
echo "March";
}
?>