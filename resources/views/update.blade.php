<!DOCTYPE HTML>


<head>
    <title>Update Profile | nyne</title>    
    <!-- <script src = "script.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <!-- <link rel = "stylesheet" href = "style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
@if(session()->has('user'))
<body>

    <a href = "/">
        <img src = "{{ asset('images/logo.png') }}" id = "logo" width = "15%" height = "20%">
    </a>

    <!-- <div id = "back-icon">
        <a href = "admin_dashboard">
            <i class='bx bx-arrow-back' style = "font-size: 40px ;color:#7E57C2"></i>
        </a>
    </div> -->


    <div id = "outer-update-div">
        
        <div id = "inner-update-div">
            <h2><b>Update Profile</b></h2>
            <!-- <h3>Welcome to NYNE</h3>
            <h4>Your digital card platform</h4> -->
        
            <form id = "signup-form" onsubmit = "return submitSignupForm(event);" action="/updateUser/{{ $email }}" method="post">
            @csrf

                <h3>User's Personal Information</h3>
        
                <div id = "linear-tfs">
                        <div>
                            <label  for="fname">First name</label><br>
                            <input type = "text" value="{{ $fname }}" id = "fname" name = "fname" class="signup-text" disabled>

                        </div>

                        <div>
                            <label  for="lname">Last name</label><br>
                            <input type = "text" value="{{ $lname }}" id = "lname" name = "lname" class="signup-text" disabled><br>   
                        </div>
                    </div>
                    <br>
                    <label>E-mail</label><br><input type = "email" value="{{ $email }}" id = "email" name = "email"class="signup-text"disabled style ="width: 460px"><br>
                    <br><br>
                    <!-- <label>Change Password</label><br><input type = "password" value="{{ $password }}" id = "password" name = "password" class="signup-text" required style ="width: 460px"><br>
                    <h5 id = "pass-validation" style="color: firebrick;"></h5> -->

                    <div id = "linear-tfs">
                        <div>
                            <label for="phone">Phone#</label>
                            <input  type = "tel" value="{{ $phone }}" id = "phone" name = "phone" class="signup-text" >
                        </div>

                        <div>
                            <label for="location">Location</label><br>
                            <input type = "text" value="{{ $location }}"  id = "location" name = "location" class="signup-text" required><br> 
                        </div>
                        <h5 id = "ph-validation" style="color: firebrick;"></h5>
                    <h5 id = "lc-validation" style="color: firebrick;"></h5>
                    </div>

                    <h3>Company Details</h3>
            
                    <div id = "linear-tfs">
                        <div>
                            <label for="cname">Company name</label>
                            <input type = "text" value="{{ $cname }}" id = "cname" name = "cname" class="signup-text" required>
                        </div>

                        <div>
                            <label for="job-role">Role</label><br>
                            <input type = "text" value="{{ $role }}" id = "job-role" name = "job-role"class="signup-text" required> 
                        </div>
                        <h5 id = "cname-validation" style="color: firebrick;"></h5>
                    </div>
                    <br><br>
                    
                    <button id = "new-card" class = "btn" type = "submit">Save changes</button>
                </form>
        
            </form>
        
        </div>
    </div>

    <script src="{{ asset('scripts/admin.js') }}"></script>
</body>
@else
    Error: Email not set in the session.
    @php
        return redirect('login_page');
    @endphp
@endif
</html>