<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate email and password fields
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format";
    } elseif ($new_password !== $confirm_password) {
        $error_message = "Passwords do not match";
    } else {
        // Password reset logic (replace with your actual logic)
        // For demonstration purposes, let's assume we update the password in a database
        // You should hash the password before storing it in the database for security
        // Here, we'll just print a success message
        $success_message = "Password reset successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <?php if(isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
    <?php elseif(isset($success_message)): ?>
        <p><?php echo $success_message; ?></p>
    <?php endif; ?>

    <h2>Reset Password</h2>
    <form action="" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div>
            <button type="submit">Reset Password</button>
        </div>
    </form>
</body>
</html>