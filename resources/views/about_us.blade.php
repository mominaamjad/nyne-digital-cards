<!DOCTYPE HTML>


<head>
    <title>About | nyne </title>    
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
            <li class = "main-page-nav"><a href = "about_us" id = "present">About Us</a></li>
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


   <div class="container-fluid">
        <div class = "row" id = "vision">

            <div class = "col-xl-9 col-lg-9 col-md-9">
                <h1><b>Vision</b>behind nyne</h1>
                <p>At the heart of nyne's vision lies a fundamental shift from the physical realm of paper cards to the dynamic world of digital interaction. nyne recognizes the limitations of traditional business cards, their environmental impact, and their inability to adapt to the ever-changing landscape of modern communication.
                </p><br>

                <p>nyne envisions a world where exchanging information is seamless, effortless, and environmentally responsible. The platform strives to simplify the process of connection, eliminating the hassles of carrying and managing physical cards.</p>

            </div>
        
        </div>
   </div>



    <div class = "container-fluid">
        <div class = "row" id = "about-me">
            <div id = "brand-intro">
                <h2 id = "brand-intro-text"><b>nyne</b>founder</h2> 
            </div> 

            <div class = "col-xl-3 col-lg-3 col-md-3" id = "pfp-box">
                <div>
                    <img src = "images/pfp.jpg" width="100%" height = "100%">
                </div>

                <div>
                    <h3>Haneen Ehsan</h3>
                    <h4><i>Computer Scientist & Founder of Nyne</i></h4>
                </div>
            </div>

            <div class = "col-xl-8 col-lg-8 col-md-8" id = "about-me-text">
                <p>In the realm of technology, where innovation reigns supreme, I stand as a passionate computer scientist driven by an unwavering desire to bring about transformative change. With a deep-rooted fascination for all things technical, I embarked on a journey to revolutionize the way people connect and share information, giving birth to nyne, a digital card platform that redefines the concept of personal branding and professional networking. </p>
                <p>My journey began with a simple observation: the traditional business card, a relic of the past, was no longer in sync with the evolving landscape of modern communication. I envisioned a world where connections were seamless, efficient, and environmentally friendly, a world where digital cards seamlessly integrated into the dynamic digital realm.</p>
                <p>With unwavering determination, I set out to create nyne, a platform that would not merely replace paper cards but empower individuals to showcase their unique personalities and brands. nyne would be a canvas for creativity, a tool to foster meaningful connections, and a catalyst for global communication.</p><br>
                <p>nyne's success is a testament to the power of innovation and the unwavering belief in the transformative potential of technology. It is a symbol of progress, a reminder that even the most mundane aspects of our lives can be reinvented and revolutionized through ingenuity and passion.</p>
                <p>As nyne continues to evolve, I remain committed to its vision, ensuring that it remains at the forefront of digital communication, empowering individuals to connect, collaborate, and make a positive impact on the world.</p>
            </div>
        </div>
    </div>

   <div class = "container-fluid" >
       
        <div class = "row" id = "investor-brands">
            <div id = "brand-intro">
                <h2 id = "brand-intro-text"><b>nyne</b>investors</h2> 
            </div>

            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/alten.png" width = "100%" height = "100%" >
            </div>

            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/co.png" width = "100%" height = "100%" >
            </div>
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/game-face.png" width = "100%" height = "100%" >
            </div>
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/git.png" width = "100%" height = "100%" >
            </div>
            
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/meta.png" width = "100%" height = "100%" >
            </div>
            
            <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <img src = "images/csc.png" width = "100%" height = "100%" >
            </div>
        
        </div>    
    </div>
    <!-- <script src="{{ asset('scripts/script.js') }}"></script> -->
</body>

</html>