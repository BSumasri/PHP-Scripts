<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/Users/sumas/Downloads/PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'C:/Users/sumas/Downloads/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'C:/Users/sumas/Downloads/PHPMailer-master/PHPMailer-master/src/SMTP.php';

// Initialize variables for form inputs and errors
$nameErr = $emailErr = $mobileErr = $genderErr = $websiteErr = $agreeErr = "";
$name = $email = $mobileno = $gender = $website = $agree = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $mobileno = test_input($_POST["mobileno"]);
    $website = test_input($_POST["website"]);
    $gender = test_input($_POST["gender"]);
    if (isset($_POST['agree'])) {
        $agree = test_input($_POST["agree"]);
    }

    // Validate name
    if (empty($name)) {
        $nameErr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
    }

    // Validate email
    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // Validate mobile number
    if (empty($mobileno)) {
        $mobileErr = "Mobile number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobileno)) {
        $mobileErr = "Invalid mobile number format";
    }

    // Validate website (optional)
    if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
        $websiteErr = "Invalid website URL";
    }

    // Validate gender
    if (empty($gender)) {
        $genderErr = "Gender is required";
    }

    // Validate agreement
    if (empty($agree)) {
        $agreeErr = "Please agree to the terms and conditions";
    }

    // If there are no errors, send email
    if (empty($nameErr) && empty($emailErr) && empty($mobileErr) && empty($genderErr) && empty($agreeErr)) {
        $mail = new PHPMailer(true);
        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bharatvikas04062004@gmail.com';
            $mail->Password = 'vbhi uebj hyte ccnp';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Sender and recipient details
            $mail->setFrom('bharatvikas04062004@gmail.com', 'Your Name');
            $mail->addAddress('sumasribasava@gmail.com', 'Recipient Name');

            // Email content
            $mail->isHTML(false);
            $mail->Subject = 'New Registration';
            $mail->Body = "Name: $name \n"
                            . "Email: $email \n"
                            . "Mobile Number: $mobileno \n"
                            . "Website: $website \n"
                            . "Gender: $gender \n";

            // Send email
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
        // Redirect after sending email
        // header("Location: thank-you.php");
        // exit();
    }
}

// Function to sanitize form inputs
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br/><br/>
        Email: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br/><br/>
        Mobile Number: <input type="text" name="mobileno">
        <span class="error">* <?php echo $mobileErr;?></span>
        <br/><br/>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br/><br/>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br/><br/>
        Agree to Terms and Conditions:
        <input type="checkbox" name="agree">
        <span class="error">* <?php echo $agreeErr;?></span>
        <br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>