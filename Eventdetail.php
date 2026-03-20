<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details - Bless Us</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Eventdetail.php">Event Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Response.php">Response</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="position-relative"
        style="margin-top: 6px; height: 80vh; overflow: hidden; display: flex; align-items: center; justify-content: center;">
        <div
            style="position: absolute; top:0; left:0; width:100%; height:100%; z-index:-1; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('images/3.jpeg') center/cover; padding: 0;">
        </div>
        <div class="container text-center text-white p-5 rounded-4" style="backdrop-filter: blur(2px);">
            <h1 class="display-3 mb-3 font-heading"
                style="font-family: var(--font-heading); text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">Event Details</h1>
            <p class="lead fw-light letter-spacing text-uppercase tracking-wide" style="letter-spacing: 3px;">When,
                Where & What to Expect</p>
        </div>
    </div>

    <!-- Details Section -->
    <section class="section-padding bg-secondary-color">
        <div class="container">
            <div class="row g-5">
                <!-- Ceremony -->
                <div class="col-md-6">
                    <div class="event-card position-relative overflow-hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-5"
                            style="background: url('https://www.transparenttextures.com/patterns/dust.png'); pointer-events: none; z-index: 1;">
                        </div>
                        <div class="event-icon" style="position: relative; z-index: 2;">
                            <i class="fa-solid fa-ring"></i>
                        </div>
                        <h3 class="font-heading mb-4 text-dark"
                            style="font-family: var(--font-heading); font-size: 2.5rem; position: relative; z-index: 2;">
                            The Ceremony</h3>

                        <div class="p-3 bg-light rounded-3 mb-4 d-inline-block shadow-sm"
                            style="position: relative; z-index: 2;">
                            <p class="text-gold fw-bold mb-0 text-uppercase letter-spacing"
                                style="letter-spacing: 2px; font-size: 0.9rem;"><i
                                    class="fa-regular fa-calendar-check me-2"></i>Saturday, May 21, 2026</p>
                        </div>

                        <p class="text-muted mb-4 fs-5 display" style="position: relative; z-index: 2;"><i
                                class="fa-regular fa-clock me-2"></i>11:51 AM - 1:27 PM</p>
                        <hr class="w-25 mx-auto bg-gold mb-4" style="height: 2px; opacity: 1;">

                        <h5 class="mb-3 text-dark fw-bold" style="position: relative; z-index: 2;">J Hotel - Green
                            Banyan Garden</h5>
                        <p class="mb-4 text-muted mx-auto" style="max-width: 250px; position: relative; z-index: 2;"><i
                                class="fa-solid fa-map-location-dot me-2"></i>No.146, Pungankulam, Jaffna.</p>
                        <p class="small text-muted fst-italic bg-light p-3 rounded-3"
                            style="position: relative; z-index: 2;">Please arrive at least 15 minutes early to secure
                            your seat. The ceremony will begin exactly at 11:51 AM.</p>

                        <a href="https://www.google.com/maps/dir//J+Hotel+-+Jaffna,+Pungankulam+Rd,+Jaffna+40000/@8.3589819,80.5104919,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3afe57c8c426a6db:0x19ec9f2db2893ac1!2m2!1d80.0386609!2d9.6605672?entry=ttu&g_ep=EgoyMDI2MDMwOS4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank" class="btn btn-outline-dark mt-3 rounded-pill px-4"
                            style="position: relative; z-index: 2;">Get Directions <i
                                class="fa-solid fa-arrow-up-right-from-square ms-2"></i></a>
                    </div>
                </div>

                <!-- Reception -->
                <div class="col-md-6">
                    <div class="event-card position-relative overflow-hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-5"
                            style="background: url('https://www.transparenttextures.com/patterns/dust.png'); pointer-events: none; z-index: 1;">
                        </div>
                        <div class="event-icon" style="position: relative; z-index: 2;">
                            <i class="fa-solid fa-glass-cheers"></i>
                        </div>
                        <h3 class="font-heading mb-4 text-dark"
                            style="font-family: var(--font-heading); font-size: 2.5rem; position: relative; z-index: 2;">
                            The Reception</h3>

                        <div class="p-3 bg-light rounded-3 mb-4 d-inline-block shadow-sm"
                            style="position: relative; z-index: 2;">
                            <p class="text-gold fw-bold mb-0 text-uppercase letter-spacing"
                                style="letter-spacing: 2px; font-size: 0.9rem;"><i
                                    class="fa-regular fa-calendar-check me-2"></i>Saturday, May 21, 2026</p>
                        </div>

                        <p class="text-muted mb-4 fs-5" style="position: relative; z-index: 2;"><i
                                class="fa-regular fa-clock me-2"></i>6:30 PM - 9:30 PM</p>
                        <hr class="w-25 mx-auto bg-gold mb-4" style="height: 2px; opacity: 1;">

                        <h5 class="mb-3 text-dark fw-bold" style="position: relative; z-index: 2;">J Hotel - The Ugan
                            Banquet Hall</h5>
                        <p class="mb-4 text-muted mx-auto" style="max-width: 250px; position: relative; z-index: 2;"><i
                                class="fa-solid fa-map-location-dot me-2"></i>3rd Floor, No.146, Pungankulam, Jaffna.
                        </p>
                        <p class="small text-muted fst-italic bg-light p-3 rounded-3"
                            style="position: relative; z-index: 2;">Join us for dinner and lots of dancing to celebrate
                            our new beginning.</p>

                        <a href="https://www.google.com/maps/dir//J+Hotel+-+Jaffna,+Pungankulam+Rd,+Jaffna+40000/@8.3589819,80.5104919,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3afe57c8c426a6db:0x19ec9f2db2893ac1!2m2!1d80.0386609!2d9.6605672?entry=ttu&g_ep=EgoyMDI2MDMwOS4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank" class="btn btn-outline-dark mt-3 rounded-pill px-4"
                            style="position: relative; z-index: 2;">Get Directions <i
                                class="fa-solid fa-arrow-up-right-from-square ms-2"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Map Preview Placeholder
    <div style="height: 400px; width: 100%; background: #ddd; display: flex; align-items: center; justify-content: center;">
        <p class="text-muted mb-0"><i class="fa-solid fa-map fa-2x"></i><br>Interactive Map Feature (Optional integration)</p>
    </div>
    -->

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
    <script src="js/script.js"></script>
</body>

</html>