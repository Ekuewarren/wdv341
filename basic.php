<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>

<?php

//1. Create variable and print
$yourName = "Messan, Blabuh";

//2. dispaly assignment name in h1 element
echo "<h1>PHP Basics!</h1>";

//3. Display HTML directly
  echo "<h2>$yourName</h2>";

// 4. Define numbers and perform a calculation
   $number1 = 1;
   $number2 = 2;
   $total = $number1 + $number2; 
   
// 5. Disppay value of variables
echo "<p>Number 1: $number1</p>";
echo "<p>Number 2: $number2</p>";
echo "<p>Total: $total</p>";

//  6.Create php array

$app = array("PHP", "HTML", "JavaScript");

// convert from php to JavaScript

echo "<script type='text/javascript'>";

// built javascript array

echo "var javarray = [";

// go through php array to generate javarray array
   foreach ($app as $course) {
    echo "'$course', "; // Add each value to the JavaScript array
}

echo "];";

// Log the array in the console
echo "console.log(javarray);";

echo "</script>";

echo '<a href="http:localhost/wdv341/index.php">Go to Home Page</a>';


?>




</body>
</html>

