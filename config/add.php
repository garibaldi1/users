<?php
require_once ('connect.php');
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$tel = $_POST['tel'];
$created = $_POST['created'];
print_r($tel);


//Еще проверка на то что поля заполнены
if(($name)&&($lastname)&&($date)&&($tel)&&($created)){
    //Формирование запроса
    $query = "INSERT INTO `user2`.`users` (`id`,`name`,`lastname`,`date`,`tel`,`created`) VALUES (NULL, '$name', '$lastname', '$date', '$tel', '$created');";
    $result = mysqli_query($link, $query);
    echo '<h1 style="text-align: center">Пользователь зарегистрирован</h1>';
    header("refresh:1;url=../index.php");
}else {
    echo '<h1 style="text-align: center">Ошибка ввода данных</h1>';
    header("refresh:1;url=../adduser.php");
}

?>