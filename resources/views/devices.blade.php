@section('normallight')
    <a href="#">
        <div class="panel-footer">
            <span class="pull-left">Turn on/off</span>
            <span class="pull-right"><i class="fa fa-power-off"></i></span>
            <div class="clearfix"></div>
        </div>
    </a>
@endsection


@section('ac')
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
@endsection