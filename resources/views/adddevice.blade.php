@extends('mainLayout')
@section('content')
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Device</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 <div class="panel-body">
                            <ul class="chat">
                              <li>
                                  <div class="chat-body clearfix">      
                                         <label >Device Name
                                          <input id="devicename" class="form-control" placeholder="no more than 20 words" style="width: 400px;" >
                                         </label>
                                  </div>
                              </li>

                              <li>
                                  <div class="chat-body clearfix">
                                    <div class="form-group">
                                            <label>Type</label>
                                            <select id="type" class="form-control">
                                                <option value="1">light</option>
                                                <option value="2">air-condition</option>                                             
                                            </select>
                                        </div>
                                     </div>
                              </li>

                               <li>
                                  <div class="chat-body clearfix">
                                    <div class="form-group">
                                            <label>Room</label>
                                            <select id="selectroom" class="form-control">                                             
                                                @foreach($data as $room)
                                                <option value="{{$room->rid}}"> {{$room->rname}}</option>        
                                                @endforeach                                      
                                            </select>
                                        </div>
                                     </div>
                              </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">    
                                    <button type="button" onclick="send()" class="btn btn-primary" ">Confirm</button>
                                    <button type="button" class="btn btn-primary" style="margin-left: 100px;">Cancel</button>
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
          function send () {
            var name = $("#devicename").val();
            var type = $("#type").val();
            var rid = $("#selectroom").val();
                   $.ajax({
            url:"insertdevice",
            type:"post",
            dataType:"json",
            data:{
                'uid': {{$uid}},
                'dname':name,
                'dtype':type,
                'rid':rid
            },
            success:function(response){
            alert("insert success!");
                
            },
            error:function() {
            }
        });
               };
        </script>
@endsection