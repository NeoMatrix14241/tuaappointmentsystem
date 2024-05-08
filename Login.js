function validateLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username.trim() === '' || password.trim() === '') {
        document.getElementById('notification').innerHTML = 'Invalid login! Please try again.';
        return;
    }

    // Simulate user data (replace with your actual authentication logic)
    var users = {
        'admin': 'admin123',
        'student': 'student123'
    };

    if (users.hasOwnProperty(username) && users[username] === password) {
        
        // You can redirect the user to the appropriate page here
        if (username === 'admin') {
            window.location.href = 'HN-Appointment.html';
        } else if (username === 'student') {
            window.location.href = 'PT-AppointMedical.html';
        }
    } else {
        document.getElementById('notification').innerHTML = 'Login failed! Please check your username or password.';
    }
}