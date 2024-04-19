<?php
function printFiboWithoutRecurssion($number)
{
if ($number == 0) {
echo "Enter a valid number";
} else if ($number == 1) {
echo "0";
} else if ($number == 2) {
echo " 0 1 ";
} else {
$first = 0;
$second = 1;
$temp = 0;
echo "$first $second ";
for ($i = 2; $i < $number; $i++) {
$temp = $first + $second;
echo "$temp ";
$first = $second;
$second = $temp;
}
}
}

function printFiboWithRecurssion($number,$first=0,$second= 1)
{
if($number==0){
return ;
}
echo $first." ";
printFiboWithRecurssion($number-1,$second,$first+$second);
}

$number = (int) readline("Enter number for Fibonacci ( with recurssion ) : ");
$start_time_nonRecurssive=microtime(true);
printFiboWithoutRecurssion($number);
$end_time_nonRecurssive=microtime(true);
$nonRecurssive_time=$end_time_nonRecurssive-$start_time_nonRecurssive;
echo "\n"."Non-Recurssive function execution time : ".$nonRecurssive_time;

echo "\n";
echo "-----------------------------------------------------------------------------\n";
$number = (int) readline("Enter number for Fibonacci ( without recurssion ) : ");
$start_time_Recurssive=microtime(true);
printFiboWithRecurssion($number);
$end_time_Recurssive=microtime(true);
$recurssive_time=$end_time_Recurssive-$start_time_nonRecurssive;
echo "\n"."Recurssive function execution time : ".$recurssive_time."\n";

echo "-----------------------------------------------------------------------------\n";
if($nonRecurssive_time > $recurssive_time){
echo "Recurssive method more efficient here. \n";
}
else if($nonRecurssive_time < $recurssive_time){
echo "Non - Recurssive method more efficient here. \n";
}
else {
echo "Both methods are equally efficient here.\n";
}
?>
