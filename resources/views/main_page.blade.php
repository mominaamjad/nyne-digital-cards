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
            <li class = "main-page-nav"><a href = "dbc">Digital Business Cards</a></li>
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


    <div class = "container-fluid " id = "top">
        <div class = "row " id="hero-div">
            <div class = "col-lg-5 col-xl-5 col-md-5 col-sm-12 col-xs-12 " id = "main-text">
                <h1 id = "main-heading"><b>The Leading Digital Business Card Platform</b></h1>
                <p id ="main-desc">Loved by millions worldwide, nyne- helps everyone from from individuals to enterprises—turn each customer touchpoint into a branded, interactive, and measurable opportunity. </p>

                <a href = "signup_page">
                    <button id = "signup-btn" class = "btn">Sign Up for free</button>
                </a>
                
            </div>

            <div class = "d-flex justify-content-center col-lg-7 col-xl-7 col-md-7 col-sm-12 col-xs-12  " id="hero-img">
                <img src = "images/1_neon.png" width = "65%" height="65%" >
            </div>
        </div>
    </div>

    

    <div class = "container-fluid" >
       
        <div class = "row" id = "brands">
            <div id = "brand-intro">
                <h2 id = "brand-intro-text"><b>nyne</b>is loved by people across all industries</h2> 
            </div>

            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/avis.png" width = "100%" height = "100%" >
            </div>

            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/nike.png" width = "100%" height = "100%" >
            </div>
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/ms.png" width = "100%" height = "100%" >
            </div>
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/bnb.png" width = "100%" height = "100%" >
            </div>
            
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/ig.png" width = "100%" height = "100%" >
            </div>
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/nb.png" width = "100%" height = "100%" >
            </div>
            
        </div>    
    </div>

    <div class = "container-fluid" >
        <div class = "row" id = "mid">
            <div class= "col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 "  id = "mid-img">
                <img src = "images/2_purple.png" width = "90%" height="90%">
            </div>
    
            
            <div class ="col-lg-3 col-xl-3 col-md-3 col-sm-6 col-xs-6" id="rect">
                    <h2 id = "mid-heading"><b>The best digital business card!</b></h2>
                    <p>Create a digital business card that includes your brand’s most important information. With advanced options for design, sharing, analytics, integrations and more, <b>nyne</b> can generate more opportunities and insights from your business interactions.</p>                
  
            </div>  
        </div>
        
    </div>

    <div class = "container-fluid" id = "info">
        <div class="row">
            <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <h2 id = "plan-info"><b>Plans for companies of all sizes</b></h2>
            </div>

            <div class= "col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-6">
                <p id = "plan-desc">Nyne's platform offers a consistent and compelling brand experience—complete with digital business cards, virtual backgrounds, and automated email signatures—that turns every customer touchpoint into a branded, interactive, and measurable opportunity.</p>
            </div>
        </div>
        
    </div>

    <div class="container">
        <div class="row" id = "card-info-div">
            <div class="col-xl-4 col-lg-4 col-md-4" id = "card-image">

                <img src = "./images/card.jpg" height="100%" width="100%">

            </div>
            <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="row-xl-6 row-lg-6" id = "market-leader" class = "market">

                    <h3>MARKET LEADER</h3>
                    <h2><b>220 million</b></h2>
                    <p>The reach of <b>nyne</b> digital business cards, email signatures, and virtual backgrounds in the past year.</p>  

                </div>
                <div class="row-xl-6 row-lg-6" id  = "market-share" class = "market">
                    <p>Share your card with anyone using its QR, text message, email, link, WhatsApp, social media, Apple Watch, Apple Wallet, widgets, NFC, Siri, AirDrop, and more.</p>

                </div>
            </div>
        </div>
    </div>



    <div id = "bottom">
        <h2 id ="get-started-heading" class = "get-started">
            Create your digital business card today.
        </h2>
        <p id = "get-started-info" class = "get-started">Get started for free with nyne and grow your network.</p>

        <a href = "/signup_page">
            <button id = "get-started-btn" class = "btn">Get started</button>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('scripts/script.js') }}"></script> -->
</body>
</html>