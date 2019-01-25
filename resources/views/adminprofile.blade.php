<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrator profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
    $(function () {
      setInterval(function () {
        $("autore") . load(location.href + "#autore");
      },1000);
      <!--每秒刷新一次-->
    })
    </script>

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
                <a class="navbar-brand" href="Administrator dashboard.html"> MSHmanager</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-info-circle fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-requests">
                       <li>
                          <a href="View request.html">
                            <div id="autore">
                              <!--调用局部刷新-->
{{--                                @foreach($user as $user)
                                 <strong>{{user->username}}</strong>
                                 <span class="pull-right text-muted">
                                   <em>{{user->time}}</em>
                                 </span>
                                 <div>{{User-content}}</div>
                               @endforeach --}}
                             </div>
                          </a>
                       </li>
                      <!--以上未读请求只显示三条-->

                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="Manage requests.html">
                                <strong>Read All Requests</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-requests -->

                    <li><a href="Login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="#"><i class="fa fa-home fa-fw"></i> Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Administrator dashboard.html"> Dashboard</a>
                                </li>
                                <li>
                                    <a href="Manage chats.html">Chat</a>
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
                    <h1 class="page-header">Administrator Profile</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h3>AdministratorID : xxxx</h3>
                        </div>
                        <div class="panel-footer text-center">

                           <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#exampleModalA">Modify
                           </button>

                           <div class="modal fade" id="exampleModalA" tabindex="-1" role="dialog" aria-labelledby="exampleModalALabel">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                                       <h4 class="modal-title" id="exampleModalALabel">Change AdministratorID</h4>
                                    </div>
                                    <div class="modal-body">
                                       <form>
                                          <div class="form-group">
                                             <label for="oldID" class="control-label">Old AdministratorID:</label>
                                             <input type="email" class="form-control" id="oldID" placeholder="Old AdministratorID">
                                          </div>
                                          <div class="form-group">
                                             <label for="NewID" class="control-label">New AdministratorID:</label>
                                             <input type="text" class="form-control" id="NewID" placeholder="New AdministratorID">
                                          </div>
                                       </form>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-primary">Determine</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3>Email Adress : xxx@isep.fr</h3>
                        </div>
                        <div class="panel-footer text-center">

                            <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#exampleModalB">Modify
                            </button>

                            <div class="modal fade" id="exampleModalB" tabindex="-1" role="dialog" aria-labelledby="exampleModalBLabel">
                                <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                                         <h4 class="modal-title" id="exampleModalBLabel">Change Email Adress</h4>
                                      </div>
                                      <div class="modal-body">
                                         <form>
                                            <div class="form-group">
                                               <label for="oldEmail" class="control-label">Old Email Adress:</label>
                                               <input type="email" class="form-control" id="oldEmail" placeholder="Old Email Adress">
                                            </div>
                                            <div class="form-group">
                                               <label for="NewEmail" class="control-label">New Email Adress:</label>
                                               <input type="text" class="form-control" id="NewEmail" placeholder="New Email Adress">
                                            </div>
                                         </form>
                                      </div>
                                      <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                         <button type="button" class="btn btn-primary">Determine</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3>First name : yyy</h3>
                        </div>
                        <div class="panel-footer text-center">

                            <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#exampleModalC">Modify
                            </button>

                            <div class="modal fade" id="exampleModalC" tabindex="-1" role="dialog" aria-labelledby="exampleModalCLabel">
                                <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                                         <h4 class="modal-title" id="exampleModalCLabel">Change Firstname</h4>
                                      </div>
                                      <div class="modal-body">
                                         <form>
                                            <div class="form-group">
                                               <label for="oldFn" class="control-label">Old Firstname:</label>
                                               <input type="oldFn" class="form-control" id="oldEmail" placeholder="Old Firstname">
                                            </div>
                                            <div class="form-group">
                                               <label for="NewFn" class="control-label">New Firstname:</label>
                                               <input type="text" class="form-control" id="NewFn" placeholder="New Firstname">
                                            </div>
                                         </form>
                                      </div>
                                      <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                         <button type="button" class="btn btn-primary">Determine</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                        <h3>Last name : hhhh</h3>
                        </div>
                        <div class="panel-footer text-center">

                            <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#exampleModalD">Modify
                            </button>

                            <div class="modal fade" id="exampleModalD" tabindex="-1" role="dialog" aria-labelledby="exampleModalDLabel">
                                <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                                         <h4 class="modal-title" id="exampleModalDLabel">Change Lastname</h4>
                                      </div>
                                      <div class="modal-body">
                                         <form>
                                            <div class="form-group">
                                               <label for="oldLn" class="control-label">Old Lastname:</label>
                                               <input type="email" class="form-control" id="oldLn" placeholder="Old Lastname">
                                            </div>
                                            <div class="form-group">
                                               <label for="NewLn" class="control-label">New Lastname:</label>
                                               <input type="text" class="form-control" id="NewLn" placeholder="New Lastname">
                                            </div>
                                         </form>
                                      </div>
                                      <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                         <button type="button" class="btn btn-primary">Determine</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
