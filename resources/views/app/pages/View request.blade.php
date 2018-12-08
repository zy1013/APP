<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View client request</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor.chaojun/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor.chaojun/metisMenu/metisMenu.min.css" rel="stylesheet">

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
                            <a href="#"><i class="fa fa-home fa-fw"></i> Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="#"> Dashboard</a>
                                </li>
                                <li>
                                    <a href="adminmessage">Message</a>
                                </li>
                                <li>
                                    <a href="adminrequest">Request</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user-md fa-fw"></i> Account<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="adminprofile">Administrator profile</a>
                                </li>
                                <li>
                                    <a href="changepassword">Change password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

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
                            <a href="#"><i class="fa fa-home fa-fw"></i> Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="Administrator dashboard.html"> Dashboard</a>
                                </li>
                                <li>
                                    <a href="Manage messages.html">Message</a>
                                </li>
                                <li>
                                    <a href="Manage requests.html">Request</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user-md fa-fw"></i> Account<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Administrator profile.html">Administrator profile</a>
                                </li>
                                <li>
                                    <a href="Change password.html">Change password</a>
                                </li>
                            </ul>
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
                    <h1 class="page-header">View Client Request</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Client Request
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Client ID:</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Client Email Address: </label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Theme:</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea:</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>

                                        <div class="well">
                                          <button type="button" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#exampleModal">Reply Request</button>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                           <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                 <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times; </span> </button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Reply Request</h4>
                                                 </div>
                                                 <div class="modal-body">
                                                    <form>
                                                       <div class="form-group">
                                                          <label for="recipient-name" class="control-label"> Recipient</label>
                                                          <input type="email" class="form-control" id="recipient-name" placeholder="Email">
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
                                                    <button type="button" class="btn btn-primary"> Send </button>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-9 -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist.chaojun/js/sb-admin-2.js"></script>

</body>

</html>
