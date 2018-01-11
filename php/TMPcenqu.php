<meta charset="UTF-8">
<?php

// Начало !!! https://www.youtube.com/playlist?list=PL0lO_mIqDDFXm69bqj5JTCS1XGTNkhTch
// Назначение переменных
$namber = 45;
$buler = true;
// Вывод на экран значепний
echo "Hello World = $namber <br>"; 
echo "Русский Текст = $buler";
echo "<br>";
// Проверка версии php
echo PHP_VERSION;
echo "<br>";
// Назначение и вывод константы
define("PI", 3.14, true); // 3-ий аргумент для того чтобы убрать чувствительность к регистру, 1-ый аргумент будет вызвращать 2-ой аргумент, 
echo PI;
echo "<br>";
echo defined("pi");
echo "<br>";
// Арифметические примеры
$x = 32;
$y = 22.13;
$summ = $x + $y;
$diff = $x - $y;
$mult = $x * $y;
$dil = $x / $y;
$ostatok = $x % $y; // neverno schitaet
echo "Сумма из $x и $y = $summ <br>";
echo "Raznica из $x и $y = $diff <br>";
echo "Umnodzenie из $x и $y = $mult <br>";
echo "Delenie из $x и $y = $dil <br>";
echo "Ostatok из $x и $y = $ostatok <br>";
// Работа с одной и той же переменной
$q = 400;
$q += 10;
$q++;
$q--;
++$q;
echo "$q";
echo "<br>";
// Строковые Операции
$str_1 = "<b>Pervaia Stroka</b> <input type=\"text\" />";
$str_2 = "<i>Вторая Строка</i>";
echo $str_1." ".$str_2." \" \\";
echo ' \' ';
echo "<br>";
// Логические Операции
$x = 12;
$y = 34;
$z = 4.25;
$a = 0;
$bool_1 = $y == $x;
$bool_2 = $x != $y;
$bool_3 = $x < $y;
$bool_4 = $y >= $x;
$bool_5 = !($x == $y); // Логическое не, т.е. меняет фолс на тру и наоборот.
$bool_6 = $x == $y || $z < $y; // Vozvrachaet tru esli odno ili oba variantov verni
$bool_7 = $x == $y && $z < $y; // Vozvrachaet tru esli oba variantov verni
$bool_8 = $x == $y ^ $z < $y; // Vozvrachaet tru esli odno true a drugoe fols inzche fols
$bool_9 = $x === $z; // Проверят равенство и равенство типов переменных
$bool_10 = $x !== $z; // Проверят неравенство и неравенство типов переменных
$bool_11 = !$a; // Проверят евляется ли переменная ложью 
echo $bool_1; // пустая строка значит фолс
echo "<br>";
echo $bool_2;
echo "<br>";
echo $bool_3."<br>".$bool_4."<br>".$bool_5."<br>".$bool_6."<br>".$bool_7."<br>".$bool_8."<br>".$bool_9."<br>".$bool_10."<br>".$bool_11."<br>";
// Operator ekvivalentnosti
$string = "Example";
$num = 0;
$bool_1 = $string == true;
echo "$bool_1 = $string == true;"; // 1 сущестование правда
$bool_2 = $num == "";
echo "<br> $bool_2 = $num == \"\"; <hr>"; // 0 отсутствие лож
$bool_3 = $string === true;
echo "$bool_3 = $string === true"; // вернул пустату false типы не равны
$bool_4 = $num === "";
echo "<br> $bool_4 = $num === \"\"";
echo "<br>";
// Условные операторы
$x = 10;
$y = 5;
if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15) {
    echo 'Все сработало'; // mozhno bez skobok kogda 1-a strochka
} elseif ($x == 15 || $y != 7) {
    $num = 5;
    echo 'Chislo № '.$num.' Vce crabotalo elseif';    
} else {
    echo 'Vce crabotalo else';
}
$x == $y ? $string = "Da" : $string = "Net"; // Korotkay zapic, esli x = y, simvol ? znachit togda, viveditasa Da, simvol : znachit inache, viveitsa Net
echo "<br>".$string;
echo "<br>";
// Условный Оператор Swich () case
$x = 14;
switch ($x) {
    case "Hellow" : echo "Это строковая переменная"; break; // esli break ne budet to budet vipolnini drugie casi do break;
    case 5 : echo "Eto peremennaia ravna 5"; break;
    case 7 : echo "Eto peremennaia ravna 7"; break;
    case 12 : echo "Eto peremennaia ravna 12"; break;
    default : echo "Это переменная нам не известна"; // break не нужно так как это последняя операция
}
echo "<br>";
// Циклы for, while, do while и foreach
echo "<br>Цикл for<br>";
for ($i = 100; $i >= 80; $i -= 2) {
    if ($i % 5 == 0) continue; // Сбрасывает, пропускает итерацию
    if ($i <= 87) break; // Прерывает цикл
    echo "Цикл под номером № $i<br>";
}
echo "Цикл while<br>";
$x = 1;
while ($x <= 10) {
    echo "Итерация под номером $x <br>";
    if ($x == 7) // Скобок нет так как 1-а операция
        for ($y = 0; $y < 5; $y +=3) // Скобок нет так как 1-а операция
            echo "Ещё одна итерация $y <br>"; // Скобок нет так как 1-а операция
    $x++;
}
echo "Цикл wile do<br>";
$z = 10;
do {
    echo "Операция выполнилась только один раз";
} while ($z < 5); // Единственный цикл который оканчивается на ; и выполниться хотя бы 1-н раз
echo "<br>";
echo "Цикл foreach";
$Array8 = array('a' => 0, 'b' => 1, 'c' => 2);
foreach($Array8 as $key => $value) {
	echo "<br>Ключ: $key; Значение: $value";
}
echo "<br>";
// Функции
echo "<br><b>Функции</b><br>";
function printWords ($word, $x, $y) { // Эта функция обьявляет, можно менять название аргументов, но их количество должно быть правильным
    $word =  math ($x, $y);
    echo $word;
}
function math ($first, $second) { // Эта функция складывает
    $summ = $first + $second;
    return $summ; // возвращает значение функции
}
$x = 12;
$y = 35;

