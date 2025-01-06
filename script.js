// JavaScript to handle the form submission via AJAX and update button text
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission (page reload)

    var formData = new FormData(this); // Collect form data

    // Create a new XMLHttpRequest object to send the data via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'send_email.php', true); // Send the data to 'send_email.php'

    // Update the button text while the email is being sent
    var submitBtn = document.getElementById('submitBtn');
    submitBtn.innerHTML = 'Sending...'; // Change button text to 'Sending...'

    // When the request is completed
    xhr.onload = function() {
        if (xhr.status == 200) {
            // If email is sent successfully, change the button text to 'Sent'
            submitBtn.innerHTML = 'Sent';
        } else {
            // If there's an error, show an alert and reset the button text
            alert('Error sending email. Please try again.');
            submitBtn.innerHTML = 'Send';
        }
    };

    // Handle network errors
    xhr.onerror = function() {
        alert('Network error. Please try again.');
        submitBtn.innerHTML = 'Send'; // Reset button text
    };

    // Send the form data as a POST request
    xhr.send(formData);
});