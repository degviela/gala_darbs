<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entries List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Submit Entry</h2>

    <!-- Update the form's action attribute -->
    <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>

    <hr>

    <h2>Entries List</h2>

    <div class="controls">
        <label for="search">Search:</label>
        <input type="text" id="search" oninput="filterEntries()" placeholder="Enter name or email">

        <label for="sort">Sort by:</label>
        <select id="sort" onchange="sortEntries()">
            <option value="date">Date Added</option>
            <option value="name">Name</option>
            <option value="email">Email</option>
        </select>
    </div>

    <ul id="entriesList">
        <!-- Entries will be dynamically added here -->
        <?php
        // Include the Database class
        require_once 'db.php';

        // Create a new Database instance
        $db = new Database();

        // Fetch all entries from the database
        $entries = $db->selectAllEntries();

        // Display entries
        foreach ($entries as $entry) {
            echo "<li>{$entry['name']} - {$entry['email']} - {$entry['message']}</li>";
        }
        ?>
    </ul>

    <!-- Display result message here -->
    <div id="resultMessage"></div>
</div>

<script src="script.js"></script>
</body>
</html>
