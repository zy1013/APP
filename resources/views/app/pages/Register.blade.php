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
    <link href="../vendor.chaojun/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor.chaojun/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor.chaojun/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor.chaojun/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist.chaojun/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor.chaojun/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

    
                        <h3 class="panel-heading" >Register:</h3>
                        <!-- .panel-body -->
                        <form action="/confirmregister" method="post" class="form-horizontal">
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <div class="alert" >
                                <label>Email Adress:</label>
            <input name="email" class="form-control" placeholder="must be email format" style="width: 600px;" onchange="check(this)">
                           <h4 id="message">-</h4>
                           <br>
                               <label>First Name:</label>
            <input name="firstname" class="form-control" placeholder="no more than 50 letters" style="width: 600px;">
                        
                            <br>
                               <label>Last Name:</label>
            <input name="lastname" class="form-control" placeholder="no more than 50 letters" style="width: 600px;" >
                          
                           <br>
                                 <label>Password:</label>
            <input name="password" class="form-control" placeholder="no more than 20 letters and less than 8 letters, special symbol is not allowed." style="width: 600px;">
                         
                            <br>
                                 <label>Confirm Password:</label>
            <input class="form-control" placeholder="no more than 20 letters and less than 8 letters, special symbol is not allowed." style="width: 600px;">
                            </div>
                        </div>
                        
          <div class="controls" style="margin-left: 80px;">
            <label class="checkbox" style="font-size: 15px;"><input type="checkbox" value=""> I agree with  terms of service. </label>   
         </div>
         <button type="submit" class="btn btn-default" style="margin-left: 100px;margin-top: 40px;width: 110px; height: 30px;">Register</button>
         <a href="/">
         <button type="button" class="btn btn-default" style="margin-left: 100px;margin-top: 40px;width: 110px; height: 30px;">Cancel</button></a>
                
 </form>


                    </div>



    <!-- jQuery -->
    <script src="../vendor.chaojun/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor.chaojun/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor.chaojun/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist.chaojun/js/sb-admin-2.js"></script>
    <script src="../js.chaojun/msh.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>


    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});


    function check(elem) {
        $("#message").innerHTML="123";
        var email2check = elem.value;
        $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url:"userinfo",
        type:"post",
        dataType:"text",
        data:{email:email2check},
        success:function(data){
             try {
                console.log(data);
                    $("#message").text(data);

                } catch (e) {
                    return false;
                }
                
        }
    });
    }

    </script>

</body>

</html>
