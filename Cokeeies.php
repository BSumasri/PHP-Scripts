<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and set cookies for preferences
    if (isset($_POST["color"])) {
        $color = $_POST["color"];
        setcookie("user_color", $color, time() + (86400 * 30), "/"); // Set cookie for 30 days
    }
    if (isset($_POST["font_size"])) {
        $font_size = $_POST["font_size"];
        setcookie("user_font_size", $font_size, time() + (86400 * 30), "/"); // Set cookie for 30 days
    }
}

// Restore preferences from cookies
$user_color = isset($_COOKIE["user_color"]) ? $_COOKIE["user_color"] : "black";
$user_font_size = isset($_COOKIE["user_font_size"]) ? $_COOKIE["user_font_size"] : "16px";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
    <style>
        body {
            color: <?php echo $user_color; ?>;
            font-size: <?php echo $user_font_size; ?>;
        }
    </style>
</head>
<body>
    <h1>User Preferences</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="black" <?php if ($user_color == "black") echo "selected"; ?>>Black</option>
            <option value="blue" <?php if ($user_color == "blue") echo "selected"; ?>>Blue</option>
            <option value="green" <?php if ($user_color == "green") echo "selected"; ?>>Green</option>
            <option value="red" <?php if ($user_color == "red") echo "selected"; ?>>Red</option>
        </select>
        <br><br>
        <label for="font_size">Choose a font size:</label>
        <select name="font_size" id="font_size">
            <option value="12px" <?php if ($user_font_size == "12px") echo "selected"; ?>>Small</option>
            <option value="16px" <?php if ($user_font_size == "16px") echo "selected"; ?>>Medium</option>
            <option value="20px" <?php if ($user_font_size == "20px") echo "selected"; ?>>Large</option>
        </select>
        <br><br>
        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>