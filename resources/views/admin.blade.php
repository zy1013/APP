
@extends('adminLayout')
@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-md fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">A07</div>
                                    <div>Manager</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Chat!</div>
                                </div>
                            </div>
                        </div>
                        <a href="Manage chats.html">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-info-circle fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">8</div>
                                    <div>Client Request!</div>
                                </div>
                            </div>
                        </div>
                        <a href="Manage requests.html">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Customer Online
                        <div class="pull-right">
                              <li class="sidebar-search">
                                  <div class="input-group custom-search-form">
                                      <input type="text" class="form-control" placeholder="Search...">
                                      <span class="input-group-btn">
                                      <button class="btn btn-default" type="button">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </span>
                                  </div>
                              </li>
                        </div>
                        </div>

                        <div id="autore" class="panel-body">
                          <!--调用局部刷新-->
                          <div class="list-group">
                            <a href="chat" class="list-group-item">
                              @foreach($user as $tempuser)
                                <i class="fa fa-user fa-fw"></i>
                                <span class="pull-right text-muted small"><em>{{$tempuser->ufirstname}}
                                    {{$tempuser->ulastname}}</em>
                                </span>
                              @endforeach
                            </a>
                          </div>
                          <!--以上列表将所有登陆用户全部显示-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
@endsection