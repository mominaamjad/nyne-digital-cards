<!DOCTYPE HTML>

<head>
    <title>NYNE | your digital card</title>    
    <!-- <script src = "script.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
    <!-- <link rel = "stylesheet" href = "style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <a href = "main_page">
        <img src = "images/logo.png" id = "logo-main" width = "15%" height = "20%">
    </a>

    <nav>
        <ul >
            <li class = "main-page-nav"><a href = "dbc" id = "present">Digital Business Cards</a></li>
            <li class = "main-page-nav"><a href = "about_us">About Us</a></li>
            <li class = "main-page-nav"><a href = "pricing">Pricing</a></li>

            
            <li class = "main-page-nav">
                <a href = "login_page">
                    <button id = "login" class="btn">Log In</button>
                </a>
            </li>
   
            <li class = "main-page-nav">
                <a href = "signup_page">
                    <button id = "new-card" class="btn">Create a card</button>
                </a>
                
            </li>

            <li class = "main-page-nav"><a href = "admin_login">Admin panel</a></li>
        </ul>
    </nav>

    <div class = "container-fluid">
        <div class = "row" id = "dbc-top">
            <div class = "col-xl-6 col-lg-6 col-md-6">
                <h4 id = "tagline">CONNECT WITH YOUR CUSTOMER, ANYTIME, ANYWHERE</h4>
                <h1><b>Digital </b>Business Card</h1>
                <p id = "dbc-main-text">Create, customize, and share digital business cards with HiHello, the most trusted digital branding platform.</p>

                <a href = "signup_page">
                    <button id = "signup-btn" class = "btn">Create a free card</button>
                </a>
            
            </div>

            <div class = "col-xl-5 col-lg-5 col-md-5">
                <img src = "images/qr-code-3d.png" width = "80%" height="80%">
            </div>    
        </div>
     
    </div>

   
    <div class = "container-fluid">
        <div class="row" id = "bottom">
            <div class="col-12">
                <h3>What is a digital business card?</h3>
                <p id = "dbc-main-text">A digital business card is the modern way to exchange contact information. Also known as virtual and electronic business cards, digital business cards are highly customizable, interactive, simple to share, and cost-effective alternatives to physical cards.</p>
            </div>

            <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <h1 class = "dbc-headings">1,000+</h1>
                <h5>brands entrust nyne business cards</h5>
            </div>

            <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <h1 class = "dbc-headings">7M+</h1>
                <h5>nyne cards were received in the past year</h5>
            </div>

            <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <h1 class = "dbc-headings">7x</h1>
                <h5>How many more times likely new connections are to follow up</h5>
            </div>  

        </div>

    </div>
    <!-- <script src="{{ asset('scripts/script.js') }}"></script> -->
</body>
</html>
