<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/regist.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">

var reg=/^[a-zA-Z]\w*$/;
var flag1=false,flag2=false,flag3=false,flag4=false,flag5=false;

function checkemail(obj){
	var email=obj.value;
　　var reg = /^\w+((.\w+)|(-\w+))@[A-Za-z0-9]+((.|-)[A-Za-z0-9]+).[A-Za-z0-9]+$/; //正则表达式
　　if(!reg.test(email)){ //正则验证不通过，格式不对
　　　　document.getElementById("email").innerHTML="<font color='red'>format error !</font>";
　　　　flag1=false;
　　}else{
		flag1=false;
		$.ajax({
            url:"checkemail",
            type:"post",
            dataType:"text",
            data:{
                "uemail":email
            },
            success:function(response){
 				if(response==1)
        document.getElementById("email").innerHTML="<font color='green'>format correct !</font>";　
 				else {
 					document.getElementById("email").innerHTML="<font color='red'>Email already exist!</font>";

 				}
            },
            error:function() {
            }
        });






       document.getElementById("email").innerHTML="<font color='green'>format correct !</font>";　　
　　　　flag1=true;
　　}
}

function chang1(obj){
	var FirstName=obj.value;
	if(FirstName.length>20){	
		document.getElementById("FirstName").innerHTML="<font color='red'>FirstName can't more than 20 letters.</font>";
	}
	else if(!reg.test(FirstName)){
		//alert("用户名由字母开头，后字母、数字或下划线!");
		document.getElementById("FirstName").innerHTML="<font color='red'>FirstName must start with letters.</font>";
		flag2=false;
	}
	else{
		flag2=true;
		document.getElementById("FirstName").innerHTML="<font color='green'>format correct !</font>";
	}
}
function chang2(obj){
	var LastName=obj.value;
	if(LastName.length>20){
		
		document.getElementById("LastName").innerHTML="<font color='red'>LastName can't more than 20 letters.</font>";
	}
	else if(!reg.test(LastName)){
		//alert("用户名由字母开头，后字母、数字或下划线!");
		document.getElementById("LastName").innerHTML="<font color='red'>LastName must start with letters.</font>";
		flag3=false;
	}
	else{
		flag3=true;
		document.getElementById("LastName").innerHTML="<font color='green'>format correct!</font>";
	}
}
function chang3(obj){
	var pwd=obj.value;
    var reg=/^(?![a-zA-Z0-9]+$)(?![A-Z0-9\\_%&',;=?$+#@!~:"/.`^|*<>{}-]+$)(?![A-Za-z\\_%&',;=?$+#@!~:""/.`^|*<>{}-]+$)(?![a-z0-9\\_%&',;=?$+#@!~:""/.`^|*<>{}-]+$)[a-zA-Z0-9\\_%&',;=?$+#@!~:""/.`^|*<>{}-]{8,16}$/; 
	if(!reg.test(pwd)) {
		document.getElementById("ps1").innerHTML="<font color='red'>Password needs 8~16 words which contain special symbol, number,capital and small letters.</font>";
　　　　flag4=false;
	}
	else{
		document.getElementById("ps1").innerHTML="<font color='green'>format correct!</font>";
		flag4=true;
	}
}
function chang4(obj){
	var pwd1=obj.value;
	var pwd=document.regist.password.value;
	var reg=/^(?![a-zA-Z0-9]+$)(?![A-Z0-9\\_%&',;=?$+#@!~:"/.`^|*<>{}-]+$)(?![A-Za-z\\_%&',;=?$+#@!~:""/.`^|*<>{}-]+$)(?![a-z0-9\\_%&',;=?$+#@!~:""/.`^|*<>{}-]+$)[a-zA-Z0-9\\_%&',;=?$+#@!~:""/.`^|*<>{}-]{8,16}$/; 
	if(pwd!=pwd1){
		//alert("两次输入密码不一致！");
		document.getElementById("ps2").innerHTML="<font color='red'>Two passwords are inconsistent!</font>";
	    flag5=false;
	}
	else if(!reg.test(pwd1)){
        document.getElementById("ps2").innerHTML="<font color='red'>Password needs 8~16 words which contain special symbol, number,capital and small letters.</font>";
　　　　flag5=false;
	}
	else{
		document.getElementById("ps2").innerHTML="<font color='green'>Correct !</font>";
		flag5=true;
	}
}
 
function sub(){
	if(flag1&&flag2&&flag3&&flag4&&flag5){
		alert("Register success!");
		document.regist.submit();		
	}
	else{
		alert("pleasw complete your information");		
	}
}
// function res(){
// 	document.regist.email.value="";
// 	document.regist.FirstName.value="";
// 	document.regist.LastName.value="";
// 	document.regist.password.value="";
// 	document.regist.passwordAgain.value="";
// 	document.getElementById("email").innerHTML="";
// 	document.getElementById("FirstName").innerHTML="";
//     document.getElementById("LastName").innerHTML="";
// 	document.getElementById("ps1").innerHTML="";
// 	document.getElementById("ps2").innerHTML="";
// }

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

    .words{font-size: 30px;
           font-family: verdana;
            letter-spacing: 0px;
            position: absolute;
            top:10%;
            left: 28%;
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
   <div class="imgw">
        <img src="image/bg.jpg" alt= "" width="100%">
    </div>

    <div class="words" >
    <!-- .panel-body -->
<form method="POST" name="regist" action="confirmregister">
	<div class="words" ><img src="image/logo.png">
    <br>
			
					<label style="font-size: 20px;">Email:</label>
					<input name="email" class="form-control" style="width: 500px;" required="true" type="text" value="" onchange="checkemail(this)" autofocus=""></input>
					<label id="email" style="font-size: 15px;"></label>
					<br>
											
							
					<label style="font-size: 20px;">First Name1:</label>				
					<input name="firstname" class="form-control" style="width: 500px;" required="true" type="text" value="" onchange="chang1(this)"></input>			
					<label id="FirstName" style="font-size: 15px"></label>
					<br>

					<label style="font-size: 20px;">Last Name:</label>				
					<input name="lastname"  class="form-control" style="width: 500px;" required="true" type="text" onchange="chang2(this)"></input>	
					<label id="LastName" style="font-size: 15px"></label>
					<br>
					
								
					<label style="font-size: 20px;">Password:</label>				
					<input name="password" class="form-control" style="width: 500px;" required="true" type="password" onchange="chang3(this)" value=""></input>				
					<label id="ps1" style="font-size: 15px"></label>
					<br>
				
								
					<label  style="font-size: 20px;">Confirm Password:</label>				
					<input  name="passwordAgain" class="form-control" style="width: 500px;" required="true" type="password" onchange="chang4(this)" value=""></input>			
					<label id="ps2" style="font-size: 15px"></label>									
			
	
	<div class="controls">
    <label class="checkbox" style="font-size: 15px;" data-toggle="tooltip" data-placement="right" >
  <input type="checkbox" value="" onClick='document.getElementById("Register").disabled=!this.checked' data-container="body" data-toggle="popover" data-placement="top"
            data-content="Terms of service: 1.you will agree with this and that...">I agree with terms of service.</label>
    </div>
    <br>
    <div align="center">
      <button id="Register" type="Register" value="Register" class="btn btn-info" style="margin-right: 50px;width: 80px;" disabled="onClick" onclick="sub()">Register</button>
      <button type="reset" value="Reset" class="btn btn-info" style="width: 80px;">Reset</button>  
   </div>
	
</div>
        </form>
    </div>

    <!-- jQuery -->  
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    <script type="text/javascript">
 	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
 	$(function (){
    $("[data-toggle='popover']").popover();
});
 </script>
</body>
</html>