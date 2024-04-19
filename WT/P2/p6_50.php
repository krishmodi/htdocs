<?php
$firstNumber =  readline("Enter a first number : ");
$secondNumber =  readline("Enter a last number : ");

function isPrime($number)
{
for ($i = 2; $i < $number; $i++) {
if ($number % $i == 0) {
return false;
}
}
return true;
}

echo "All prime numbers between $firstNumber and $secondNumber is : ";
for( $i = $firstNumber; $i < $secondNumber; $i++ ) {
if (isPrime($i)) {
echo "$i , ";
}
}
?>
