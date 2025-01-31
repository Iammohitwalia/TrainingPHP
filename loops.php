<?php
//while loop
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
  echo "<br>";
}
echo "<br>";

$i = 10;
while ($i < 15){
  echo $i;
  $i++;
  echo "<br>";
}
echo "<br>";
//while break
$i = 1;
while ($i < 6) {
  if ($i == 3)break;
  echo $i;
  $i++;
  echo "<br>";
}
echo "<br>";

//while continue
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3)continue;
  echo $i;
  echo "<br>";
}
echo "<br>";

//do while loop
$i = 1;
do{
    echo $i;
    $i++;
    echo "<br>";
}
   while ($i < 0);
echo "<br>";

   $i = 8;
do {
  echo $i;
  $i++;
  echo "<br>";
} 
while ($i < 6);
echo "<br>";

//do while break
$i = 1;
do {
  if ($i == 5)break;
  echo $i;
  $i++;
  echo "<br>";
} 
while ($i < 6);
echo "<br>";

//do while continue
$i = 0;
do {
  $i++;
  if ($i == 4 )continue;
  echo $i;
  echo "<br>";
} 
while ($i < 6);
echo "<br>";

//for loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  echo "<br>";

//for break
  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }
echo "<br>";

//for continue
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>"; 
}
  echo "<br>";

  //foreach loop
  $colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  echo "$x <br>";
}
echo "<br>";

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
echo "<br>";

//foreach break
$colors = array("Red", "Green", "Blue", "Yellow");
foreach($colors as $x) {
  if ($x == "Blue")break;
  echo "$x <br>";
}
echo "<br>";

//foreach continue
$colors = array("Red", "Green", "Black", "Violet", "Yellow", "Pink", "Brown", "Grey");
foreach ($colors as $x) {
    if ($x == "Black")continue;
    echo "$x <br>";
} 
echo "<br>";


$fruits = array("Apple", "Banana", "Kiwi", "Guava", "Orange", "Pineapple", "Papaya", "Grapes" );
foreach ($fruits as $x){
  echo "$x <br>";
}
echo "<br>";
 
$fruits = array("Apple","Banana", "Kiwi", "Orange", "Pineapple", "Papaya", "Grapes" );
foreach ($fruits as $x){
if ($x == "Pineapple")break;
echo "$x <br>";
}
echo "<br>";

$fruits = array("Apple", "Banana","Kiwi", "Orange", "Pineapple", "Papaya", "Grapes");
foreach($fruits as $x){
  if ($x == "Orange")continue;
  echo "$x <br>";
}
echo "<br>";
?>