<!DOCTYPE html>
<html>
<head>
    <title>Text Encryption/Decryption</title>
</head>
<body>
    <h2>Text Encryption/Decryption</h2>
    <form method="post" action="">
        <label for="text">Enter Text:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"></textarea><br><br>
        <label for="key">Enter Numeric Key:</label><br>
        <input type="text" id="key" name="key"><br><br>
        <input type="submit" name="encrypt" value="Encrypt">
        <input type="submit" name="decrypt" value="Decrypt">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $key = $_POST["key"];

        if (isset($_POST["encrypt"])) {
            $encrypted_text = encryptText($text, $key);
            echo "<h3>Encrypted Text:</h3><p>$encrypted_text</p>";
        }

        if (isset($_POST["decrypt"])) {
            $decrypted_text = decryptText($text, $key);
            echo "<h3>Decrypted Text:</h3><p>$decrypted_text</p>";
        }
    }

    function encryptText($text, $key) {
        $encrypted_text = "";
        $key_length = strlen($key);

        for ($i = 0; $i < strlen($text); $i++) {
            $encrypted_text .= chr(ord($text[$i]) + ord($key[$i % $key_length]));
        }

        return base64_encode($encrypted_text);
    }

    function decryptText($encrypted_text, $key) {
        $encrypted_text = base64_decode($encrypted_text);
        $decrypted_text = "";
        $key_length = strlen($key);

        for ($i = 0; $i < strlen($encrypted_text); $i++) {
            $decrypted_text .= chr(ord($encrypted_text[$i]) - ord($key[$i % $key_length]));
        }

        return $decrypted_text;
    }
    ?>
</body>
</html>