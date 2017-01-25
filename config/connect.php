<?php
/*
 * подключение к б/д
 */
$localhost = "localhost";
$db = "user2";
$user = "admin";
$password = "admin";

$link = mysqli_connect($localhost, $user, $password) or trigger_error(mysql_error(),E_USER_ERROR);

//следующие строки необходимы для того чтобы Mysql работал с кирилицей
mysqli_query($link, "SET NAMES utf8;") or die(mysql_error());
mysqli_query($link, "SET CHARACTER SET utf8;") or die(myaql_error());
mysqli_select_db($link, $db);
        
?>