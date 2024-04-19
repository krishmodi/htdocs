<?php
$myArray = array(5,2,45,-67,23,234,0,34,-234);

echo "Array : ";
for ($i = 0; $i < count($myArray); $i++) {
    echo $myArray[$i] . " ";
}
echo "</br>";

$searchElement = 21;

$searchResult = array_search($searchElement, $myArray);

if ($searchResult) {
    echo "$searchElement is present in array.";
} else {
    echo "$searchElement is not present in array.";
}

?>
