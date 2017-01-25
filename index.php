<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <title>Авторизация</title>
    </head>
    <body>
        <h2>Авторизуйтесь пожалуйста</h2>
        <form method="post" action="config/enter.php" autocomplete="off">
            <input type="text" name="login" placeholder="Введите логин" required /> <br>
            <input type="password" name="pass" placeholder="Введите пароль" required /> <br>
            <input type="submit" name="submit" value="Вход" />
            <a href="adduser.php">Регистрация</a>
        </form>        
    </body>
</html>
