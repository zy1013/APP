<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manage Request</title>

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
                <a class="navbar-brand" href="Administrator dashboard.html"> MSH</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-info-circle fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
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
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="Manage requests.html">
                                <strong>Read All Requests</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                    <li><a href="Manage requests.html"><i class="fa fa-repeat fa-fw"></i>refresh</a>
                    </li>

                    <li><a href="Login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                                    <a href="newrequest">New Request</a>
                                    </li> 
                                   
                                </ul>
                                </li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Home 1<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>                           
                                    <a href="home">My Home</a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Client Requests Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Client Requests
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">Client ID</th>
                                        <th class="text-center">Theme</th>
                                        <th class="text-center">Time</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td class="text-center"><a href="viewrequest"><i class="fa fa-info-circle fa-fw"></i> 001</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 002</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 003</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 004</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 005</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 006</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 007</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 008</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 009</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 010</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 011</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 012</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 013</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 014</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 015</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 016</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 017</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 018</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 019</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 020</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 021</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 022</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 023</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 024</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 025</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 026</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 027</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 028</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 029</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 030</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 031</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center"><a href="#"><i class="fa fa-envelope fa-fw"></i> 032</a></td>
                                        <td class="text-center">xxxxxx</td>
                                        <td class="text-center">Time</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-bitbucket fa-fw"></i></a> </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                              <button type="button" class="btn btn-primary btn-lg btn-block" target="_blank" data-toggle="modal" data-target="#exampleModal"> Reply Client</button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                               <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                     <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                                        <h4 class="modal-title" id="exampleModalLabel">Reply Client </h4>
                                     </div>
                                     <div class="modal-body">
                                        <form>
                                           <div class="form-group">
                                              <label for="recipient-name" class="control-label"> Recipient</label>
                                              <input type="email" class="form-control" id="recipient-name" placeholder="Client ID">
                                           </div>
                                           <div class="form-group">
                                              <label for="theme-text" class="control-label">Theme: </label>
                                              <input type="text" class="form-control" id="theme-text" placeholder="Theme">
                                           </div>
                                           <div class="form-group">
                                              <label for="message-text" class="control-label">Textarea:</label>
                                              <textarea class="form-control" rows="4" id="message-text" placeholder="textarea"></textarea>
                                           </div>
                                        </form>
                                     </div>
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send</button>
                                     </div>
                                  </div>
                               </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor.chaojun/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor.chaojun/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor.chaojun/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor.chaojun/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor.chaojun/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor.chaojun/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist.chaojun/js/sb-admin-2.js"></script>

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