printWords ($sum, $x, $y); // Это как функцию выводит, вызов функции, при этом количество аргументов должно быть правильным.
echo "<br>";
function Test1 ($p1, $pl2 = "Гудентак") { // p1 это аргумент (параметр) его значение прописывается при выводе функции можно задать по умлочанию, но аргумент при выводе важнее
	echo "Привет $p1 $pl2";
}
Test1('Хай', 'Хаюшки');
echo "<br>";
// Массивы
echo "<br><b>Массивы</b><br>";
$array = array (12, -3.25, "String", true);
echo $array[1];
$array[1] = "String"; // Смена значения массива
$array[2] = 4.25;
$array[] = "4-ий индекс"; // php сам определяет индексы если они не были указаны
    echo "<br>".$array[1]."<br>".$array[2]."<br>".$array[3]."<br>";
print_r ($array); // Вывод массива
$array[] = "New Element"; // Добавление нового элемента массива
echo "<br>".$array[4]."<br>";
for ($i = 0; $i < count($array); $i++) { // Считает количество элементов в массиве
    echo "Элемент массива с индексом $i = ".$array[$i]."<br>";
}
$list = array ("age" => 12, "name" => "Alex", "schoolBoy" => true); // ассоциативный массив
$list [age] = 10; // Замена элемента массива с ключом
echo $list[name]."<br>"; // Вывод элемента массива с ключом
$summ = 0;
echo getAverage (array ("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));
function getAverage ($array) { // Находим среднее чесло массива getAverage
    foreach ($array as $key => $value) { // foreach берёт ключь и сравнивает с элементом массива и => может обозначать приравнивается
        $summ += $value;
        echo $key."<br>";
        echo $value."<br>";
    }
    return $summ / count ($array); // сумма ключей на количество элементов массива
}
echo "<br>";
$Array9 = array ('Апельсин', 'Лимон', 'Яблоко', "Персик"); // можно "" или ''
unset($Array9[0]); // удаление элемента массива
var_dump($Array9); // var_dump вывод информации о переменной
echo "<br>";
// Многомерные Массивы
echo "<br><b>Многомерные Массивы</b><br>";
$array = array (array(12, 4.46, "string", true), array ("Example"), array (45, "strong")); // Это двумерный массив, если 
echo $array [0][2]; // Вывод двумерного массива
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) { // Перебор двумерного массива
        echo $array[$i][$j]." | ";
    }
    echo "<br>";
}
// Глабальные и Локальные и статические переменные
echo "<br><b>Глабальные и Локальные переменные</b><br>";
$x = 12;
$y = 10;
$z = 5;
function test () {
    $x = 7;
    $GLOBALS["y"] += 7;
    global $z;
    echo "Локальная переменная = $x <br>";
    echo "Глобальная переменная в функции = $y <br>"; // Не понятно почему не отображается???
    echo "Глобальная переменная в функции = $z <br>";
}
test ();
echo "Глобальная переменная x = $x<br>";
function test_2 () {
    static $id; // Она как бы локальная, но сохраняет глобальное значение.
    $id++;
    echo "Статическаря перменная в функции = $id<br>";
}
for ($i = 0; $i < 10; $i++) {
    test_2();
}

