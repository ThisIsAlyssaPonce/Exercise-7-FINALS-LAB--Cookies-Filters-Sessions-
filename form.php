<?php
// Include header.php for the common HTML head and navbar
$headingText = "Meet our Group :)"; 
include 'header.php';
?>

<div class="forms-section">
    <h2>Submit Your Information</h2>
    <form action="index.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</div>
