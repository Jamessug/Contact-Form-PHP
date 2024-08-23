<?php

// Initialise variables
$name = $email = $message = "";

// Check if the form was submitted via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitise and assign form input data to variables
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
}

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Message: " . $message . "<br>";

// Function to sanitise input data
function test_input($data) {
    $data = trim($data); // Remove unnecessary whitespace from the beginning and end of the string
    $data = stripslashes($data); // Remove backslashes (\) from the string
    $data = htmlspecialchars($data); // Convert special characters to HTML entities to prevent XSS attacks
    return $data; // Return the sanitiSed data
}



