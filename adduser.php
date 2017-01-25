<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <title>Регистрация</title>
         <script>
        $( function() {
        $( "#datepicker").datepicker({changeYear: true, changeMonth: true, dateFormat: "yy-mm-dd"});
        } );
        </script>
    </head>
    <body>
        <h2>Регистрация</h2>
        <form method="post" action="config/add.php" autocomplete="off">
            <input type="text" name="name" placeholder="Введите имя" required /> <br>
            <input type="text" name="lastname" placeholder="Введите фамилию" required /> <br>
            <input type="text" id="datepicker" name="date" placeholder="Введите дату рождения" required /> <br>
            <input type="tel" name="tel" placeholder="89111658662" pattern="8[0-9]{10}" required /> <br>
            <input type="hidden" name="created" value="<?php echo date("Y-m-d")?>" />
            <input type="submit" name="submit" value="Зарегистрироваться" /> <br>
            <a href="index.php">На главную</a>
        </form>
    </body>
</html>




