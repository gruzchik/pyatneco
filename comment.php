<html>
<meta charset="utf-8">
<?php
require_once ("blocks/database.php");

if(isset($_POST['author'])){ $author=$_POST['author']; }
if(isset($_POST['text'])){ $text=$_POST['text']; }
if(isset($_POST['pr'])){ $pr=$_POST['pr']; }
if(isset($_POST['sub_com'])){ $sub_com=$_POST['sub_com']; }
if(isset($_POST['id'])){ $id=$_POST['id']; }


if (isset($sub_com))
{
if(isset($author)) { trim($author); }
else { $author=""; }

if (isset($text)) { trim($text); }
else { $text=""; }

if ( empty($author) or empty($text))
{
exit ("<p>Вы ввели не всю информацию. Пожалуйста, вернитесь назад и заполните все поля. <br> <input name='back' type='button' value='Вернуться назад' onclick='javascript:self.back();'></p>");
}

$author = stripslashes($author);
$text = stripslashes($text);
$author = htmlspecialchars($author);
$text = htmlspecialchars($text);

//echo $author;
//echo $text;
$result = mysql_query("select res from sp_comments_check where id=1",$db);
$myrow = mysql_fetch_array($result);
//echo $myrow['res'];
//echo "<br>".$pr;
if ($pr == $myrow['res'])
{
$date = date("Y-m-d");
$result2 = mysql_query("INSERT INTO sp_comments (post,author,text,date) VALUES ('$id','$author','$text','$date')",$db);
}
else
{
exit ("<p>Вы ввели неверное число при вычислении. Пожалуйста, вернитесь назад и введите еще раз правильный результат. <br> <input name='back' type='button' value='Вернуться назад' onclick='javascript:self.back();'></p>");
}

$address = "pyatneco@gmail.com";
$subject = "Появился новый комментарий на pyatneco.com";

$result3 = mysql_query("select title from sp_articles where id='$id'",$db);
$myrow3 = mysql_fetch_array($result3);

$message3 = "Появился новый комментарий в статье - ".$myrow3['title']."\n
Комментарий добавил(а): ".$author."\n
Текст комментария:".$text."\n";

mail($address,$subject,$message3,"Content-type:text/plain;Charset=utf8\r\n");
echo "<head><meta http-equiv='Refresh' content='0; URL=view_article.php?id=$id'></head>";
exit;
}
else
{
echo "Доступ напрямую запрещен";
}
?>
<html>