// Подключение файлов
echo "<br><b>Подключение файлов</b><br>";
$title = "Подключение форм";
require "header.php";  // http://www.php.su/require
// include "header.php"; // http://www.php.su/include
// include_once "header.php"; // Подключает только 1-н раз
// require_once "header.php"; // Подключает только 1-н раз
require "footer.php";

// Функции для работы с типами переменных
echo "<br><b>Функции для работы с типами переменных</b><br>";
$x = 15;
if (isset ($x)) echo "Переменная существует"; // isset проверяет переменную на сущестование
else echo "Переменная не существует";
echo "<br>";
unset ($x); // удалят переменную, часто используются в массивах $x[0]
if (isset ($x)) echo "Переменная существует";
else echo "Переменная не существует";
echo "<br>";
$x = "15.5";
$y = true;
unset ($z);
$z;
$a = array (12, -3.25, "String", true);
echo "Is x Numeric - ".is_numeric($x)."<br>"; // is_numeric провереят ялветься ли переменная числом даже в строке
echo "Is x Integer - ".is_integer($x)."<br>"; // is_integer провереят является ли переменная только числом
echo "Is x Double - ".is_double($x)."<br>"; // is_double провереят является ли переменная числом c плавоющей точкой
echo "Is x String - ".is_string($x)."<br>"; // is_string провереят является ли переменная строкой
echo "Is y Bool - ".is_bool($y)."<br>"; // is_bool провереят является ли переменная логической
echo "Is y Scalar - ".is_scalar($y)."<br>"; // is_scalar провереят является ли переменная простой - скалярной
echo "Is z Null - ".is_null($z)."<br>"; // is_null провереят является ли переменная без значения
echo "Is a Array - ".is_array($a)."<br>"; // is_array провереят является ли переменная массивом
echo "Type a - ".gettype($x)."<br>"; // gettype возвращает тип переменной
echo "Type z -  ".gettype($z)."<br>"; //

// Математические функции
echo "<br><b>Математические функции</b><br>";
echo M_PI."<br>".M_E."<br>"; // выведение математических переменных
$x = -15;
echo abs ($x); // abs - возвращает модуль числа
$y = 49.505003;
echo "<br>";
echo round ($y, 2)."<br>"; // round - округляет число и задаёт сколько знаков после запятой оставить
echo ceil ($y)."<br>";  // сeil - округляет число к большему
echo floor ($y)."<br>"; // floor - округляет число к меньшуму
echo mt_rand(1, 20)."<br>"; // mt_rand - создаёт, если нет параметров то число от 0 до максимально возможного в php
echo min(12, 23, -2, -5, 19, -4, 0)."<br>"; // min - выводит минимальное значение
$z = 1/2;
echo sin($z)."<br>"; // есть и другие геометрические переменные
echo 1 / tan($z)."<br>"; // будет катангенс
echo atan($z)."<br>"; // артангенс

//Строковые функции
echo "<br><b>Строковые функции</b><br>";
$string = "This is example!";
echo strlen ($string)."<br>"; // strlen возвращает количество символов строки с пробелами
echo strpos ($string, "is", 4)."<br>"; // strpos находит номер начала совпадения, 3-ий аргумент с какого символа начинать поиск.
if (strpos ($string, "T") == false) echo "T не найдено";
else echo "T найдено"; // так как T нулевой
echo "<br>".substr($string, 3, -2)."<br>"; // substr обрезает строку, 2-ой аргумент с 3-его, до 3-его аргумента -2 символа от конца.
echo str_replace("is", "abc", $string)."<br>";
echo str_replace(array("is", "ple"), array("abc", "123"), $string)."<br>"; // str_replace заменяет 1-ый аргумент 2-ым в 3-ем аргементе строке.
$str = "<b>ХАХА, жирный шрифт</b>";
echo htmlspecialchars ($str); // htmlspecialchars преобразует html теги в абракадабру
echo "<br>".strtolower($string); // strtolower преобразует текс в нижний регистр
echo "<br>".strtoupper($string); // strtolower преобразует текс в верхний регистр
echo "<br>".md5("123"); // md5 преобразует текс в защифрованный текст, нужен для защиты паролей пользователей
echo "<br>".trim("     string   sd   sd     ")."<br>"; // trim удалят пробелы до и после текста в тексте оставляет тока 1-н пробел

