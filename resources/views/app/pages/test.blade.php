<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}"> 

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Home</title>


    <link href="../vendor.chaojun/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../vendor.chaojun/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="../dist.chaojun/css/sb-admin-2.css" rel="stylesheet">

    <link href="../vendor.chaojun/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    
    
        <div class="alert alert-success">
        {{ session('timestamp') }}
        {{$message}}
        {{$user->ufirstname}}
    </div>







    <!-- jQuery -->
    <script src="../vendor.chaojun/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor.chaojun/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor.chaojun/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist.chaojun/js/sb-admin-2.js"></script>

</body>

</html>
