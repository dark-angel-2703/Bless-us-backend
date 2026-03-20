<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP - Bless Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-secondary-color">
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
                        <a class="nav-link" href="Eventdetail.php">Event Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Response.php">Response</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="position-relative"
        style="margin-top: 76px; height: 40vh; overflow: hidden; display: flex; align-items: center; justify-content: center;">
        <div
            style="position: absolute; top:0; left:0; width:100%; height:100%; z-index:-1; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/10.jpeg') center/cover; padding: 0;">
        </div>
        <div class="container text-center text-white" style="position: relative; z-index: 1;">
            <h1 class="display-3 mb-3 font-heading"
                style="font-family: var(--font-heading); text-shadow: 2px 2px 10px rgba(0,0,0,0.3);">Response</h1>
            <p class="lead fw-light letter-spacing text-uppercase tracking-wide" style="letter-spacing: 3px;">We hope
                you can join us</p>
        </div>
    </div>

    <!-- RSVP Section -->
    <section class="section-padding" style="margin-top: -80px; position: relative; z-index: 2;">
        <div class="container">
            <div class="rsvp-form-container">
                <div class="text-center mb-5">
                    <h2 class="font-heading text-dark" style="font-family: var(--font-heading); font-size: 2.5rem;">Will
                        you attend?</h2>
                    <p class="text-muted mt-3">Please let us know by May 1, 2026</p>
                    <div class="mx-auto mt-4" style="width: 50px; height: 3px; background-color: var(--primary-color);">
                    </div>
                </div>

                <form id="rsvpForm">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label fw-bold">First Name *</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="John">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label fw-bold">Last Name *</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Doe">
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label fw-bold">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="john.doe@example.com">
                        </div>

                        <div class="col-12 mt-4">
                            <label class="form-label fw-bold d-block mb-3">Can you attend? *</label>
                            <div class="d-flex gap-4 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input p-2" type="radio" name="attendance" id="attendYes"
                                        value="yes" required>
                                    <label class="form-check-label fs-5 ms-2 pt-1" for="attendYes">
                                        Joyfully Accept!
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input p-2" type="radio" name="attendance" id="attendNo"
                                        value="no" required>
                                    <label class="form-check-label fs-5 ms-2 pt-1" for="attendNo">
                                        Regretfully Decline
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-4">
                            <label for="guests" class="form-label fw-bold">Number of Guests *</label>
                            <select class="form-select" id="guests" name="guests" required>
                                <option value="" selected disabled>Select number...</option>
                                <option value="1">1 (Just me)</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>
                        </div>

                        <div class="col-md-6 mt-4">
                            <label for="meal" class="form-label fw-bold">Meal Preference</label>
                            <select class="form-select" id="meal" name="meal">
                                <option value="" selected disabled>Select meal...</option>
                                <option value="Chicken">Non-Vegetarian</option>
                                <option value="vegetarian">Vegetarian</option>
                            </select>
                        </div>

                        <div class="col-12 mt-4">
                            <label for="message" class="form-label fw-bold">Message for the Couple (Optional)</label>
                            <textarea class="form-control" id="message" name="message" rows="2"
                                placeholder="Any dietary restrictions, song requests, or special notes..."></textarea>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <button type="submit" class="btn btn-gold btn-lg px-5 shadow w-100 py-3" id="submitBtn">Send
                                Response <i class="fa-regular fa-paper-plane ms-2"></i></button>
                        </div>
                    </div>

                    <!-- Response Message Placeholder -->
                    <div id="responseMessage"></div>
                </form>
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
    <script src="js/script.js"></script>
</body>

</html>