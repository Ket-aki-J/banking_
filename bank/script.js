document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();
    localStorage.setItem("accounts", JSON.stringify(accounts));

    let accountNumber = document.getElementById('accountNumber').value;
    let password = document.getElementById('password').value;

    let formData = new FormData();
    formData.append('account_number', accountNumber);
    formData.append('password', password);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('message').innerText = data;
        if (data.includes("Successful")) {
            window.location.href = 'dashboard.php';
        }
    });
});
