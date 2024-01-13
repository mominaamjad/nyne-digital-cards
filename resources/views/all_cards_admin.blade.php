<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Cards | nyne</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
</head>
@if(session()->has('user'))
<body>

    <div id = "admin-bar">

    <a href = "/">
        <img src = "{{ asset('images/logo.png') }}" id = "logo" width = "30%" height = "85%">
    </a>
    
        <h1>User's All Cards</h1>
    </div>

    <!-- <div id = "back-icon">
        <a href = "./admin_dashboard">
            <i class='bx bx-arrow-back' style = "font-size: 40px ;color:#7E57C2"></i>
        </a>
    </div> -->

    <div id = "card-info">
        <div id ="pers-card" class = "exp-card">
            <h1 style= "margin-top: 100px; margin-bottom: 0px;">{{ $fname }} {{ $lname }}</h1>
            
    
            <div id = "icons-align">

                <div id = "mail-part" class = "card-icons-align">
                    <div id = "card-icon-pur" class = "card-icons">
                        <i class='bx bxs-envelope' style = 'font-size: 20px'></i>
                    </div>
                
                    <p>{{ $email }}</p>


                </div>

                <div id = "mail-part" class = "card-icons-align">
                    <div id = "card-icon-pur" class = "card-icons">
                        <i class='bx bxs-phone' style = 'font-size: 20px'></i>
                    </div>
                
                    <p>{{ $phone }}</p>


                </div>

                <div id = "mail-part" class = "card-icons-align">
                    <div id = "card-icon-pur" class = "card-icons">
                        <i class='bx bxs-map' style = 'font-size: 20px'></i>
                    </div>

                    <p>{{ $location }}</p>
                </div>
            
             </div>
        </div>

        <div id = "card-scan">
            <h2>Send Card</h2>

            {!! QrCode::size(300)->generate("NYNE Personal Card"."\n".$fname." ".$lname."\n".$email."\n".$phone."\n".$location) !!}
            <br>

            <p>Scan to preview</p>

            <!-- <button id = "pers-link-btn" class = "btn"><i class='bx bxs-copy'></i> Copy Link</button> -->


        </div>
    </div>


    <div id = "card-info">
        <div id ="comp-card" class = "exp-card">
            <h1 style= "margin-top: 60px; margin-bottom: 0px;">{{ $fname }} {{ $lname }}</h1>
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
                        <i class='bx bxs-map' style = 'font-size: 20px'></i>
                    </div>

                    <p>{{ $location }}</p>
                </div>
            
             </div>
        </div>

        <div id = "card-scan">
            <h2>Send Card</h2>

            {!! QrCode::size(300)->generate("NYNE Company Card"."\n".$fname." ".$lname."\n".$role."\n".$cname."\n".$email."\n".$location) !!}
            <br>

            <p>Scan to preview</p>

            <!-- <button id = "comp-link-btn" class = "btn"><i class='bx bxs-copy'></i> Copy Link</button> -->


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