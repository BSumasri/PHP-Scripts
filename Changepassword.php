<?php
session_start();

// Dummy current password for demonstration
$valid_current_password = "password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if current password is valid
    if ($current_password !== $valid_current_password) {
        $error_message = "Current password is incorrect";
    } elseif ($new_password !== $confirm_password) {
        $error_message = "New passwords do not match";
    } else {
        // Password change logic (replace with your actual logic)
        // For demonstration purposes, let's assume we update the password in a database
        // You should hash the new password before storing it in the database for security
        // Here, we'll just print a success message
        $success_message = "Password changed successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
</head>
<body>
    <?php if(isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
    <?php elseif(isset($success_message)): ?>
        <p><?php echo $success_message; ?></p>
    <?php endif; ?>

    <h2>Change Password</h2>
    <form action="" method="post">
        <div>
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required>
        </div>
        <div>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>
        <div>
            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div>
            <button type="submit">Change Password</button>
        </div>
    </form>
</body>
</html>