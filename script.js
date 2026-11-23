
$(document).ready(function() {

    $("#registrationForm").submit(function(event) {

        let name = $("#fullname").val().trim();
        let email = $("#email").val().trim();
        let phone = $("#phone").val().trim();

        if (name.length < 3) {
            alert("Please enter a valid name");
            event.preventDefault();
            return;
        }

        if (!email.includes("@") || !email.includes(".")) {
            alert("Please enter a valid email");
            event.preventDefault();
            return;
        }

        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Enter a valid 10 digit phone number");
            event.preventDefault();
            return;
        }

        alert("Registration submitted successfully!");

    });

});
