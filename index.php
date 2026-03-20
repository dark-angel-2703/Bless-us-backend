<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bless Us - Wedding Invitation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
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
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Eventdetail.php">Event Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Response.php">Response</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-1">Danni & Kichu</h1>
                <p>We are getting married!</p>
                <div class="date">May 21, 2026 • Jaffna</div>

                <div class="countdown">
                    <div class="countdown-item">
                        <span id="days">00</span>
                        <text>Days</text>
                    </div>
                    <div class="countdown-item">
                        <span id="hours">00</span>
                        <text>Hours</text>
                    </div>
                    <div class="countdown-item">
                        <span id="mins">00</span>
                        <text>Mins</text>
                    </div>
                    <div class="countdown-item">
                        <span id="secs">00</span>
                        <text>Secs</text>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="section-padding bg-secondary-color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="position-relative">
                        <img src="images/7.jpeg" alt="The Couple" class="img-fluid rounded-4 shadow-lg"
                            style="object-fit: cover; height: 500px; width: 100%;">
                        <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-top-start-4 shadow-sm"
                            style="margin-right: -20px; margin-bottom: -20px;">
                            <h4 class="text-gold mb-0" style="font-family: var(--font-heading); font-style: italic;">
                                "Love is a journey"</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-lg-5 text-center text-lg-start">
                    <h2 class="font-heading text-gold mb-4"
                        style="font-size: 3.5rem; font-family: var(--font-heading);">Our Love Story</h2>
                    <p class="lead mb-4 fw-bold">It all started with a simple hello...</p>
                    <p class="mb-4" style="line-height: 1.8;">We met by chance, through mutual friends, and instantly
                        knew there was something special. Over the years, we've shared countless adventures, laughter,
                        and beautiful memories. Now, we are ready to take the next big step in our journey together, and
                        we would be honored to have you celebrate with us.</p>
                    <p class="mb-5" style="line-height: 1.8;">From the bustling streets of our first meeting to the
                        quiet moments we cherish today, our love has only grown stronger. We cannot wait to bring our
                        two families together for an unforgettable weekend.</p>
                    <a href="Eventdetail.php" class="btn btn-gold btn-lg shadow">View Event Details <i
                            class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Preview -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 font-heading text-dark" style="font-family: var(--font-heading);">Moments</h2>
                <div class="mx-auto mt-3" style="width: 50px; height: 3px; background-color: var(--primary-color);">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="images/9.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Moment 1"
                        style="height: 300px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-4">
                    <img src="images/6.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Moment 2"
                        style="height: 300px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-4">
                    <img src="images/4.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Moment 3"
                        style="height: 300px; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-title">Bless Us</div>
            <p>We can't wait to celebrate with you!</p>
            <div class="d-flex justify-content-center gap-4 my-4">
                <a href="#" class="text-white opacity-75 text-decoration-none fs-5"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="#" class="text-white opacity-75 text-decoration-none fs-5"><i
                        class="fa-brands fa-pinterest"></i></a>
                <a href="#" class="text-white opacity-75 text-decoration-none fs-5"><i
                        class="fa-brands fa-facebook"></i></a>
            </div>
            <p class="mb-0 text-white-50 small">&copy; 2026 Bless Us Wedding. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>