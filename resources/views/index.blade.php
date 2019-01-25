<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Main</title>
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
<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body style="text-align: center;background-image: url(image/bg.jpg) no-repeat;">
    <div id="background" class="imgw">
        <img src="image/bg.jpg"  width="100%">
        </div>          
            <!-- words -->
    <div id="welcome" class="words">
        <img src="image/logo.png">
   <h1 style="text-align: center"><b style=" margin-top: 100px;font-size: 35px;font-family: verdana;width: 400;padding-top: 100;">WELCOME TO USE MSH</b></h1>
   <br>


{{--    <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Message: </strong> {{$message}}
</div> --}}



@if ($login = 1)
    <a href="register">
        <button class="btn btn-primary btn-lg">
            Register
        </button>
    </a>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            login
        </button>
@elseif ($login == 2)
        <a href="sendmail"><button style="font-size: 25px;margin-left: 240px;margin-top: 50px;border-width: 2px;" type="button" class="btn btn-outline btn-warning">Go to my Home</button></a>
        @else
        <a href="">error!</a>
@endif

<br>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="loginForm" action="confirmlogin" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input id="email" type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="password" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </form>
                <div id="danger" class="alert alert-danger" role="alert"></div>
                <a href="forgetpassword"><u>Forget password?</u></a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">exit</button>
                <button type="button" class="btn btn-primary" onclick="login()">submit</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
    function login()
    {
        email=$('input#email').val();
        password=$('input#password').val();
        // console.log(email);
        // console.log(password);
        $.ajax({
            url:"confirmlogin",
            type:"post",
            dataType:"json",
            data:{
                "email":email,
                "password":password
            },
            success:function(response){
                console.log(response.message);
                console.log(response.flag);
                console.log(response.type);
                if(response.flag==0)
                {
                    $('#danger').text(response.message);
                    $('#danger').show();
                }
                else if(response.flag==1)
                {
                    $('#danger').text(response.message);
                    $('#danger').show();
                }
                else
                {
                    $('#danger').attr('class', 'alert alert-success');
                    $('#danger').text(response.message);
                    $('#danger').show();
                    if(response.type==2)
                    window.location="/admin";
                    else {
                         window.location="/home";
                     } 
                }
            },
            error:function() {
            }
        });
    };

    $(document).ready(function() {
        $('#danger').hide();
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
</html>