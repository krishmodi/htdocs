<?php
$myArray= array(5,2,45,67,23,234,0,34,234);

echo "Original Array : ";
for ($i=0; $i <count($myArray); $i++) { 
    echo "$myArray[$i] "."\t";
}
$reversedArray= array_reverse($myArray);
echo "</br>";
echo "Array after reverse : ";
for ($i=0; $i <count($reversedArray); $i++) { 
    echo "$reversedArray[$i] "."\t";
}
?>
