<?php
// Retrieve the email address from the form submission
$email = $_POST['email'] ?? '';

// Example: Send a reset link to the provided email address
if (!empty($email)) {
    // Here, you would typically generate a unique token, store it in the database along with the user's email, and include it in the reset link.
    // Then, send an email to the user with the reset link.
    $resetLink = "https://example.com/reset_password.php?token=your_generated_token";

    // Placeholder for sending email
    $to = $email;
    $subject = "Password Reset Link";
    $message = "Click the following link to reset your password: $resetLink";
    $headers = "From: your_email@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect back to the forgot password page with a success message
        header("Location: forgot_password.html?success=Reset link sent to your email");
        exit();
    } else {
        // Redirect back to the forgot password page with an error message if email sending fails
        header("Location: forgot_password.html?error=Failed to send reset link");
        exit();
    }
} else {
    // Redirect back to the forgot password page if email is not provided
    header("Location: forgot_password.html");
    exit();
}
?>
