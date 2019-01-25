<!DOCTYPE html>
<html>
<head>  
    <meta charset = "utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<!-- nav of page -->
<div id="nav">
    <nav>
        <ul>
            <li class="active"><a href="/">Main</a></li>
            <li><a href="register">Register</a></li>
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            login
            </button>
            <li><a href="">Login</a></li>         
        </ul>
    </nav>
</div>

<!-- background -->
    <div id="background" class="imgw">
        <img src="image/bg.jpg"  width="100%">
        </div>          
            <!-- words -->
    <div id="welcome" class="words">
        <img src="image/logo.png">
        <br>
        WELCOME TO USE MSH
        <br>
    </div>
    <div id="footer" class="footer">
        Copyright©2018 W4Z
    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">exit</button>
                <button type="button" class="btn btn-primary" onclick="login()">submit</button>
            </div>
    
</body>
</html>
