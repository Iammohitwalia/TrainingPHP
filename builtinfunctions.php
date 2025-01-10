<?php
// Display the current date
echo date("d-m-y"); 
echo "<br>";


//Display the curent day & date
echo date("l, F j, Y"); 
echo "<br>";
echo "<br>";

//Display the calender
$date = time ();

$day = date('d', $date);
$month = date('m', $date);
$year =date('y', $date);

$first_day = mktime(0,0,0,$month, 1, $year);

$title = date ('F' , $first_day);

$day_of_week = date ('D', $first_day);

$days_in_month = cal_days_in_month(0, $month, $year);
echo "<table border =3 width =200>";
echo "<tr><th colspan =50> $title $year </th>";
echo "<tr><td width =62>S</><td width =62>M</td><td width =62>T</td><td width =62>W</td><td width =62>T</td><td width =62>F</td><td width =62>S</td>";

$day_count =1;
 echo "<tr>";

?>