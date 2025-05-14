<?php
header('Content-Type: application/json');

// Include database configuration
require_once 'config/db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Validate input
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
        exit;
    }
    
    // Insert into database
    $sql = "INSERT INTO messages (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
        }
        
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error preparing statement']);
    }
    
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
