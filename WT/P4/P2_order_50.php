<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Krish Store</title>
</head>
<body>
 <h2>Krish Store</h2>
 <form action="p2_Summary_50.php" method="POST">
 <label for="name">Buyer's Name:</label>
 <input type="text" name="name" id="name"><br><br>
 <label for="mobileNo">Mobile no:</label>
 <input type="text" name="mobileNo" id="no"><br><br>
 <table>
 <tr>
 <th>Product's Name</th>
 <th>Price</th>
 <th>Quantity</th>
 </tr>
 <tr>
 <td>Ladoo</td>
 <td>350 Rs./Kg</td>
 <td><input type="number" name="tn" id="tn"></td>
 </tr>
 <tr>
 <td>Kaju Katli</td>
 <td>750 Rs./Kg</td>
 <td><input type="number" name="cc" id="cc"></td>
 </tr>
 <tr>
 <td>Rasgulla</td>
 <td>450 Rs./Kg</td>
 <td><input type="number" name="cnc" id="cnc"></td>
 </tr>
 <tr>
 <td>Keshar Paida</td>
 <td>400 Rs./Kg</td>

 <td><input type="number" name="c9" id="c9"></td>
 </tr>
 </table>
 <br>
 <h2>Payment Method</h2>
 <input type="radio" name="paymentMethod" id="cash" value="cash">
 <label for="cash">Cash</label><br>
 <input type="radio" name="paymentMethod" id="visa" value="visa">
 <label for="visa">Visa</label><br>
 <input type="radio" name="paymentMethod" id="master" value="master">
 <label for="master">Master</label><br><br>
 <input type="submit" value="Submit">
 <input type="reset" value="Cancel">
 </form>
</body>
</html>