//Функции для работы с массивами
echo "<br><b>Строковые функции</b><br>";
$array = array (12, 17, 5, 23, 56); // неасыативный массив
echo count($array)."<br>"; // count считает количество элемента массива
sort ($array); // sort сортирует элементы массива
print_r ($array);
echo "<br>";
rsort ($array); // rsort сортирует элементы массива в обратном порядке
print_r ($array);
echo "<br>";
asort ($array); // asort сортирует элементы массива с учётом ключей
print_r ($array);
echo "<br>";
$alist = array("a" => 23, "b" => 45, "c" => 32);
arsort ($alist); // arsort сортирует элементы массива в обратном порядке с учётом ключей
print_r ($alist);
echo "<br>";
ksort ($alist); // ksort сортирует ключи массива
print_r ($alist);
echo "<br>";
krsort ($alist); // krsort сортирует ключи массива в обратном порядке
print_r ($alist);
echo "<br>";
shuffle ($alist); // shuffle сортирует ключи массива в рандомном порядке
print_r ($alist);
echo "<br>";
echo in_array(12, $array)."<br>"; // in_array проверяет есть ли 1-ой аргумент во 2-ром аргементе массива
$arr_1 = array (10, 2);
$arr_2 = array (4, 5, 7);
$array_3 = array_merge($arr_1, $arr_2); // array_merge объединяет 1-ый и 2-ой аргумент являющимися массивами
print_r ($array_3);
echo "<br>";
$arrDone = array (1, 2, 3, 4, 5, 6, 7);
print_r ($arrDone);
echo "<br>";
$arrDone = array_slice($arrDone, 1, -2); // array_slice 1-ый аргумент какой массив обрезать, 2-ой с какого элемента, по какой или с какого конца.
print_r($arrDone);
echo "<br>";

//Функции даты
echo "<br><b>Функции даты</b><br>";
$start = microtime(true); // если поставить вверх подсчитает полное время выполнение кода до echo "Время работы скрипта:".(microtime(true)-$start)."секунд";
echo time()."<br>"; // time возвращает время с 1 января 1970 года
echo microtime()."<br>"; // time возвращает время с 1 января 1970 года, с васьмушками
echo $start."<br>";
echo "Время работы скрипта:".(microtime(true)-$start)."секунд"."<br>";
echo date ("Y-m-d H:i:s")."<br>";
echo date ("Y-m-d H:i:s", 992349924)."<br>"; // 1-ый аргумент возвращает время, 2-ой c учётом секунд пройденных с 1 января 1970 года
$time = mktime(12, 35, 23, 12, 7, 2007); // mktime возвращает секунды прошедшие с 1 января 1970г, от аргемента.
echo date ("Y-m-d H:i:s", $time)."<br>";
$array = getdate($time); // getdate возвращает время в виде массива также количество недель, день недели, месяц, и прошедших секуд с 1 января 1970 года
print_r($array);
echo "<br>".checkdate(2, 29, 2012)."<br>"; // checkdate проверяет существует ли дата

//Работа с файлами
echo "<br><b>Работа с файлами</b><br>";
//$file = fopen("a.txt", "a+t"); // http://php.net/manual/ru/function.fopen.php fopen открывает файл и проводит с ним операции 1-ый аргумент объявляет название и формат файла, 2-ой аргумент может быть r (файл для чтения) r+ (файл для чтения и записи, будет перекривать старые символы в файле) w (только для записи и обрезает файл до 0левой длены, если файла не существует он его создаёт) w+ (тоже саоме что w) a (открывает файл только для записи, в конец, ничего не перекрывает) а+ (тоже самое что и а, но и для чтения) a+t (показывает парсеру что будет табуляция) a+b (не позволяет табуляцию)
//fwrite($file, "Example\nText\nNext"); // fwrite записывает 1-ый аргумент в какой файл, 2-ой что именно
//fclose($file); // fclose зкарывает файл
$file = fopen("a.txt", "r+");
while (!feof($file)) { // feof проверяет, достигнут ли конец файла, ! = не
    echo fread($file, 1)."<br>"; // fread читайт 1-ый аргемент какой файл, 2-ый аргумент по сколько символов считывать
}
fseek($file, 0); // fseek — устанавливает смещение в файловом указателе 1-ый аргумент в каком файле, 2-ой аргумент перед каким символа, третий аргумент whence http://php.net/manual/ru/function.fseek.php
echo fread($file, 1)."<br>"; // fread не выводин новые символы так как курсвор в файле уже в конце если fseek($file, 0); не прописан перед этой строчкой
fclose($file);
echo "_____________________<br>";
file_put_contents("c.txt", "Test test Test"); // file_put_contents создаёт файл какой 1-ый аргумент, 2-ой аргумент что в ней будет, каждый раз перезаписывает
echo file_get_contents("c.txt")."<br>"; // file_get_contents возвращает данные из файла
echo file_exists("a.txt")."<br>"; // file_exists проверят существует ли файл
echo filesize("c.txt")."<br>"; // filesize проверяет размер файла
rename("c.txt", "b.txt"); // rename 1-ый аргумент выбирает файл, 2-ой задёт новео имя
unlink("b.txt"); // unlink удаляет файл

