<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"] ?? "";
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    // Example: Validate form fields (you can extend this with more validation)
    if (empty($username) || empty($email) || empty($password)) {
        // If any field is empty, redirect back to the form page with an error message
        header("Location: register.html?error=Please fill in all fields");
        exit();
    }

    // Example: Connect to your database and perform necessary operations (e.g., insert user into database)
    // Replace this with your database connection and insert logic
    // $db = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");
    // $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    // $stmt->execute([$username, $email, $password]);

    // Example: Simulate successful registration
    // Here, I'm redirecting to a success page
    header("Location: registration_success.php");
    exit();
} else {
    // If someone tries to access this script directly, redirect them back to the form page
    header("Location: register.html");
    exit();
}
?>
