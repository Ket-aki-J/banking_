// script.js
document.getElementById('loginForm')?.addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Login successful!');
    window.location.href = 'main.html'; // Redirect to main page
});

document.getElementById('signupForm')?.addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Sign up successful!');
    window.location.href = 'login.html'; // Redirect to login page
});

function checkBalance() {
    alert('Your balance is $1000');
}

function transferFunds() {
    alert('Funds transferred successfully!');
}

function viewTransactions() {
    alert('Showing transaction history...');
}

function viewPassbook() {
    alert('Displaying virtual passbook...');
}

function aiAssistant() {
    alert('AI Assistant is here to help you!');
}

function openFD() {
    alert('Fixed Deposit opened successfully!');
}

function viewAnnouncements() {
    alert('Showing announcements...');
}

function rechargeBills() {
    alert('Recharge/Bills processed successfully!');
}

function viewProfile() {
    alert('Displaying profile information...');
}

function logout() {
    alert('You have logged out successfully!');
    window.location.href = 'index.html'; // Redirect to home page
}
