<?php
/*
section 1:
1. d
2. b
3. c
4. b
5. c

section 2:
6. $ symbol
7. echo/print
8. .operator
9. function functionname()
10. var_dump()

*/

//section 3:
//11 Variable 
$x = 30;
$y = 80;
$x += $y;
echo  $x;
echo "<br>";

//12 odd or even no
//Comment one - Create inside the function.
$a = 26;
if($a%2==0){
    echo "no is even";
}
else{
    echo "no is odd";
}
echo "<br>";

//13Print numbers
for($i=1; $i<=10; $i++){
echo "The no. is : $i <br>";
}

//14 Display colors
$color = array("Red", "Green","Blue", "Yellow", "Orange");

foreach ($color as $x)
echo $x . "<br>";


//15 function - Not completed
function myfunction(){
$z = "123";
echo "$z";
}

myfunction();


?>
