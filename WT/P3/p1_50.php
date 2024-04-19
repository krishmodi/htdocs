<?php
$myArray= array(5,2,45,67,23,234,0,34,234);

echo "Original Array : ";
for ($i=0; $i <count($myArray); $i++) { 
    echo "$myArray[$i] "."\t";
}

echo "</br>";
$arrayMax=max($myArray);
$arrayMin=min($myArray);

echo "Max of Array : $arrayMax </br>";
echo "Min of Array : $arrayMin </br>";

?>
