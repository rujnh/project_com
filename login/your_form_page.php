<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Form Page</title>
    <!-- Include any necessary CSS files -->
    <!-- Example: -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <h1>Your Form Page</h1>
    
    <?php
    // Check if there is an error message in the URL (e.g., from previous form submission)
    if (isset($_GET['error'])) {
        echo '<p style="color: red;">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>
    
    <!-- Example: Display a login form -->
    <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    
    <!-- Include any necessary JavaScript files -->
    <!-- Example: -->
    <!-- <script src="scripts.js"></script> -->
</body>
</html>
