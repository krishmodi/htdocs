<?php
function daysInMonth($month){
if($month>12 || $month<1){
return 0;
}
else if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
return 31;
}
else if($month == 4 || $month == 6 || $month == 9 || $month == 11){
return 30;
}
else{
return 28;
}
}

$askUser=readline("Enter a month number : ");
$resultDay=daysInMonth($askUser);
if($resultDay==0){
echo "Invalid number . Please enter a month number in 1 to 12";
}
else{
echo "Days in Month $askUser is : ".$resultDay;
}
?>
