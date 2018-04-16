<html>
 <head>
  <title>Мнение студента</title>
  <link rel="stylesheet" href="mysite.css">
 </head>
 <body>
 <DIV STYLE="font-size:25px; font-weight: normal; padding:25px 50px 75px 50px;"> <!--сверху, справа, снизу, слева-->
<p align="center" style="color:##ff0099; font-size:25px">Анкетка "Мнение студента"</p>
<p align="left" style="color: black; font-size:25px; text-indent:100px">
Уважаемый студент Факультета Компьютерных наук Воронежского Государственного Университета!<br/>
Просим Вас ответить на вопросы, касающиеся различных сторон организации учебного и учебно-воспитатального процесса.
Проводимое анкетирование анонимно, его итоговые результаты будут представлены только в виде обобщённых отчётов по факультету или вузу в целом.<br/> Высказанные Вами пожелания и предложения будут использованы для совершенствования системы качества в вузе.<br/><br/>
Пожалуйста, укажите:</p>

<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table><tr><th>№</th><th>Вопрос</tr>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700; font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>
<input type="radio" name="course" value="1"/> 1
<input type="radio" name="course" value="2"/> 2
<input type="radio" name="course" value="3"/> 3
<input type="radio" name="course" value="4"/> 4</br></br>


<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 2";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<input type="radio" name="sex" value="m" /> М
<input type="radio" name="sex" value="f" /> Ж</br></br>

<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 3";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>
<input type="checkbox" name="problem" value="1" /> Неудовлетрительная организация учебного процесса </br>
<input type="checkbox" name="problem" value="2" /> Необходимость зарабатывать на свое обучение</br>
<input type="checkbox" name="problem" value="3" /> Послевузовское трудоустройство по специальности</br></br>


<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 4";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<input type="checkbox" name="opinion" value="1" /> Особых претензий нет </br>
<input type="checkbox" name="opinion" value="2" /> Изучаемые дисциплины не соответствуют получаемой специальности </br>
<input type="checkbox" name="opinion" value="3" /> Значимость некоторых предметов не соответствуют объему выделенных часов </br>
<input type="checkbox" name="opinion" value="4" /> Ощущается перегруженность аудиторными занятиями </br>
<input type="checkbox" name="opinion" value="5" /> Качество преподавания некоторых предметов неудовлетворительно </br></br>

<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 5";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<align="left" style="color: black;">Содержание занятий: 
<input type="radio" name="opinion" value="1" />1 <input type="radio" name="opinion" value="2" />2 <input type="radio" name="opinion" value="3" />3 
<input type="radio" name="opinion" value="4" />4 <input type="radio" name="opinion" value="5" />5
<br align="left" style="color: black;">Обеспечение дисциплин учебниками: 
<input type="radio" name="opinion" value="1" />1 <input type="radio" name="opinion" value="2" />2 <input type="radio" name="opinion" value="3" />3 
<input type="radio" name="opinion" value="4" />4 <input type="radio" name="opinion" value="5" />5 
<br align="left" style="color: black;">Использование элементов наглядности и технических средств обучения: 
<input type="radio" name="opinion" value="1" />1 <input type="radio" name="opinion" value="2" />2 <input type="radio" name="opinion" value="3" />3 
<input type="radio" name="opinion" value="4" />4 <input type="radio" name="opinion" value="5" />5 
<br align="left" style="color: black;">Информированность об изменениях в учебном процессе: 
<input type="radio" name="opinion" value="1" />1 <input type="radio" name="opinion" value="2" />2 <input type="radio" name="opinion" value="3" />3 
<input type="radio" name="opinion" value="4" />4 <input type="radio" name="opinion" value="5" />5 
<br align="left" style="color: black;">Процесс обучения в целом: 
<input type="radio" name="opinion" value="1" />1 <input type="radio" name="opinion" value="2" />2 <input type="radio" name="opinion" value="3" />3 
<input type="radio" name="opinion" value="4" />4 <input type="radio" name="opinion" value="5" />5 </br></br>


<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 6";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<input type="radio" name="sex" value="m" /> да
<input type="radio" name="sex" value="f" /> нет</br></br>

<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 7";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<input type="checkbox" name="problem" value="1" /> еще не определился, профессия не имеет значения </br>
<input type="checkbox" name="problem" value="2" /> по полученной специальности</br>
<input type="checkbox" name="problem" value="3" /> не имеющей отношения к специальности</br>
<input type="checkbox" name="problem" value="2" /> частная предпринимательская деятельность</br>
<input type="checkbox" name="problem" value="2" /> другое</br></br>

<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 8";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<input type="checkbox" name="problem" value="1" /> до 10 000 руб </br>
<input type="checkbox" name="problem" value="2" /> от 10 000 руб до 20 000 руб</br>
<input type="checkbox" name="problem" value="3" /> от 20 000 руб до 35 000 руб</br>
<input type="checkbox" name="problem" value="2" /> более 35 000 руб</br></br>


<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 9";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<input type="radio" name="sex" value="m" /> да
<input type="radio" name="sex" value="f" /> нет</br></br>


<?php
require_once 'config.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link, "UTF8");
// выполняем операции с базой данных

$query ="SELECT * FROM questions where id_question = 10";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table>";
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td style='font-weight:700;font-size:25px'>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>

<input type="radio" name="sex" value="m" /> да
<input type="radio" name="sex" value="f" /> нет</br></br>

     <input name="myActionName" onclick="alert('Результат отправлен!')" type="submit" value="Выполнить" />


</body>
</html>