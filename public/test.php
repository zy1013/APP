<?php


$db = array(
    'dsn' => 'mysqli:host=localhost;dbname=test',
    'host' => '127.0.0.1',
    'port' => '3306',
    'dbname' => 'app',
    'username' => 'root',
    'password' => 'zhouyuan',
    'charset' => 'utf8',
);

//mysqli过程化风格

//建立连接:相比mysql_connect可以直接选择dbname、port
//$link = mysqli_connect($db['host'], $db['username'], $db['password'], $db['dbname'], $db['port']);
$link = mysqli_connect($db['host'], $db['username'], $db['password']) or die( 'Could not connect: '  .  mysqli_error ($link));

//选择数据库
mysqli_select_db($link, $db['dbname']) or die ( 'Can\'t use foo : '  .  mysqli_error ($link));

mysqli_set_charset($link, $db['charset']);


//数据库查询

//普通查询，返回资源
$result  = mysqli_query($link, 'select * from user');

//取得结果集中行的数目 
$num_rows  =  mysqli_num_rows ( $result );
echo $num_rows;