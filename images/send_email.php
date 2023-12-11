<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "tushar152000@gmail.com"; // Your email address
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send the email
    $success = mail($to, $subject, $message, $headers);
    
    if ($success) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Error sending message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
