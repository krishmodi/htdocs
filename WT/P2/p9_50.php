<!DOCTYPE html>
<html>
<head>
<title>Table</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num = $_POST['num'];

echo "<h2> Table of $num : </br>";
echo "</br>";
for ($i = 1; $i <11; $i++) {
echo "". $num ." x ". $i ." = ". $i*$num ."</br>";
}
}
?>
</body>
</html>
