<?php
// Initialize some global variables for demonstration purposes
$_GET['name'] = "Krish";
$_POST['age'] = 19;
$_ENV['country'] = "India";
$_GLOBAL['city'] = "New York";

// Example usage of $_REQUEST
echo "Using \$_REQUEST:<br>";
$_REQUEST['email'] = "john@example.com";
echo "Email: " . $_REQUEST['email'] . "<br>";

// Example usage of $_POST
echo "<br>Using \$_POST:<br>";
echo "Age: " . $_POST['age'] . "<br>";

// Example usage of $_GET
echo "<br>Using \$_GET:<br>";
echo "Name: " . $_GET['name'] . "<br>";

// Example usage of $_ENV
echo "<br>Using \$_ENV:<br>";
echo "Country: " . $_ENV['country'] . "<br>";

// Example usage of $_GLOBAL
echo "<br>Using \$_GLOBAL:<br>";
echo "City: " . $_GLOBAL['city'] . "<br>";

// Example usage of $_SERVER
echo "<br>Using \$_SERVER:<br>";
echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Script filename: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";
?>
