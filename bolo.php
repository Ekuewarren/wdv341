<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>

<?php

// 1. Create variable and print
$yourName = "Messan, Blabuh";

// 2. Display assignment name in h1 element
echo "<h1>PHP Basics!</h1>";

// 3. Display HTML directly
echo "<h2>$yourName</h2>";

// 4. Define numbers and perform a calculation
$number1 = 1;
$number2 = 2;
$total = $number1 + $number2;

// 5. Display value of variables
echo "<p>Number 1: $number1</p>";
echo "<p>Number 2: $number2</p>";
echo "<p>Total: $total</p>";

// Step 1: Create a PHP array
$programmingLanguages = array('PHP', 'HTML', 'JavaScript');

// Step 2: Iterate over the PHP array to generate a JavaScript array
echo "<script>";
echo "var languages = [";

// Loop through the PHP array and output JavaScript array values
foreach ($programmingLanguages as $index => $language) {
    echo "'$language'";
    if ($index < count($programmingLanguages) - 1) {
        echo ", ";  // Add a comma if it's not the last element
    }
}

echo "];";

// Step 3: Write a JavaScript function to display the values of the array
echo "
window.onload = function() {
    var output = 'Languages: <br>';
    for (var i = 0; i < languages.length; i++) {
        output += languages[i] + '<br>';
    }
    // Create an element to display the output
    var div = document.createElement('div');
    div.innerHTML = output;
    document.body.appendChild(div);  // Append the content to the body
};
</script>";

// 6. Link to another page
echo '<a href="http://ablode.org/wdv341/index.php">Go to Home Page</a>';

?>

</body>
</html>
