<?php
 print_r ($_POST); // вывод данных массивом
    if(isset($_POST["done"])) { // isset значит выполнилось ли действие
        if($_POST["name"] == "")
            echo "Введите имя. <a href='/'>Исправить</a>";
        else
            header("Location:index.php"); // ??? узнать как сделать переадресацию
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
</head>
<body>
    <form name="test" action="" method="post"><br> 
        <!--   action="check.php" добавить если хочу чтобы отдельный файл обрабатывал полученную информацию    -->
        <label>Имя: </label><br>
        <input type="text" name="name" placeholder="Имя"><br>
        <label>Email: </label><br>
        <input type="text" name="email" placeholder="Email"><br>
        <label>Сообщение: </label><br>
        <textarea name="message" cols="40" rows="10"></textarea>
        <br>
        <input type="submit" name="done" value="Готово">
    </form>
<!--остальная часть в footer.php-->
