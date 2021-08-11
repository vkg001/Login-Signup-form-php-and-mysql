

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
        #logout{
            display: none;
        }
    </style>
</head>

<body class="grey lighten-3">
    <nav class="green">
        <div class="container">
            <a href="index.php" class="brand-logo" onclick="chkstate()" id="home">HOME</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li id="signin"><a id="signin2" href="form.php">Sign up</a></li>
                <li id="login"><a id="login2" href="login.php"> Login</a></li>
                <li><a id="logout" href="login.php" onclick="deletelogin()"> Logout</a></li>
                <li id="report"><a href="#"> Report Bug</a></li>
            </ul>
            
        </div>
    </nav>
    
</body>