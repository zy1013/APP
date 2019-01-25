
@extends('mainLayout')
@section('content')

<div class="panel panel-default">
  <h2>My Home</h2>
  <br>
  <!-- Nav tabs -->
  {{-- rooms --}}

  <ul class="nav nav-tabs" role="tablist">
        @if (count($data)==0)
        @else
    @foreach ($data[0][2] as $rooms)
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#{{$rooms[1]}}">{{$rooms[1]}}</a>
        </li>
    @endforeach
    @endif
{{--     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Room1">Living room</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Room2">Room 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Room3">Room 3</a>
    </li> --}}
  </ul>



  <!-- Tab panes -->
 <div class="tab-content">
    @if (count($data)==0)
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Please add home</strong>
    </div>
    @else


    @foreach ($data[0][2] as $rooms)
            <div id="{{$rooms[1]}}" class="container tab-pane col-md-9"><br>
                <h3>{{$rooms[1]}}</h3>
                @foreach( $rooms[2] as $devices )                 
                <div class="col-md-4">
                    @if ($devices[4] == 1)
                        <div class="panel panel-green">
                    @elseif ($devices[4] == 0)
                        <div class="panel panel-red">
                    @else
                        <div class="panel panel-yellow">
                    @endif


                    
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <i class="fa fa-lightbulb-o fa-3x"></i>
                                </div>                                                 
                            <div class="col-xs-6 text-right">

                                    <div>{{$devices[2]}}</div>
                                    @if ($devices[4] == 0)
                                        <span class="fa fa-warning"></span>
                                    @endif
                                </div>
                            </div>                        
                        </div>
                        


                        <a did="{{$devices[0]}}" dstatus="{{$devices[4]}}" dfunction="{{$devices[5]}}" dvalue="{{$devices[6]}}" onclick="switchon(this);">
                            <div class="panel-footer">
                                <span class="pull-left">Turn on/off</span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                                @if($devices[3]==2)
                                <select class="input-xlarge">   
                                          <option>heat</option>
                                          <option>warm</option>
                                          <option>heat</option>
                                          <option>cold</option>
                                </select>
                            @endif
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
              
            @endforeach
            </div> 

    @endforeach
@endif

  </div>
</div>
  <script type="text/javascript">
    function switchon(elem){
        $node = $(elem);
        console.log(elem.getAttribute('dstatus'));
        $.ajax({
            url:"switch/"+elem.getAttribute('did'),
            type:"post",
            dataType:"json",
            data:{
                "did":elem.getAttribute('did'),
                "dstatus":elem.getAttribute('dstatus'),
                "dvalue":elem.getAttribute('dvalue'),
                "dfunction":elem.getAttribute('dfunction'),
            },
            success:function(response){
                console.log(response.message);
                console.log(response.flag);
                console.log(response.status);
                console.log(response.dname);
                elem.setAttribute('dstatus', response.status);

                 switch(response.status)
                 {
                 case 1:
                  $node.parent().prop('class', 'panel panel-green');
                 break;
                 case 2:
                  $node.parent().prop('class', 'panel panel-yellow');
                 break;
                 default:
                 $node.parent().prop('class', 'panel panel-red');
                 }
                
                elem.setAttribute('dstatus', response.status);
                console.log(elem.getAttribute('dstatus'));

            },
            error:function() {
            }
        });
    };

        
  </script>
@endsection