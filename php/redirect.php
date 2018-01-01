<?php
//Создание редиректа
header ("Location: http://google.com"); // header — Отправка HTTP заголовка
//header должна использоваться до того как на экран что либо было выведенно. То есть если у тебя идет <html> привет всем!! <?php header("Location:http://google.com") ? </html> то такое работать не будет. Запиши сначало php код а потом пиши html
exit; // прекращает последующий код
echo "<br><b>Создание редиректа</b><br>";
?>
<meta charset="UTF-8">