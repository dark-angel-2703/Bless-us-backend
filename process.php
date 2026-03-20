<?php
// process.php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'includes/db.php';
    require_once 'includes/functions.php';

    $firstName = sanitize_input($_POST['firstName'] ?? '', $conn);
    $lastName = sanitize_input($_POST['lastName'] ?? '', $conn);
    $email = sanitize_input($_POST['email'] ?? '', $conn);
    $attendance = sanitize_input($_POST['attendance'] ?? '', $conn);
    $guests = sanitize_input($_POST['guests'] ?? '0', $conn);
    $meal = sanitize_input($_POST['meal'] ?? '', $conn);
    $message = sanitize_input($_POST['message'] ?? '', $conn);

    // Create table if it doesn't exist
    $tableSql = "CREATE TABLE IF NOT EXISTS rsvps (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(100),
        attendance VARCHAR(20),
        guests VARCHAR(10),
        meal VARCHAR(50),
        message TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($tableSql);

    $stmt = $conn->prepare("INSERT INTO rsvps (first_name, last_name, email, attendance, guests, meal, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $firstName, $lastName, $email, $attendance, $guests, $meal, $message);

    if ($stmt->execute()) {
        echo json_encode([
            "status" => "success",
            "message" => "Thank you for your response! We look forward to seeing you."
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Error saving data: " . $stmt->error
        ]);
    }
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
