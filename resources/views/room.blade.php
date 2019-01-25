@extends('mainLayout')
@section('content')
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
                                        <th class="text-center sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Device ID: activate to sort column ascending" style="width: 95px;">Delete
                                        </th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
          
                                

                                    @foreach($data as $room)
                                        <tr class="gradeX odd" role="row">
                                        <td class="text-center sorting_1">{{$room->rname}}<a href="#"><i class="fa fa-pencil fa-fw"></i></a></td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a></td></tr>
                                     @endforeach
                                   </tbody>
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
                                        <input id="roomname" class="form-control" placeholder="no more than 20 letters and less than 8 letters, special symbol is not allowed." style="width: 600px;" >
                                    </label>
                              </div>
                              <button onclick="send()" type="button" class="btn btn-outline btn-warning" style="margin-left: 400px;width: 100px; height: 40px;">Create
                              </button>
                          </div>
                      </div>
                  </div>
          </div>
        <script type="text/javascript">
          function send () {
            var name = $("#roomname").val();
                   $.ajax({
            url:"addroom",
            type:"post",
            dataType:"json",
            data:{
                'uid': {{$uid}},
              'roomname':name
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