<?php
session_start(); // session_start записываеться в верхушке кода, и говорит о том что сесия будет, сесия существует 15 минут
$num = (isset ($_SESSION["num"])) ? $_SESSION["num"] : 0; // если сесия существует то записываем сесион нам если нет то 0
$num++;
$_SESSION["num"] = $num;
echo "Пользователь обновил страничку $num раз";
session_destroy(); // session_destroy удалят последубщую сессию
?>
<meta charset="UTF-8">