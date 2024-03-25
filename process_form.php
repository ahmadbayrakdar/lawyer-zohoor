<?php

// Define default language
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// Load language file based on body class
$lang_file = ($lang == 'ar') ? './json/ar.json' : './json/en.json';
$json_data = file_get_contents($lang_file);

// Check if JSON data is loaded successfully
if ($json_data === false) {
    die('Failed to load language file');
}

$texts = json_decode($json_data, true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email information
    $to = "Lawyer.raydat@gmail.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to a success page
        header("Location: message-form/success.php?lang=$lang");
        exit(); // Ensure no further code execution after redirection
    } else {
        // Redirect to an error page
        header("Location: message-form/error.php?lang=$lang");
        exit(); // Ensure no further code execution after redirection
    }
}
