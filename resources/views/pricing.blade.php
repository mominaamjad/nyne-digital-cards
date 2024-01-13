<!DOCTYPE HTML>


<head>
    <title>Pricing plans | nyne </title>    
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
            <li class = "main-page-nav"><a href = "pricing" id = "present">Pricing</a></li>

            
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
        
            <div >
                <h3>Pricing plans for everyone</h3>
                <p>Choose the plan that is right for you or your organization.</p>

            </div>

            <div class = "row" id = "pricing-plans">

                <div class = "col-xl-3 col-lg-3 col-md-3 col-xs-6 col-sm-6" id = "side-pricing-box">
                    <h3 style = "color:#7E57C2">Free</h3>
                    <p >Get started with digital business cards</p>
                    <h1 ><b style = "color:#7E57C2">$0/ mo</b></h1>
                    <h5>Includes: </h5>

                        <div class = "plan-points">
                            <p>
                                - Create up to four unique digital business cards <br>
                                - Add your photo, contact details, logo and links <br>
                                - Unlimited card sharing <br>
                                - Keep track of everyone you meet <br>
                                - 5 paper business card transcriptions / month <br>
                            </p>
                        </div>

                        <a href = "signup_page">
                            <button id = "new-card" class="btn">Sign Up</button>
                        </a>

                </div>


                <div class = "col-xl-3 col-lg-3 col-md-3 col-xs-6 col-sm-6" id = "mid-pricing-box">
                    <h3 >Professional</h3>
                    <p >Customize, brand, and analyze your cards</p>
                    <h1 ><b >$6/ mo</b></h1>
                    <h5>Everything in Free plan, plus:</h5>

                        <div class = "plan-points">
                            <p>
                                - Choose from additional card designs and styles <br>

                                - Add videos, badges, and PDFs <br>

                                - Brand your QR code and link <br>

                                - Access your cards' analytics <br>

                                - Sync with Microsoft Outlook and Google Contacts <br>
                            </p>
                        </div>

                        <a href = "signup_page">
                            <button id = "new-card" class="btn" style = "background-color: #505050">Sign Up</button>
                        </a>
                      

                </div>


                <div class = "col-xl-3 col-lg-3 col-md-3 col-xs-6 col-sm-6" id = "side-pricing-box">
                    <h3 style = "color:#7E57C2">Business</h3>
                    <p >Scale across your team and integrate with business tools</p>
                    <h1 ><b style = "color:#7E57C2">$5/ mo</b></h1>
                    <h5>Everything in Professional, plus:</h5>

                        <div class = "plan-points">
                            <p>
                                - Create powerful card templates <br>
                                
                                - Automatically insert email signatures for your users <br>
                                
                                - Customer Success Team and onboarding center <br>
                                
                                - Unlimited paper business card transcriptions <br>
                            </p>
                        </div>

                        <a href = "signup_page">
                            <button id = "new-card" class="btn">Sign Up</button>
                        </a>

                </div>

        </div>
    </div>
    <!-- <script src="{{ asset('scripts/script.js') }}"></script> -->
</body>
</html>