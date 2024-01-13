<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company card | nyne</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
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
   
    <div id = "card-info">
        <div id ="comp-card" class = "exp-card">
            <h1 style= "margin-top: 60px; margin-bottom: 0px;">{{ $username }}</h1>
            <h3 style= "margin-top: 10px; margin-bottom: 10px;">{{ $role }}</h3>
            <p style= "margin-top: 3px; margin-bottom: 15px;"><i>{{ $cname }}</i></p>
    
            <div id = "icons-align">

                <div id = "mail-part" class = "card-icons-align">
                    <div id = "card-icon-org" class = "card-icons">
                        <i class='bx bxs-envelope' style = 'font-size: 20px'></i>
                    </div>
                    
                    <p>{{ $email }}</p>


                </div>

                <div id = "mail-part" class = "card-icons-align">
                    <div id = "card-icon-org" class = "card-icons">
                    <i class='bx bxs-map' style = 'font-size: 20px' ></i>
                    </div>

                    <p>{{ $location }}</p>
                </div>
            
             </div>
        </div>

        <div id = "card-scan">
            <h2>Send Card</h2>
            <br>
            {!! QrCode::size(300)->generate("NYNE Company Card"."\n".$username."\n".$role."\n".$cname."\n".$email."\n".$location) !!}
            <br><br>
            <p>Scan to preview</p>
            

        </div>
    </div>

</div>

    
</body>
@else
    Error: Email not set in the session.
    @php
        return redirect('login_page');
    @endphp
@endif
</html>