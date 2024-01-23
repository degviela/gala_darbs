<?php

require_once 'db.php'; // Update the path if needed

class FormProcessor {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function processForm() {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve form data
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Store the entry in the database
            if ($this->db->storeEntry($name, $email, $message)) {
                return "Data successfully stored in the database.";
            } else {
                return "Error storing data.";
            }
        } else {
            // If the form is not submitted, redirect to the form page
            header("Location: index.html");
            exit();
        }
    }
}
