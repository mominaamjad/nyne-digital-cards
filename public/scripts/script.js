document.addEventListener('DOMContentLoaded', function () {

    function deleteUser(){
        if (confirm("Are you sure you want to delete?")) {
            // user clicked OK
        } else {
            // user clicked Cancel
        }
    }



    //login validation
    let submitLogin=document.getElementById("login-btn");
    if(submitLogin){
        submitLogin.addEventListener('click', submitLoginForm);
    }

    function validateLoginForm() {
        var emailInput = document.getElementById('email').value;
        var passwordInput = document.getElementById('pass').value;
            
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
        var passwordRegex = /^.{6,}$/; 
        // /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/
    
        if (!emailRegex.test(emailInput)) {
            document.getElementById("email-validation").innerHTML="Invalid Email";
            return false;
        }
    
        if (!passwordRegex.test(passwordInput)) {
            document.getElementById("pass-validation").innerHTML="Invalid password. It must be at least 6 characters";
            return false;
        }
        return true;
    }

    function submitLoginForm(event) {
        event.preventDefault();
        document.getElementById("email-validation").innerHTML="";
        document.getElementById("pass-validation").innerHTML="";
        if (validateLoginForm()) {
            document.getElementById('login-form').submit();
        }
    }
    
    //signup validations
    let submitSignup=document.getElementById("new-card");
    if(submitSignup){
        submitSignup.addEventListener('click', submitSignupForm);
    }

    function validateSignupForm() {
        var fname = document.getElementById('fname').value.trim();
        var lname = document.getElementById('lname').value.trim();
        var email = document.getElementById('email').value.trim();
        var password = document.getElementById('password').value.trim();
        var phone = document.getElementById('phone').value.trim();
        var location = document.getElementById('location').value.trim();
        var cname = document.getElementById('cname').value.trim();
        var jobRole = document.getElementById('job-role').value.trim();

        // Regular expressions for email and password validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var passwordRegex = /^.{6,}$/; 
        var phoneRegex = /^\d{11,15}$/;

        if(document.getElementById("name-validation")){
            if (fname === '' || lname === '') {
                document.getElementById("name-validation").innerHTML='Please enter both First Name and Last Name.';
                return false;
            }
        }

        if(document.getElementById("email-validation")){  // Validate Email
            if (!emailRegex.test(email)) {
                document.getElementById("email-validation").innerHTML='Please enter a valid email address.';
                return false;
            }
        }
        // Validate Password
        if (!passwordRegex.test(password)) {
            document.getElementById("pass-validation").innerHTML='Please enter a strong password (at least 6 characters with a mix of letters and numbers).';
            return false;
        }

        if (!phoneRegex.test(phone)) {
            document.getElementById("ph-validation").innerHTML='Please enter a valid phone number.';
            return false;
        }

        // Validate Location
        if (location === '') {
            document.getElementById("lc-validation").innerHTML='Please enter your location.';
            return false;
        }

        // Validate Company Name and Job Role
        if (cname === '' || jobRole === '') {
            document.getElementById("cname-validation").innerHTML='Please enter both Company Name and Job Role.';
            return false;
        }
        // If all validations pass, the form is considered valid
        return true;

    }

    function submitSignupForm(event) {
            event.preventDefault();
            if(document.getElementById("name-validation"))
                document.getElementById("name-validation").innerHTML="";
            if(document.getElementById("email-validation"))
                document.getElementById("email-validation").innerHTML="";
            document.getElementById("pass-validation").innerHTML="";
            document.getElementById("ph-validation").innerHTML="";
            document.getElementById("lc-validation").innerHTML="";
            document.getElementById("cname-validation").innerHTML="";
           
            if (validateSignupForm()) {
                document.getElementById('signup-form').submit();
            } 
    }



    }
);


