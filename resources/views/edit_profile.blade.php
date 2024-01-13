<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profile | nyne</title>    
    <!-- <script src = "script.js"></script> -->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    
    <!-- <link rel = "stylesheet" href = "style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
</head>
@if(session()->has('email'))
<body>

    
    <!-- navbar -->

    <div class="dashboard">

        <!-- Side bar -->
        <div id="sidebar">
            <!-- Hamburger Menu -->
            <div id = "top">
                <h2><b>nyne.</b></h2>            
                <!-- <i style="font-size: 30px;" class='bx bx-menu-alt-left' id = "menu-btn" ></i>   -->
            </div>
    
            <!-- Nav Buttons -->
            <ul id = "nav-options">
                <li id = "sidebar-nav">
                    <a href = "user_dashboard">
                        <i style="font-size: 20px; margin-right: 14px;" class='bx bxs-carousel'></i>
                        <span style="font-weight: bold; font-size: 16px;" class = "nav-item"></span>
                    </a>

                    <span class = "tooltip">All Cards</span>
                </li>

                <li id = "sidebar-nav">
                    <a href = "personal_card">
                        <i style="font-size: 20px; margin-right: 14px;" class='bx bxs-user-badge'></i>
                        <span style="font-weight: bold; font-size: 16px;" class = "nav-item"></span>
                    </a>

                    <span class = "tooltip">Personal Card</span>
                </li>

                <li id = "sidebar-nav">
                    <a href = "company_card">
                        <i style="font-size: 20px; margin-right: 14px;" class='bx bxs-card'></i>
                        <span style="font-weight: bold; font-size: 16px;" class = "nav-item"></span>
                    </a>

                    <span class = "tooltip">Company Card</span>
                </li>

                <li id = "sidebar-nav">
                    <a href = "edit_profile">
                        <i style="font-size: 20px; margin-right: 14px;" class='bx bxs-cog'></i>
                        <span style="font-weight: bold; font-size: 16px;" class = "nav-item"></span>
                    </a>

                    <span class = "tooltip">Settings</span>
                </li>

                <li id = "sidebar-nav">
                    <a href = "logout">
                    <!-- <i class="fas fa-sign-out-alt" style="font-size: 20px; margin-right: 14px;"></i> -->
                        <i style="font-size: 20px; margin-right: 14px;" class='bx bxs-log-out'></i>
                        <span style="font-weight: bold; font-size: 16px;" class = "nav-item"></span>
                    </a>

                    <span class = "tooltip">Sign Out</span>
                </li>
            
            </ul>
            
        </div>
   
        <div id = "inner-update-div">
            <h2><b>Edit Profile</b></h2>
        
            <form id = "signup-form" onsubmit = "return submitSignupForm(event);" action="/edit" method="post">
            @csrf
            
                <h3>Personal Information</h3>
        
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
                    <label>Change Password</label><br><input type = "password" value="{{ $password }}" id = "password" name = "password" class="signup-text" required style ="width: 460px"><br>
                    <h5 id = "pass-validation" style="color: firebrick;"></h5>

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
                   
        
            </div>
        

    </div>
    <script src="{{ asset('scripts/script.js') }}"></script>
   
</body>
@else
    Error: Email not set in the session.
    @php
        return redirect('login_page');
    @endphp
@endif
</html>