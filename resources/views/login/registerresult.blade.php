<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<html>
<head>
	<title>Register Result</title>
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>
	<h2> {{ $message }} </h4>
	
</body>
<script type="text/javascript">
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
</script>

</html>