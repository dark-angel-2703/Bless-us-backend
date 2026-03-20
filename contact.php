<?php
$status = '';
$statusMsg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'includes/db.php';
    require_once 'includes/functions.php';

    $name = sanitize_input($_POST['name'] ?? '', $conn);
    $email = sanitize_input($_POST['email'] ?? '', $conn);
    $message = sanitize_input($_POST['message'] ?? '', $conn);

    $tableSql = "CREATE TABLE IF NOT EXISTS messages (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($tableSql);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute()) {
            $status = 'success';
            $statusMsg = 'Your message has been sent successfully!';
        } else {
            $status = 'error';
            $statusMsg = 'Failed to submit message. Try again later.';
        }
        $stmt->close();
    } else {
        $status = 'error';
        $statusMsg = 'Please fill out all fields.';
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Bless Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-secondary-color">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="images/logo.png" alt="Bless Us Logo" height="50" class="me-2">
                Bless Us
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Eventdetail.php">Event Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="Response.php">Response</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="position-relative" style="margin-top: 76px; height: 30vh; display: flex; align-items: center; justify-content: center; background: var(--primary-color);">
        <div class="container text-center text-white">
            <h1 class="display-3 font-heading" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.3);">Contact Us</h1>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="rsvp-form-container">
                <div class="text-center mb-4">
                    <h2 class="font-heading text-dark text-gold">Get in Touch</h2>
                </div>

                <?php if($status == 'success'): ?>
                    <div class="alert alert-success text-center fw-bold"><i class="fa-solid fa-check-circle me-2"></i><?= $statusMsg ?></div>
                <?php elseif($status == 'error'): ?>
                    <div class="alert alert-danger text-center fw-bold"><i class="fa-solid fa-circle-xmark me-2"></i><?= $statusMsg ?></div>
                <?php endif; ?>

                <form method="POST" action="contact.php">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Name *</label>
                            <input type="text" class="form-control" name="name" required placeholder="John Doe">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Email Address *</label>
                            <input type="email" class="form-control" name="email" required placeholder="john@example.com">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Your Message *</label>
                            <textarea class="form-control" name="message" rows="5" required placeholder="Type your message here..."></textarea>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <button type="submit" class="btn btn-gold btn-lg shadow px-5 py-3">Send Message <i class="fa-regular fa-paper-plane ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center text-white py-4">
            <p>&copy; 2026 Bless Us Wedding.</p>
        </div>
    </footer>
</body>
</html>
