@extends('mainLayout')
@section('content')
<div class="form-group">
               <h1>Home Name</h1>
               <br>
               <br>
                    <input  id="homename" class="form-control"  placeholder="no more than 10 letters">
                         <p class="help-block"></p>
            </div>
            <br>
            <br>
           <button type="button" class="btn btn-default" onclick="send();">Add New Home</button>
        </div>
                <script type="text/javascript">
          function send() {
            $.ajax({
              url: 'inserthome',
              type: 'post',
              dataType: 'text',
              data: {
              'homename':$("#homename").val()
            }
            });
            console.log("added roomname");
            alert("home has been added!");
          }
        </script>
@endsection