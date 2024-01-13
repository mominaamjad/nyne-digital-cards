<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $username }}'s Dashboard | nyne </title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      
</head>
@if(session()->has('email'))
<body>
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

        <!-- Rest -->

        
        <div id="card-heading"><h1>Your cards</h1></div>
        
        <div id = "card-div">
            <a href = "personal_card" id = "card-ops">
                <div id ="personal-card-div" class = "card">
                    <h3 style="padding: 0px; margin-left: 10px; margin-top: 160px;">Personal</h3>
                </div>
            </a>
    
            <a href = "company_card" id = "card-ops" class = "card">
                <div id ="comp-card-div">
                    <h3 style="padding: 0px; margin-left: 10px; margin-top: 160px;">Work</h3>
                </div> 
            </a>
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