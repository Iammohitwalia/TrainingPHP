<?php
// Display the current date
echo date("d-m-y"); 
echo "<br>";


//Display the curent day & date
echo date("l, F j, Y"); 
echo "<br>";
echo "<br>";

//Display calender
$date = time ();

$day = date('d', $date);
$month = date('m', $date);
$year =date('y', $date);

$first_day = mktime(0,0,0,$month, 1, $year);

$title = date ('F' , $first_day);

$day_of_week = date ('D', $first_day);

switch($day_of_week){
    case "sun": $blank =0; break;
    case "Mon": $blank =1; break;
    case "Tue": $blank =2; break;
    case "Wed": $blank =3; break;
    case "Thu": $blank =4; break;
    case "Fri": $blank =5; break;
    case "Sat": $blank =6; break;

}

$days_in_month = cal_days_in_month(0, $month, $year);
echo "<table border =3 width =200>";
echo "<tr><th colspan =50> $title $year </th>";
echo "<tr><td width =62>S</><td width =62>M</td><td width =62>T</td><td width =62>W</td><td width =62>T</td><td width =62>F</td><td width =62>S</td>";

$day_count =1;
 echo "<tr>";

while
($blank > 0)
{
    echo "<td></td>";
    $blank = $blank-1;
    $day_count++;
}
$day_num = 1;

while 
($day_num <= $days_in_month )
{
    echo "<td> $day_num </td>";
    $day_num++;
    $day_count++;

    if ($day_count > 7)
    {
        echo "</tr><tr>";
        $day_count = 1;

    }
}

 while 
 ($day_count > 1 && $day_count <=7 )
 {
    echo "<td></td>";
    $day_count++;
 }
 echo "</tr><table>";

?>