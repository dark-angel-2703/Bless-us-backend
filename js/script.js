// Countdown Timer logic
document.addEventListener("DOMContentLoaded", () => {
    // Set the date we're counting down to (e.g., Next month, 15th)
    const currentYear = new Date().getFullYear();
    const eventDate = new Date(`May 21, 2026 11:51:00`).getTime();

    const updateCountdown = () => {
        const now = new Date().getTime();
        const distance = eventDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minsEl = document.getElementById("mins");
        const secsEl = document.getElementById("secs");

        if (daysEl) daysEl.innerText = days < 10 ? '0' + days : days;
        if (hoursEl) hoursEl.innerText = hours < 10 ? '0' + hours : hours;
        if (minsEl) minsEl.innerText = minutes < 10 ? '0' + minutes : minutes;
        if (secsEl) secsEl.innerText = seconds < 10 ? '0' + seconds : seconds;

        if (distance < 0) {
            clearInterval(timerInterval);
            const countdownEl = document.querySelector(".countdown");
            if (countdownEl) {
                countdownEl.innerHTML = "<h3 class='text-white'>The Celebration Has Begun!</h3>";
            }
        }
    };

    updateCountdown(); // Call once to avoid delay
    const timerInterval = setInterval(updateCountdown, 1000);

    // RSVP Conditional Logic
    const attendYes = document.getElementById('attendYes');
    const attendNo = document.getElementById('attendNo');
    const guestsField = document.getElementById('guests');
    const mealField = document.getElementById('meal');

    const toggleRSVPFields = () => {
        if (attendNo && attendNo.checked) {
            if (guestsField) {
                guestsField.disabled = true;
                guestsField.required = false;
                guestsField.value = "";
            }
            if (mealField) {
                mealField.disabled = true;
                mealField.value = "";
            }
        } else {
            if (guestsField) {
                guestsField.disabled = false;
                guestsField.required = true;
            }
            if (mealField) {
                mealField.disabled = false;
            }
        }
    };

    if (attendYes) attendYes.addEventListener('change', toggleRSVPFields);
    if (attendNo) attendNo.addEventListener('change', toggleRSVPFields);

    // Initial check in case of browser autocomplete
    toggleRSVPFields();

    // Form submission mock
    const rsvpForm = document.getElementById('rsvpForm');
    if (rsvpForm) {
        rsvpForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const originalText = btn.innerHTML;

            btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
            btn.disabled = true;

            // Send data to PHP backend
            const formData = new FormData(rsvpForm);
            
            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                const responseMessage = document.getElementById('responseMessage');
                if (data.status === 'success') {
                    responseMessage.innerHTML = '<div class="alert alert-success mt-3 rounded-3 shadow-sm text-center fw-bold"><i class="fa-solid fa-check-circle me-2"></i>' + data.message + '</div>';
                    rsvpForm.reset();
                } else {
                    responseMessage.innerHTML = '<div class="alert alert-danger mt-3 rounded-3 shadow-sm text-center fw-bold"><i class="fa-solid fa-circle-xmark me-2"></i>' + data.message + '</div>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const responseMessage = document.getElementById('responseMessage');
                responseMessage.innerHTML = '<div class="alert alert-danger mt-3 rounded-3 shadow-sm text-center fw-bold"><i class="fa-solid fa-circle-xmark me-2"></i>An error occurred. Please try again.</div>';
            })
            .finally(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
            });
        });
    }

    // Scroll to add nav shadow
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            nav.style.boxShadow = '0 5px 20px rgba(0,0,0,0.1)';
            nav.style.padding = '10px 0';
        } else {
            nav.style.boxShadow = '0 2px 15px rgba(0,0,0,0.08)';
            nav.style.padding = '15px 0';
        }
    });
});
