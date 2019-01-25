@extends('mainLayout')
@section('content')
<div class="form-group">
                <br>123
               <h1>Home Name</h1>
               <br>
               <br>
                    <input id="roomname" class="form-control"  placeholder="no more than 10 letters">
                         <p class="help-block"></p>
            </div>
            <br>
            <br>
           <button type="button" class="btn btn-default" onclick="send()">Add New Home</button>
        </div>
        <script type="text/javascript">
          function send () {
            $$.ajax({
              url: 'addroom',
              type: 'post',
              dataType: 'text',
              data: {'uid': {{$uid}},
              'roomname':$("#roomname").val()
            });
            console.log("added roomname");
            alert("room has been added!");
          }
        </script>
@endsection