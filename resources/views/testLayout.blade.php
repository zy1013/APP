
@extends('mainLayout')
@section('content')
  <h2>My Home</h2>
  <p class="fa fa-warning"> fa-warning </p>
  <br>
  <!-- Nav tabs -->
  {{-- rooms --}}
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
@endsection