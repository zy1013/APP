
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


  <h2>hello {{$email}} and your password is {{$password}}</h2>
  <div class="col-md-2 col-lg-offset-3">
    <a class="btn btn-default btn-lg" href="/console" role="button">my console</a>
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

</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</html>