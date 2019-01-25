
@extends('mainLayout')
@section('content')
<div class="form-group">

                                           <div class="form-group">
                                            <label>Email Adress:</label>
                                            <input class="form-control" placeholder="{{$user->uemail}}">
                                            
                                        </div>

                                       <div class="form-group">
                                            <label>First Name:</label>
                                            <input id="firstname" class="form-control" placeholder="{{$user->ufirstname}}">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input id="lastname" class="form-control" placeholder="{{$user->ulastname}}">
                                            
                                        </div>
                                    </div>
    <button type="button" class="btn btn-default" style="margin-left: 100px;" onclick="send()">confirm</button>        
</div>
<script type="text/javascript">
    function send () {
        // body... 

                $.ajax({
            url:"updateaccount",
            type:"post",
            dataType:"json",
            data:{
                "uid":{{$uid}},
                "ufirstname":$("#firstname").val(),
                "ulastname":$("#lastname").val()
            },
            success:function(response){

                alert("update success!");
            },
            error:function() {
            }
        });
    }
</script>
@endsection