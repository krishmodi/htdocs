<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Summary</title>
<style>
    body {
        background-color: #f0f0ff;
        color: #333;
        font-family: Arial, sans-serif;
        border: 1px solid #ddd;
    }
    .container {
        padding: 20px;
    }
    .order-summary {
        border-collapse: collapse;
        width: 50%;
        margin-bottom: 20px;
    }
    .order-summary th, .order-summary td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .order-summary .label {
        font-weight: bold;
    }
    .order-summary .data {
        font-style: italic;
    }
    .order-details {
        border-collapse: collapse;
        width: 100%;
    }
    .order-details th, .order-details td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .order-details th {
        background-color: blueviolet; /* Blue header background */
        color: #fff;
    }
</style>
<link rel="stylesheet" type="text/css" href="p4_2.css">
</head>
<body>
<div class="container">
<h2>Order Summary</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? '';
    $mobileNo = $_POST["mobileNo"] ?? '';
    $paymentMethod = $_POST["paymentMethod"] ?? '';
    
    if (!preg_match('/^\d{10}$/', $mobileNo)) {
        echo "<p>Invalid mobile number format. Please enter a 10-digit number.</p>";
        exit;
    }
    
    $items = array(
        array("Ladoo", 350, $_POST["tn"] ?? 0),
        array("Kaju Katli", 750, $_POST["cc"] ?? 0),
        array("Rasgulla", 450, $_POST["cnc"] ?? 0),
        array("Keshar Paida", 400, $_POST["c9"] ?? 0)
    );
    
    echo "<table class='order-summary'>";
    echo "<tr><td class='label'>Buyer's Name:</td><td class='data'>$name</td></tr>";
    echo "<tr><td class='label'>Mobile No:</td><td class='data'>$mobileNo</td></tr>";
    echo "<tr><td class='label'>Payment Method:</td><td class='data'>$paymentMethod</td></tr>";
    echo "<tr><td colspan='2'>";
    echo "<table class='order-details'>";
    echo "<tr><th>Product Name</th><th>Price(Rs./Kg)</th><th>Quantity</th><th>Total (Rs.)</th></tr>";
    
    $totalAmount = 0;
    
    foreach ($items as $item) {
        $itemName = $item[0];
        $itemPrice = $item[1];
        $quantity = intval($item[2]); // Convert to integer
        $totalItemAmount = $itemPrice * $quantity;
        $totalAmount += $totalItemAmount;
        echo "<tr><td>$itemName</td><td>$itemPrice</td><td>$quantity Kg</td><td>$totalItemAmount</td></tr>";
    }
    
    echo "</table>";
    echo "</td></tr>";
    echo "</table>";
    
    echo "<p><strong>Total Amount: Rs. $totalAmount</strong></p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>
</div>
</body>
</html>
