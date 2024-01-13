<!DOCTYPE HTML>

<head>
    <title> Log into your account | nyne </title>    
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

            <div class = "col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 " >

                <h1><b>LOG IN</b></h1>
                <h3>Welcome back to NYNE!</h3>

                <form id = "login-form" onsubmit = "return submitLoginForm(event);" action="/login" method="post">
                    @csrf
                    @if(isset($comment))
                        <h5 style="color: red;">{{ $comment }}</h5>
                    @endif

                    <label for="email">E-mail</label><br><input type = "email" placeholder="Enter your Email" id = "email" name="email" class="login-text">
                    <h5 id = "email-validation" style="color: firebrick;"></h5>

                    <label for="pass" >Password</label><br><input type = "password" placeholder="Enter your password" id = "pass" name="password" class="login-text">
                    <h5 id = "pass-validation" style="color: firebrick;"></h5>

                    <button type="submit" id="login-btn" class="btn" >Log In</button>
                </form>

            </div>

            <div class= "col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 " id = "side-border">
                <img src = "images/4_purple.png" width = "70%" height="70%">
                <h4>New to nyne?</h4>
                <a href = "signup_page"><i><u>Create an account instead</u></i></a>
            </div>

        </div>
    </div>
    <script src="{{ asset('scripts/script.js') }}"></script>
</body>
</html>