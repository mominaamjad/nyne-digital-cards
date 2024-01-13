<!DOCTYPE HTML>


<head>
    <title>Create an account | nyne </title>    
    <!-- <script src = "script.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
    <!-- <link rel = "stylesheet" href = "style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>

    <a href = "/">
        <img src = "images/logo.png" id = "logo" width = "15%" height = "20%">
    </a>

    <div class = "container-fluid" id="outer">
        <div class = "row">
            <div class= "col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 " id = "side-border">
                <img src = "images/3_neon.png" width = "70%" height="70%">
                <h4>Already have an account?</h4>
                <a href = "login_page"><i><u>Log In instead</u></i></a>
            </div>

            <div class = "col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                @if(isset($comment))
                    <h5 style="color: red;">{{ $comment }}</h5>
                @endif
                <h1><b>SIGN UP</b></h1>
                <h3>Welcome to NYNE</h3>
                <h4>Your digital card platform</h4>

                <form id = "signup-form" onsubmit = "return submitSignupForm(event);" action="/signup" method="post">
                    @csrf


                    <div id = "linear-tfs">
                        <div>
                            <label  for="lname">First name</label><br>
                            <input type = "text" placeholder="First name" id = "fname" name = "fname" class="signup-text">

                        </div>

                        <div>
                            <label  for="fname">Last name</label><br>
                            <input type = "text" placeholder="Last name" id = "lname" name = "lname" class="signup-text"><br>   
                        </div>
                    </div>
                    
                    <h5 id = "name-validation" style="color: firebrick;"></h5>

                    <label for="email">E-mail</label><br><input type = "email" placeholder="Enter your e-mail" id = "email" name = "email" class="signup-text"style ="width: 460px"><br>
                    <h5 id = "email-validation" style="color: firebrick;"></h5>

                    <label for="password">Create Password</label><br><input type = "password" placeholder="Enter a strong password" id = "password" name = "password" class="signup-text" required style ="width: 460px"><br>
                    <h5 id = "pass-validation" style="color: firebrick;"></h5>



                    <div id = "linear-tfs">
                        <div>
                            <label for="phone">Phone#</label>
                            <input  type = "tel" placeholder="Phone#" id = "phone" name = "phone" class="signup-text" >
                        </div>

                        <div>
                            <label for="location">Location</label><br>
                            <input type = "text" placeholder="Enter your Location "  id = "location" name = "location" class="signup-text" required><br> 
                        </div>
                    </div>

                   
                    <h5 id = "ph-validation" style="color: firebrick;"></h5>
                    <h5 id = "lc-validation" style="color: firebrick;"></h5>
                    
                    <h3>Company Details</h3>
            
                    <div id = "linear-tfs">
                        <div>
                            <label for="cname">Company name</label>
                            <input type = "text" placeholder="Company name" id = "cname" name = "cname" class="signup-text" required>
                        </div>

                        <div>
                            <label for="job-role">Role</label><br>
                            <input type = "text" placeholder="Your job role" id = "job-role" name = "job-role"class="signup-text" required> 
                        </div>
                    </div>


                    <h5 id = "cname-validation" style="color: firebrick;"></h5>

                    <button id = "new-card" class = "btn" type = "submit">Create account</button>
                </form>

            </div>
            
 
        </div>
        
    </div>
    <script src="{{ asset('scripts/script.js') }}"></script>
</body>
</html>