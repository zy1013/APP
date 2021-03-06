<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Homepage</title>
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

  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper" >
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Account.html">MSH</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right" >
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
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" >
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
                                </li>
                                <li>
                                    <a href="Request.html"><i class="fa fa-request fa-fw"></i>Request<span class="fa arrow"></span></a>
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

        <div id="page-wrapper" >

<h2>My Home</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#Room1">Living room</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Room2">Room 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Room3">Room 3</a>
    </li>
  </ul>
  <!-- Tab panes -->
 <div class="tab-content">
    <div id="Room1" class="container tab-pane active"><br>
    	<h3>Room1</h3>
      	<div class="col-lg-2">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <i class="fa fa-lightbulb-o fa-3x"></i>
                                </div>                                                 
                            <div class="col-xs-6 text-right">
                                    <div>light 1</div>
                                </div>
                            </div>                        
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Turn on/off</span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>           
              
     <div class="col-lg-2">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <i class="fa fa-lightbulb-o fa-3x"></i>
                                </div>                                                 
                            <div class="col-xs-6 text-right">
                                    <div>light 1</div>
                                </div>
                            </div>                        
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Turn on/off</span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>      

              <div class="col-lg-2">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <i class="fa fa-lightbulb-o fa-3x"></i>
                                </div>                                                 
                            <div class="col-xs-6 text-right">
                                    <div>light 1</div>
                                </div>
                            </div>                        
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Turn on/off</span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>   
             </div>   
                

    <div id="Room2" class="container tab-pane fade"><br>
          
             <h3>Room 2</h3>  
               <div class="col-lg-2">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <i class="fa fa-lightbulb-o fa-3x"></i>
                                </div>                                                 
                            <div class="col-xs-6 text-right">
                                    <div>light 1</div>
                                </div>
                            </div>                        
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Turn on/off</span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>      

    <div id="Room3" class="container tab-pane fade"><br>
      <h3>Room 3</h3>
            <div class="row">
                <div class="col-lg-2">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                     <i class="fa fa-sun-o fa-3x"></i>
                                </div>                                                
                           <div class="col-xs-3">
                                    <div>A/C1</div>
                                   <div >
                                   	<div class="dataTables_length" id="dataTables-example_length">
                                   			<select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm" style="min-width: 15px;">
                                   			<option value="cool">cool</option>
                                   			<option value="heat">heat</option>
                                   			<option value="dry">dry</option>                                			
                                   		</select>

                                   </div>
                               </div>
                              
                                </div>
                            </div>                        
                        </div>
                        <a href="#">
                        <div class="panel-footer">
                        	<span class="pull-left">Turn on/off</span>
                                <span class="pull-right"><i class="fa  fa-power-off"></i></span>
                                <div class="clearfix"></div>
                        </div>
                    </a>
                    </div>
                </div>

              <div class="col-lg-2">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <i class="fa fa-lightbulb-o fa-3x"></i>
                                </div>                                                 
                            <div class="col-xs-6 text-right">
                                    <div>light 1</div>
                                </div>
                            </div>                        
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Turn on/off</span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>      
         
            </div>

  </div>
</div>

    <!-- /#wrapper -->
    <!-- jQuery -->
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
