<?php

$row = 8;
$i = 0;
while ($i < $row) {
    echo str_repeat("**", $i) . "<br>";
    $i++;
}
echo "<br>";

//
$row = 7;
$i = $row;
while ($i > 0) {
    echo str_repeat("**", $i);
    $i -= 1;
    echo "<br>";
}
echo "<br>";



//
$rows = 7;
$i = 1;
while ($i <= $rows) {
    $ace = $rows - $i;
    echo str_repeat("&nbsp ", $ace); 
    echo str_repeat("*", $i * 2 - 1); //print increasing no. of *.
    echo "<br>";
    $i++;
}
echo "<br>";



 //Top half
$rows = 8;
$i = 1;
while ($i <= $rows) {

    $ice = $rows - $i;
    $j = 1;

    while ($j <= $ice) {
        echo str_repeat("&nbsp" ,2);
        $j++;
    }
    $a = 1;
    while ($a <= (2 * $i - 1)) {
        echo "*" ;
        $a++;
    }
    echo "<br>";
    $i++;
} 

//Bottom half
$i = $rows - 1;
while ($i >= 0) {
    $ace = $rows - $i;
    $j = 1;
    while ($j <= $ace) {
        echo str_repeat("&nbsp" , 2);
        $j++;
    }
    $a = 1;
    while ($a <= (2 * $i - 1)) {
        echo "*";
        $a++;
    }
    echo "<br>";
    $i--;
}





//star pattern using for loop

$n = 7;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";



//
$n = 7;
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";




//
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";




//
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";



//
$n = 5;
// Upper half
for ($i = 1; $i <= $n; $i++) {
    for ($j = $n - $i; $j >= 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

// Lower half
for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = $n - $i; $j >= 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
