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
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
    }
    echo "</table>";
// закрываем подключение
mysqli_close($link);
?>
<input type="radio" name="course" value="ASP.NET" />ASP.NET <br>
<input type="radio" name="course" value="ASP.NET" />ASP.NET <br>
 
 </body>
</html>