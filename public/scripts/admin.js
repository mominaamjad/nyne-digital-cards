document.addEventListener('DOMContentLoaded', function () {
    
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const userEmail = this.getAttribute('data-email');
            const isConfirmed = window.confirm(`Delete user ${userEmail}?`);
    
            if (isConfirmed) {
                window.location.href = `/delete/${userEmail}`;
            }
        });
    }); 

   

 //login validation
 let submitLogin=document.getElementById("login-btn");
 if(submitLogin){
     submitLogin.addEventListener('click', submitLoginForm);
 }

 function validateLoginForm() {
     var userInput = document.getElementById('admin_user').value;
     var passwordInput = document.getElementById('admin_pass').value;
         
     var userRegex = /^admin@nyne$/; 
     var passwordRegex = /^.{6,}$/; 
     // /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/
 
     if (!userRegex.test(userInput)) {
         document.getElementById("user-validation").innerHTML="Invalid Username";
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
     document.getElementById("user-validation").innerHTML="";
     document.getElementById("pass-validation").innerHTML="";
     if (validateLoginForm()) {
         document.getElementById('login-form').submit();
     }
 }

 let submitSignup=document.getElementById("new-card");
 if(submitSignup){
     submitSignup.addEventListener('click', submitSignupForm);
 }

 function validateSignupForm() {
     var fname = document.getElementById('fname').value.trim();
     var lname = document.getElementById('lname').value.trim();
     var email = document.getElementById('email').value.trim();
     var phone = document.getElementById('phone').value.trim();
     var location = document.getElementById('location').value.trim();
     var cname = document.getElementById('cname').value.trim();
     var jobRole = document.getElementById('job-role').value.trim();

     // Regular expressions for validation
     var phoneRegex = /^\d{11,15}$/;


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
         document.getElementById("ph-validation").innerHTML="";
         document.getElementById("lc-validation").innerHTML="";
         document.getElementById("cname-validation").innerHTML="";
        
         if (validateSignupForm()) {
             document.getElementById('signup-form').submit();
         } 
 }
 

});

function searchResult() {
    var term = document.getElementById("admin-search").value;
    const resultTable = document.getElementById('clients');
    resultTable.innerHTML="";
    const search_by = document.getElementById("select-search").value;
    var endpoint = "/search/"+search_by+"/"+ term;
    console.log(endpoint);

// FETCH API
fetch(endpoint)
    .then(response => {
            if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
        return response.json();
    })
    .then(data => {
                    data.forEach(user => {
                        const row = document.createElement('tbody');
        
                        // Add email, fname, lname, phone, location, comp_name, and job_title as needed
                        row.innerHTML = `<tr class="user-data">
                            <td>${user.email}</td>
                            <td>${user.fname} ${user.lname}</td>
                            <td>${user.phone}</td>
                            <td>${user.location}</td>
                            <td>${user.comp_name}</td>
                            <td>${user.job_title}</td>
                            
                            <td class="data-options">
                                <a href="all_cards_admin/${user.email}" target="_blank">
                                    <i class='bx bx-link-external' style="font-size: 21px ;color:#7E57C2" ></i>
                                </a>
                                
                                <a href="update/${user.email}" target="_blank" >
                                    <i class='bx bxs-edit' style="font-size: 21px ;color:#7E57C2" ></i>
                                </a>
                                
                                <button class="delete-btn" data-email="${user.email}" style="background-color: transparent;">                
                                    <i class='bx bxs-trash' style="color:#F54637; font-size: 21px" ></i>
                                </button>
                            </td></tr>`;
                
                        resultTable.appendChild(row);
                    });
                })
    .catch(error => {
        console.error('Error: ', error);
    });
}
