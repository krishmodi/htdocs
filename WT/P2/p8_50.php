<!DOCTYPE html>
<html>
<head>
<title>Generated Table</title>
<style>
table, th, td {
border: 1px solid black;
border-collapse: collapse;
padding: 5px;
}
</style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$rows = $_POST['rows'];
$cols = $_POST['cols'];

echo "<h2>Generated Table with $rows rows and $cols columns:</h2>";
echo "<table>";
for ($i = 1; $i <= $rows; $i++) {
echo "<tr>";
for ($j = 1; $j <= $cols; $j++) {
echo "<td>Row $i, Col $j</td>";
}
echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html>
