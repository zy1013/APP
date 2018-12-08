<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Room</title>

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
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
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
                    <li><a href="Room.html"><i class="fa fa-repeat fa-fw"></i>refresh</a>
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
                     

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Account<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="account">My Account</a>
                                </li>
                                <li>
                                    <a href="modifypassword">Modify password</a>
                                </li>
                                <li>
                                    <a href="message">Message<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">  
                                     <li>                           
                                    <a href="message">My Message</a>
                                    </li>    
                                    <li>                           
                                    <a href="newmessage">New Message</a>
                                    </li>                                    
                               </ul>
                                </li>
                                <li>
                                    <a href="request"><i class="fa fa-request fa-fw"></i>Request<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                         <li>
                                    <a href="request">My Request</a>
                                    </li> 
                                     <li>
                                    <a href="newquest">New Request</a>
                                    </li> 
                                   
                                </ul>
                                </li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Home 1<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>                           
                                    <a href="homelist">My Home</a>
                                    </li> 
                                <li>
                                    <a href="room">Room</a>
                                </li>        
                                <li>
                                    <a href="log">Log</a>
                                </li>                        
                                <li>
                                    <a href="device"><i class="fa fa-device fa-fw"></i>Device<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                        <a href="device">My Device</a>
                                    </li>
                                    <li>
                                        <a href="adddevice">Add Device</a>
                                    </li>
                                    <li>
                                        <a href="editdevice">Edit Device</a>
                                    </li>
                                    </ul>
                                </li>
                           
                                
                            </ul>
                        </li>
                          <li>
                             <a href="homelist"><i class="fa fa-home fa-fw"></i>Homelist</a>
                         </li>

                         <li>
                             <a href="addhome"><i class="fa fa-plus fa-fw"></i>Add Home</a>
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
                    <h1 class="page-header">Room</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
                                        <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Room Name
                                        </th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 71px;">Device ID
                                        </th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Device ID: activate to sort column ascending" style="width: 95px;">Delete
                                        </th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
          
                                <tr class="gradeX odd" role="row">
                                        <td class="text-center sorting_1">Living room<a href="#"><i class="fa fa-pencil fa-fw"></i></a></td>
                                        <td class="text-center">livingroom light 1</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a></td>
                                     
                                    </tr><tr class="gradeC even" role="row">
                                        <td class="text-center sorting_1">kitchen<a href="#"><i class="fa fa-pencil fa-fw"></i></a></td>
                                        <td class="text-center">A/C 1</td>
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
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Room</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>          
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                                            
                        <div class="panel-body">                           
                              <div class="alert" >
                                    <label style="font-size: 20px;margin-top: 30px;">Enter Room Name:
                                        <input class="form-control" placeholder="no more than 20 letters and less than 8 letters, special symbol is not allowed." style="width: 600px;" >
                                    </label>
                              </div>
                              <button type="button" class="btn btn-outline btn-warning" style="margin-left: 400px;width: 100px; height: 40px;">Creat
                              </button>
                          </div>
                      </div>
                  </div>
          </div>


</div>

         <!-- jQuery -->
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

</body>

</html>