//Права доступа
echo "<br><b>Права доступа</b><br>";
echo __FILE__."<br>"; // __FILE__ выводет путь к php файлу
echo fileperms(__FILE__)."<br>"; // fileperms возвращает информацию о правах на файл
chmod(__FILE__, 0777); // chmod задаёт права доступа нужно начинать с 0

//phpinfo() и $_SERVER
echo "<br><b>phpinfo() и $_SERVER</b><br>";
echo $_SERVER["REMOTE_ADDR"]."<br>"; // _SERVER глобальный массив бля годаря которой можно сделать статистику по сайту
//phpinfo(); // phpinfo выдаёт информацию о пчп функциональности

// Дальщи информация некоторая будет в отдельных файлах папки DlyaUchoby2
//Создание редиректа
echo "<br><b>Создание редиректа</b><br>";
echo "<a href=http://dlyauchoby/php/redirect.php>redirect</a>"."<br>";

//Отправка почты на email
echo "<br><b>Отправка почты на email</b><br>";
$message = "Это самое простое сообщение в мире!";
$to = "aovusu@yandex.ru";
$from = "aovusu@yandex.ru";
$subject = "Тема сообщения";
$subject = "=?utf-8?B?".base64_encode($subject)."?="; // для mail.ru
$headers = "From: $from\r\nReplay-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n"; // для того чтобы мейл агенты правильно разбирали письмо
mail ($to, $subject, $message, $headers);

//Работа с куки $_COOKIE
echo "<br><b>Работа с куки $_COOKIE</b><br>";
echo "<a href=http://dlyauchoby/php/cookie.php>cookie</a>"."<br>";
echo "<a href=http://dlyauchoby/php/cookie2.php>cookie2</a>"."<br>";

//Работа с сессиями $_SESSION
echo "<br><b>Работа с сессиями $_SESSION</b><br>";
echo "<a href=http://dlyauchoby/php/sesia.php>sesia</a>"."<br>";

//Работа с сессиями $_SESSION Видеоуроки PHP https://www.youtube.com/watch?v=tGrUKglMwkQ&list=PLB8wmVoWIIx6r2fvV8Tirv_dvyfAM9VuK&index=5
echo "<br><b>Работа с сессиями Видеоуроки PHP</b><br>";
echo "<a href=http://php/page2.php>page2</a>"."<br>";
session_start();

$_SESSION['Язык'] = 'PHP'; // $_SESSION это супер глобальный массив
$_SESSION['Я'] = 'Человек';

// unset($_SESSION['Язык']);

echo $_SESSION['Язык'];
echo "<br>";

//Форма обратной связи
echo "<br><b>Форма обратной связи</b><br>";
// <? равно <?php echo
echo "<a href=http://dlyauchoby/php/forma.php>forma</a>"."<br>";

//Подключение к БД и Добавление записей в БД с помощью кода
echo "<br><b>Подключение к БД и Добавление записей в БД с помощью кода</b><br>";
$mysqli = new mysqli ("127.0.0.1", "root", "", "myBase"); //127.0.0.1 localhost
$mysqli->query("SET NAMES 'utf8'");
// Тут пишем код между query и close
$success = $mysqli->query ("INSERT INTO 'users' ('login', 'password', 'reg_date') VALUES ('123', '".md5("123")."', '".time ()."')");
echo $success;
$mysqli->close ();





//PHP Для начинающего. https://www.youtube.com/playlist?list=PLB8wmVoWIIx6r2fvV8Tirv_dvyfAM9VuK
echo "<br><b>PHP Для начинающего. https://www.youtube.com/playlist?list=PLB8wmVoWIIx6r2fvV8Tirv_dvyfAM9VuK</b><br>";
// Математические операторы
echo "<br><b>Математические операторы</b><br>";
// Типы переменных
$boolean = true; // логический
$integer = 100; // целочисленный
$float = 0.001; // с плавоющей точкой
$string = 'Текст'; // текстовые
$string.= ' 123'; // .= прибавляем текст
echo $string;
// Можно выводить 3-мя способами текст в ' ' " " и <<<END END;
?>
