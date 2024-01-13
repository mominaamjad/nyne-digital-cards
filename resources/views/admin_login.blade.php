<!DOCTYPE HTML>

<head>
    <title>Admin Login | nyne </title>    
    <!-- <script src = "script.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
    <!-- <link rel = "stylesheet" href = "style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href = "main_page">
        <img src = "images/logo.png" id = "logo" width = "15%" height = "20%">
    </a>

    <div class = "container-fluid">
        <div class = "row" >

            <div class = "col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 " >
                <h1 width = "100%"><b>ADMIN LOGIN</b></h1>
                <img src = "images/5_purple.png" width = "65%" height="80%">

            </div>
            
        
            <div class = "col-lg-4 col-xl-4 col-md-4 col-sm-12 col-xs-12 " id = "admin-login">
                <h3>Welcome Admin!</h3>

                <form id = "login-form" onsubmit = "return submitLoginForm(event);" action="/adminLogin" method="post">
                @csrf
                    @if(isset($comment))
                        <h5 style="color: red;">{{ $comment }}</h5>
                    @endif
                    <label for="admin_user">Username</label><br><input type = "text" placeholder="Enter Username"name ="admin_user" id = "admin_user" class="login-text"><br>
                    <h5 id = "user-validation" style="color: firebrick;"></h5>
                    <label for="admin_pass">Password</label><br><input type = "password" placeholder="Enter your password" name="admin_pass" id = "admin_pass" class="login-text"><br>
                    <h5 id = "pass-validation" style="color: firebrick;"></h5>
                    <button id = "login-btn" class = "btn" type="submit">Log In</button>
                </form>

            </div>

          
        </div>
        
    </div>
    <script src="{{ asset('scripts/admin.js') }}"></script>
</body>
</html>