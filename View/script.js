

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        const fname = document.getElementById("fname").value.trim();
        const lname = document.getElementById("lname").value.trim();
        const phone = document.getElementById("PhoneNo").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value;
        const dob = document.getElementById("dob").value;
        const gender = document.querySelector('input[name="gender"]:checked');

        
        if (fname === "" || lname === "") {
            alert("Please enter both first and last names.");
            e.preventDefault();
            return;
        }

        if (phone.length < 10 || isNaN(phone)) {
            alert("Please enter a valid phone number.");
            e.preventDefault();
            return;
        }

        if (!email.includes("@") || !email.includes(".")) {
            alert("Please enter a valid email address.");
            e.preventDefault();
            return;
        }

        if (password.length < 8) {
            alert("Password must be at least 8 characters.");
            e.preventDefault();
            return;
        }

        if (!dob) {
            alert("Please select your date of birth.");
            e.preventDefault();
            return;
        }

        if (!gender) {
            alert("Please select your gender.");
            e.preventDefault();
            return;
        }

        
        alert("Form submitted successfully!");
    });
});
