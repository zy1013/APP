<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<html>
<head>
  <title>Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/msh.css') }}">
  <script type="text/javascript" src="{{ URL::asset('js/msh.js') }}"></script>

</head>

<body>
<div id="headnav" class="row" style="height: 164px;">
  <div class="col-md-4">
    <img src="img/logo.png" style="height: 50%;width: 50%">
  </div>



  <div class="col-md-2 col-lg-offset-3">
    <a class="btn btn-default btn-lg" href="#" role="button" data-toggle="modal" data-target="#myModal">Login</a>
  </div>
  <div class="col-md-2">
    <a class="btn btn-default btn-lg" href="/register" role="button">Register</a>
  </div>
</div>

<div class="row">
  <ul class="nav nav-tabs">
  <li class="active" onclick="mainNewsClicked(this)"><a href="#">News</a></li>
  <li onclick="mainInstructionClicked(this)"><a href="#">Instruction</a></li>
  </ul>
</div>
<div>
    <div id="news" class="row" >
    <h2>New features released!<small>this weekend</small></h2>
    <h4>Feature1: blablabla;</h4>
    <h4>Feature2: blablabla;</h4>
  </div>

  <div id="instruction" class="row" style="display: none;">
    <h2>Here is how to use this system<small>for unregistered only</small></h2>
    <h4>You have to register;</h4>
    <h4>Then you'll know;</h4>
  </div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Login box
        </h4>
      </div>
      <div class="modal-body">
        <div class="center-block">
  <form class="form-horizontal" action="/login">
    <fieldset class="center-block">
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Your email</label>
          <div class="controls">
            <input name="email" type="text" placeholder="" class="input-xlarge" onchange="check(this)">
            <p id="message" class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Your password</label>
          <div class="controls">
            <input name="password" type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group" style="display: inline;">
          


        <input type="checkbox" value="Keep login">
        Keep login



        </div>
        <div class="control-group">
          <label class="control-label"></label>

          <!-- Button -->
          <div class="controls">
            <button class="btn btn-default">Login</button>
          </div>
        </div>

    </fieldset>
  </form>
</div>
      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
        </button>
        <button type="button" class="btn btn-primary">
          提交更改
        </button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->



</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        function check(elem) {
          var email2check = elem.value;
          $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              url:"userinfo",
              type:"post",
              dataType:"text",
              data:{email:email2check},
              success:function(data){
                   try {
                          $("#message").value = data;
                          console.log(data)
                      } catch (e) {
                          return false;
                      }
                      
              }
          });
            };

    </script>
</html>