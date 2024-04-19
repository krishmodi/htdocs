<?php
$myArray= array(5,2,45,-67,23,234,0,34,-234);

echo "Array : ";
for ($i=0; $i <count($myArray); $i++) { 
    echo "$myArray[$i] "."\t";
}

echo "</br>";

sort($myArray);

echo "After Sorting : ";
for ($i=0; $i <count($myArray); $i++) { 
    echo "$myArray[$i] "."\t";
}

?>
