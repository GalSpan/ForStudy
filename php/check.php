<meta charset="UTF-8">
<?php
    // print_r ($_POST); // вывод данных массивом
    if($_POST["name"] == "")
        echo "Введите имя. <a href='/'>Исправить</a>";
    else
        header("Location:index.php");   
?>