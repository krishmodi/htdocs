<?php
$myArray = array("Aryan","Aryan","Krish","Dhruv","Dhruv");

echo "Array : ";
for ($i = 0; $i < count($myArray); $i++) {
    echo $myArray[$i] . " ";
}
echo "</br>";

$uniqueInArray = array_unique($myArray);

echo "Unique elements in array : ";
foreach ($uniqueInArray as $element) {
    echo $element . " ";
}
?>
