<?php
//Работа с куки $_COOKIE
setcookie("num", 10, time () + 7); // создают куки 1-ый аргумент её имя, 2-ой её параметр, 3-ий время исчезновения куки
echo $_COOKIE["num"];
if (isset($_COOKIE["num"]))
echo "Кука установлена";
else
echo "Кука не установлена";
?>
<meta charset="UTF-8">