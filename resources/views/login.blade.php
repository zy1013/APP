<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <!-- Custom CSS -->
    
     <link href="css/regist.css" rel="stylesheet" type="text/css">
     <script type="text/javascript">

var reg=/^[a-zA-Z]\w*$/;
var flag1=false,flag2=false;

function checkemail(obj){
    var email=obj.value;
　　var reg = /^\w+((.\w+)|(-\w+))@[A-Za-z0-9]+((.|-)[A-Za-z0-9]+).[A-Za-z0-9]+$/; //正则表达式
　　if(!reg.test(email)){ //正则验证不通过，格式不对
　　　　alert('format error');   
　　　　flag1=false;
　　}else{
　　　　flag1=true;
　　}
}
function checkpassword(obj){
    var pwd=obj.value;
    var reg=/^(?![a-zA-Z0-9]+$)(?![A-Z0-9\\_%&',;=?$+#@!~:"/.`^|*<>{}-]+$)(?![A-Za-z\\_%&',;=?$+#@!~:""/.`^|*<>{}-]+$)(?![a-z0-9\\_%&',;=?$+#@!~:""/.`^|*<>{}-]+$)[a-zA-Z0-9\\_%&',;=?$+#@!~:""/.`^|*<>{}-]{8,16}$/; 
    if(!reg.test(pwd)) {
    alert('format error');
　　    flag2=false;
    }
    else{
        flag2=true;
    }
}
function confirm(){
    if(flag1&&flag2){  
        document.login.submit();       
    }
    else{
        alert("pleasw modify your information");      
    }
}

function submitData()
{

    document.loginForm.submit();   
}




</script>
</head>
<style type="text/css">
    nav{
        width: 100%;
        height: 60px;   
        background: rgba(0,0,0,.3);
        position: absolute;
        z-index: 10;
    }
    nav ul{
        list-style: none;
        margin: 0;
        padding: 0;
    }
    nav ul li{
        text-align: center;
        float: left;
        line-height: 60px;
    }
    nav ul li a{
        width: 100px;
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        display: block;
    }
    nav ul li a:hover,nav ul li a:visited{
        text-decoration: none;
        background: rgba(0,0,0,.5);
        color: #fff;
    }

    .words{      
            text-align: center;
            }
    .imgw{position: relative;}
</style>

<body>
     <nav>
        <ul>
            <li class="active"><a href="Main.html">Main</a></li>
            <li><a href="Register.html">Register</a></li>
            <li><a href="Login.html">Login</a></li>          
        </ul>
    </nav>

   <div class="imgw"><img src="image/bg.jpg" alt= "" width="100%" ></div>
   
    <div class="words" >
    <!-- .panel-body -->

<form method="POST" name="login" action="Login.html">
    <div class="words" ><img src="image/logo.png">
    
      <div class="container">
        <div class="row">

            <div class="col-md-4  col-md-offset-4">
                <div class="login-panel panel panel-info">
                    <div class="panel-heading">

                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                        <form role="form" name="loginForm">
                            <fieldset>
                                <div class="form-group">
                                    <input id="email" class="form-control" placeholder="E-mail" name="email" type="email" autofocus onchange="checkemail(this)">
                                </div>
                                <div class="form-group">
                                    <input id="pwd" class="form-control" placeholder="Password" name="password" type="password" value="" onchange="checkpassword(this)">
                                </div>


                                <div id="wrongPasswordAlert" class="alert alert-danger" disabled = true>Your password is wrong.</div>
                                <div id="emailNotExistAlert" class="alert alert-danger" disabled = true>The email not exists.</div>



                                    <label style="font-size: 13px;">
                                        <a href="forgetpassword"><p style="text-align: center;">Forget Password?</p></a>
                                    </label>
                             
                                <!-- Change this to a button or input when using this as a form -->
                                <a class="btn btn-lg btn-info btn-block" onclick="submitData()" >Login</a>
                           <fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <br>
  
</div>
        </form>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
