<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<html>
<head>
	<title>templatePage</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/msh.css') }}">
  <script type="text/javascript" src="{{ URL::asset('js/msh.js') }}"></script>
</head>

<body>


	
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