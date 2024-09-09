<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = trim($_POST['your name']);
    $email = trim($_POST['emailid']);
    $mobile = trim($_POST['mobile no:']);
    $message = trim($_POST['your message']);

    // Validate form data
    if (empty($name) || empty($email) || empty($mobile) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    if (!is_numeric($mobile)) {
        echo "Invalid mobile number.";
        exit;
    }

    // Process the form data (e.g., save to database, send email, etc.)
    // For demonstration, we'll just display the data
    echo "<h2>Form Data Submitted:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Mobile: " . htmlspecialchars($mobile) . "<br>";
    echo "Message: " . nl2br(htmlspecialchars($message)) . "<br>";
} else {
    echo "Invalid request method.";
}
?>