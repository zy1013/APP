<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>HTML Page for exam</title>
</head>

<body>

<?php
	//real mysql configuration
	$db = array(
    'dsn' => 'mysqli:host=localhost;dbname=test',
    'host' => '127.0.0.1',
    'port' => '3306',
    'dbname' => 'exam',
    'username' => 'root',
    'password' => 'zhouyuan',
    'charset' => 'utf8',
	);
	//test the connection.
	$link = mysqli_connect($db['host'], $db['username'], $db['password']) or die( 'Could not connect: '  .  mysqli_error ($link));
	//select the database.
	mysqli_select_db($link, $db['dbname']) or die ( 'Can\'t use foo : '  .  mysqli_error ($link));
	mysqli_set_charset($link, $db['charset']);
	//execute the SQL query.
	$sqlstatement="select * from airport";
	$result  = mysqli_query($link, $sqlstatement);
	$result1 = $result;
	//build wedget prototype.
	$select="";
	//fill the content.
	while($row = $result->fetch_object()){
    // echo "code: ".$row->code." name:".$row->name."country:".$row->country."<br>";
    	$select.="<option value=".$row->name.">".$row->name."</option>";
    }

    echo "Depart from    : <br>";
	echo "<select id = 's1'>";
	echo $select;
    echo "</select><br>";



    echo "Arrive in     : <br>";
    echo "<select id = 's2' onchange='check(this)'>";//use onchange to prevent duplicate selection.
    echo $select;
    echo "</select><br>";



 ?>
 <br>
<a href="index.html">Back</a>
</body>
<script type="text/javascript">
	function check(obj){
	var select1=obj.value;
	var select2=document.getElementById("s1").value;
	if(select1==select2)
	{
		alert("you cannot choose same place!");
	}
}
</script>
</html>