@extends('mainLayout')
@section('content')
            <div class="row">
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-user-md fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge">Alice</div>
                                      <div>administrator</div>
                                  </div>
                              </div>
                          </div>
                          <div class="panel-footer">
                          </div>
                      </div>
                  </div>

                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{session('uname')}}</div>
                                    <div>user</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-cut fa-fw"></i> Clear Record
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                              @foreach($data as $message)
                              @if($message->mreceiver==$uid)
                                <li>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">{{$message->msender}}</strong>
                                          <small class="pull-right text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> {{$message->msenddate}}
                                          </small>
                                      </div>
                                      <p class="alert alert-info">
                                          {{$message->mcontent}}
                                      </p>
                                  </div>
                                </li>
                                @else
                                                              <li>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <small class=" text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> {{$message->msenddate}}</small>
                                          <strong class="pull-right primary-font"></strong>
                                      </div>
                                      <p class="alert alert-success">
                                          {{$message->mcontent}}
                                      </p>
                                  </div>
                              </li>

                              @endif
                              @endforeach
                             
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat" onclick="send()">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <script type="text/javascript">
              function send (argument) {
                var input = $('#btn-input').val();
                console.log(input);
                        $.ajax({
            url:"addmessage",
            type:"post",
            dataType:"text",
            data:{
                "content":input,
                "uid":{{$uid}}
            },
            success:function(response){
               console.log(response);
            },
            error:function() {
            }
        });




              }
            </script>
            @endsection