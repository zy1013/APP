<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<html>
<head>
	<title>Register Page</title>
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>

{{ session('timestamp') }}



    @foreach ($users as $user)
    <p>This is user {{ $user->upassword }}</p>
<tr>
     <th class="text-center">你的名{{ $user->ufirstname }} </th>
  <th class="text-center">你的姓{{ $user->ulastname }} </th>
<th class="text-center">{{$user->uid}}</th>

</tr>
    @endforeach






	<h4 >Now we have {{ $number }} users.</h4>
	<h4 id="message"></h4>
	<form action="usercreate" method="post" enctype="multipart/form-data">
		<br/>
	<input id="_token" type="hidden" name="_token" value="{{ csrf_token()}}"/>
	<h3>Your e-mail:</h3>
	<input type="text" name="email" onchange="check(this)">
		<br/>
	<h3>Your firstname:</h3>
    <input type="text" name="firstname">
    	<br/>
	<h3>Your lastname:</h3>
    <input type="text" name="lastname">
    	<br/>
	<h3>Your password:</h3>
    <input type="text" name="password">
    	<br/>
	<h3>Are you sure?</h3>
    <input type="submit" value="confirm">
</form>

	
</body>
<script type="text/javascript">
	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
	function check(elem) {
		var email2check = elem.value;
		$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url:"userinfo",
        type:"post",
        dataType:"text",
        {data:email:email2check},
        success:function(data){
             try {
                    $("#message").innerHTML = data;
                } catch (e) {
                    return false;
                }
                
        }
    });
			}







</script>
</html>