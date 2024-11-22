<?php
$allowed_origin = 'https://aiclub@ku.edu.np'; 
$allowed_referer = 'https://aiclub@ku.edu.np';

if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] !== $allowed_origin) {
    die("Unauthorized access - invalid origin.");
}

if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], $allowed_referer) !== 0) {
    die("Unauthorized access - invalid referer.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email from the POST request
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    // Check if the email is already subscribed
    $subscribers = file('subscribers.txt', FILE_IGNORE_NEW_LINES);
    if (in_array($email, $subscribers)) {
        echo json_encode(['status' => 'error', 'message' => 'This email is already subscribed.']);
        exit;
    }

    // Save the email to the file
    file_put_contents('subscribers.txt', $email . PHP_EOL, FILE_APPEND);

    // Respond with success message
    echo json_encode(['status' => 'success', 'message' => 'Thank you for subscribing!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
