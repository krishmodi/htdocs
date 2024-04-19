<?php
$array1= array("Krish","Aryan");
$array2= array("Parth","Dhruv");

echo "Array 1 : ";
for ($i=0; $i <count($array1); $i++) { 
    echo "$array1[$i] "."\t"."\t";
}

echo "</br>";

echo "Array 2 : ";
for ($i=0; $i <count($array2); $i++) { 
    echo "$array2[$i] "."\t"."\t";
}

echo "</br>";

$mergedArray=array_merge($array1, $array2);

echo "After merging : ";
for ($i=0; $i <count($mergedArray); $i++) { 
    echo "$mergedArray[$i] "."\t";
}

?>
