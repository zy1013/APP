<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>model - @yield('title')</title>
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
        @section('sidebar')
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
                                    <a href="Modify Password.html">Request</a>
                                </li>
{{--                                 <li>
                                    <a href="Request.html"><i class="fa fa-request fa-fw"></i>Request<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                         <li>
                                    <a href="Request.html">My Request</a>
                                    </li> 
                                     <li>
                                    <a href="New Request.html">New Request</a>
                                    </li> 
                                   
                                </ul>
                                </li> --}}
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>                           
                                    <a href="HomePage.html">(My Home name)</a>
                                    </li> 
                                <li>
                                    <a href="Room.html">Room</a>
                                </li>        
                                <li>
                                    <a href="log.html">Log</a>
                                </li>                        
                                <li>
                                    <a href="Device.html">Device</a>
                                </li>                                                         
                            </ul>
                        </li>
                        <li>
                             <a href="Homelist.html"><i class="fa fa-home fa-fw"></i>Homelist</a>
                         </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <span class="fa fa-warning"></span>
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
<script type="text/javascript">
 var req = new XMLHttpRequest();
    function queryInfos() {
        //设置传送方式，对应的servlet或action路径，是否异步处理
        req.open("POST", "/info/queryinfos", true);
        //如果设置数据传送方式为post，则必须设置请求头信息
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        //设置回调函数，当前操作完成后进行的操作
        req.onreadystatechange = callback;

        //Ajax请求发送的数据不是表单，需要拼接数据，格式和get方式一样
        var reqData = "Type=" + document.getElementById("Type").value;
        reqData += "&Time=" + document.getElementById("Time").value;
        reqData += "&Status=" + document.getElementById("Status").value;
        reqData += "&Delete=" + document.getElementById("Delete").value;

        //发送请求
        req.send(reqData);
    }

    //回调函数
    function callback() {
        //如果Ajax和request的状态都正确则进行操作
        if (req.readyState == 4 && req.status == 200) {
            //获取后台返回的数据
            var response = req.responseText;
            //进行对象化处理
            //加上圆括号的目的是迫使eval函数在处理JavaScript代码的时候强制将括号内的表达式转化为对象，而不是作为语句来执行
            //由于json是以"{}"的方式来开始以及结束的，在JS中，它会被当成一个语句块来处理，所以必须强制性的将它转换成一种表达式。
            var jsonobject = eval("(" + response + ")");
            //获取数据的长度
            var datasize = jsonobject.size;
            //获取json中的数据数据
            var datas = jsonobject.datas;

            //删除原有的table数据
            var table = document.getElementById("table");
            var infos = document.getElementById("tbody");
            table.removeChild(infos);
            //此处必须创建tbody，否则无法加入到table中
            infos = document.createElement("tbody");

            //生成新的table数据元素并添加到table中
            for (var i = 0; i < datas.length; i++) {
                var tr = document.createElement("tr");
                var td1 = document.createElement("td");
                var td2 = document.createElement("td");
                var td3 = document.createElement("td");
                var td4 = document.createElement("td");

                td1.innerHTML = datas[i].Type;
                td2.innerHTML = datas[i].Time;
                td3.innerHTML = datas[i].Status;
                td4.innerHTML = datas[i].Delete;

                tr.appendChild(td1);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);
                infos.appendChild(tr);
            }
            table.appendChild(infos);
        }
    }

</script>
 @show

        <div class="container">
            @yield('content')
        </div>
</body>
</html>