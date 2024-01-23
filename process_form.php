<?php
require_once 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create a new Database instance
    $db = new Database();

    // Store the entry in the database
    if ($db->insertEntry($name, $email, $message)) {
        echo "Data successfully stored in the database.";
    } else {
        echo "Error storing data.";
    }

    // Close the database connection
    $db->close();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.php");
    exit();
}
