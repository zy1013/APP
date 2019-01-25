 @extends('mainLayout')
@section('content')
  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Device</h1>
                </div>
                    
                
                <!-- /.col-lg-12 -->
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
                                        <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Device ID
                                        </th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 71px;">Room Name
                                        </th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Device ID: activate to sort column ascending" style="width: 95px;">Type
                                        </th>
                                         <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Status
                                        </th>
                                         <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Edit
                                        </th>
                                          <th class="text-center sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 69px;">Delete
                                        </th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
            
                @foreach ($data as $device)
                                <tr class="gradeX odd" role="row">
                                        <td class="text-center sorting_1">{{$device->dalias}}</td>
                                        <td class="text-center">
                                            @foreach($rooms as $room)
                                            @if($room->rid == $device->rid)
                                            {{$room->rname}}
                                            @endif
                                            {{-- {{$room->rid}} --}}
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            @if($device->dtype=1)
                                            light
                                            @else 
                                            A/C
                                            @endif
                                        </td>
                                        @if($device->dstatus==0)
                                        <td class="text-center"><a href="#"><i class="fa fa-warning fa-fw"></i></a></td>
                                        @else
                                        <td class="text-center"><a href="#"><i class="fa fa-check fa-fw"></i></a></td>
                                        @endif

                                        <td class="text-center"><a href="#"><i class="fa fa-pencil fa-fw"></i></a></td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a></td>
                                    </tr>
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
<a href="adddevice"><button style="margin-left: 400px;" type="button" class="btn btn-primary">Add New Device</button></a>
@endsection