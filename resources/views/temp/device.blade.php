<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Device</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Account.html">MSH</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> 
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="divider"></li>
                       
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                    <li><a href="Device.html"><i class="fa fa-repeat fa-fw"></i>refresh</a>
                    </li>

                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <li>
                            <a href="Account.html"><i class="fa fa-user fa-fw"></i>Account<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Account.html">My Account</a>
                                </li>
                                <li>
                                    <a href="Modify Password.html">Modify password</a>
                                </li>
                                <li>
                                    <a href="Message.html">Message<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">  
                                     <li>                           
                                    <a href="Message.html">My Message</a>
                                    </li>    
                                    <li>                           
                                    <a href="New Message.html">New Message</a>
                                    </li>                                    
                               </ul>
                                </li>
                                <li>
                                    <a href="Request.html"><i class="fa fa-request fa-fw"></i>Request<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                         <li>
                                    <a href="Request.html">My Request</a>
                                    </li> 
                                     <li>
                                    <a href="New Request.html">New Request</a>
                                    </li> 
                                   
                                </ul>
                                </li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Home 1<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>                           
                                    <a href="HomePage.html">My Home</a>
                                    </li> 
                                <li>
                                    <a href="Room.html">Room</a>
                                </li>        
                                <li>
                                    <a href="log.html">Log</a>
                                </li>                        
                                <li>
                                    <a href="Device.html"><i class="fa fa-device fa-fw"></i>Device<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                        <a href="Device.html">My Device</a>
                                    </li>
                                    <li>
                                        <a href="Add Device.html">Add Device</a>
                                    </li>
                                    <li>
                                        <a href="Edit Device.html">Edit Device</a>
                                    </li>
                                    </ul>
                                </li>
                           
                                
                            </ul>
                        </li>
                         <li>
                             <a href="Homelist.html"><i class="fa fa-home fa-fw"></i>Homelist</a>
                         </li>

                         <li>
                             <a href="Add Home.html"><i class="fa fa-plus fa-fw"></i>Add Home</a>
                         </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<div id="page-wrapper" style="min-height: 478px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Device</h1>
                </div>
                    
                
                <!-- /.col-lg-12 -->
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                                            
                        <div class="panel-body">
                             <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table width="100%" class="table-striped table table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example_length" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">

                                             <thead>
                                    <tr role="row">
                                        <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Device ID
                                        </th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 71px;">Room Name
                                        </th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Device ID: activate to sort column ascending" style="width: 95px;">Type
                                        </th>
                                         <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Status
                                        </th>
                                         <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Edit
                                        </th>
                                          <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Delete
                                        </th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
          
                                <tr class="gradeX odd" role="row">
                                        <td class="text-center sorting_1">Livingroom light 1</td>
                                        <td class="text-center">living room</td>
                                        <td class="text-center">light</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-check fa-fw"></i></a></td>
                                        <td class="text-center"><a href="#"><i class="fa fa-pencil fa-fw"></i></a></td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a></td>
                                     
                                    </tr><tr class="gradeC even" role="row">
                                        <td class="text-center sorting_1">A/C 1</td>
                                        <td class="text-center">kitchen</td>
                                        <td class="text-center">air-condition</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-warning fa-fw"></i></a></td>
                                        <td class="text-center"><a href="#"><i class="fa fa-pencil fa-fw"></i></a></td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a></td>
                                                                                                                  
                                    </tr></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="Add Device.html"><button style="margin-left: 400px;" type="button" class="btn btn-primary">Add New Device</button></a>
   <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/dataTables.responsive.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


</body>

</html>