// LOGIN VALIDATION
function loginUser() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user === "admin" && pass === "admin123") {
        alert("Admin Login Successful");
        window.location.href = "admin.html";
    } else {
        alert("Invalid Username or Password");
    }
}

// CONTACT FORM
function sendMessage() {
    alert("Message sent successfully!");
}

// PAYMENT
function makePayment() {
    let card = document.getElementById("card").value;
    let cvv = document.getElementById("cvv").value;

    if (card.length < 12 || cvv.length !== 3) {
        alert("Invalid card details");
    } else {
        alert("Payment Successful (Dummy)");
    }
}
