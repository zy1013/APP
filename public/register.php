<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>HTML Page for exam</title>
</head>

<body>

<?php

	$login = $_POST['login'];
	$password = $_POST['password'];
	$passwordConfirm = $_POST['passwordConfirm'];
	$flag=0;//To confirm the user's data is safe to store. Once successful check add by 1.
	if(strlen($login)==0||strlen($password)==0||strlen($passwordConfirm
	)==0 )
	echo "You have to finish the form.";
	else
	{
		if($password!=$passwordConfirm)
		{
			echo "Your have to repeat your password identically.";
		}
		elseif (strlen($login)<8) {
			echo "The login is not long enough! At least 10 characters.";
		}
		else
		{
			//Save state.
			$flag +=1;
		}
	}
	echo "</br>";

	//local real mysql configuration. 
	$db = array(
    'dsn' => 'mysqli:host=localhost;dbname=test',
    'host' => '127.0.0.1',
    'port' => '3306',
    'dbname' => 'exam',
    'username' => 'root',
    'password' => 'zhouyuan',
    'charset' => 'utf8',
	);
	//test the connection. Successful.
	$link = mysqli_connect($db['host'], $db['username'], $db['password']) or die( 'Could not connect: '  .  mysqli_error ($link));
	//select the database.
	mysqli_select_db($link, $db['dbname']);
	mysqli_set_charset($link, $db['charset']);
	//execute the SQL query.
	$sqlstatement="select * from user where (login='".$login."')";
	$result  = mysqli_query($link, $sqlstatement);
	//Check if this name is already registered.
	$num_rows  =  mysqli_num_rows ($result);
	$message;
	if($num_rows>0)
		$message = 'Sorry! This uid has already been used.';
	else{
		$message = 'Congratulations! This uid has not been used.';
		$flag+=1;//if this login is usable flag add by 1.
	}
	//display the result.
	echo $message;
	echo "</br>";
	//execute the insert SQL Query.
	echo "Your name is ".$login.", and your password is ".$password;
	echo "</br>";
	if($flag ==2)
	{ // insert the data and encrypt the password.
		$sqlstatement = "insert into user (login,password) values('".$login."',password('".$password."'))";
		$result  = mysqli_query($link, $sqlstatement);
		echo "save data succeeded!";
	}
	else
	{
		echo "Please check your input!";
	}
 ?>
 <br>
<a href="index.html">Back</a>
</body>
</html>