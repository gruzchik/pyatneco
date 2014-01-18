<?php

if(isset($_POST['name'])){ $name=$_POST['name']; }
if(isset($_POST['email'])){ $email=$_POST['email']; }
if(isset($_POST['subject'])){ $subject=$_POST['subject']; }
if(isset($_POST['submit'])){ $submit=$_POST['submit']; }
if(isset($_POST['cmessage'])){ $cmessage=$_POST['cmessage']; }

if (isset($submit))
{

$address = "pyatneco@gmail.com";
$subject = "Вам пришло письмо с контактной формы pyatneco.com";

$message3 = "Тема сообщения - ".$subject."\n
Текст сообщения:".$cmessage."\n";

mail($address,$subject,$message3,"Content-type:text/plain;Charset=utf8\r\n");
echo "<head><meta http-equiv='Refresh' content='0; URL=contact.php></head>";
exit;

}

?>