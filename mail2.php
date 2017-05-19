<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mess = $_POST['mess'];

$REMOTE_ADDR = $_POST['REMOTE_ADDR'];

if (isset ($name))
{
$name = substr($name,0,20); //Не может быть более 20 символов
if (empty($name))
{
echo "<center><b>Не указано имя !!!<p>";
echo "<a href=mail.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$name = "не указано";
}

if (isset ($email))
{
$email = substr($email,0,20); //Не может быть более 20 символов
if (empty($email))
{
echo "<center><b>Не указан e-mail !!!<p>";
echo "<a href=mail.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$email = "не указано";
}

if (isset ($mess))
{
$mess = substr($mess,0,1000); //Не может быть более 1000 символов
if (empty($mess))
{
echo "<center><b>Сообщение не написано !!!<p>";
echo "<a href=mail.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$mess = "не указано";
}

$i = "не указано";
if ($name == $i AND $email == $i AND $mess == $i)
{
echo "Внимание! Произошла ошибка! Вы не заполнили поля сообщения!";
exit;
}

$to = "mr.priorey@mail.ru";
$subject = "Сообщение с сайта LuksWeb.ru";
$message = "Имя пославшего письмо: $name .\nЭлектронный адрес: $email\nСообщение: $mess .\nIP-адрес: $_SERVER[REMOTE_ADDR]";
mail ($to,$subject,$message,"Content-type:text/plain; charset = windows-1251") or print "Не могу отправить письмо !!!";
echo "<center><b>Спасибо за отправку Вашего сообщения. <br><br> Для меня это очень важно! <br><br> В ближайшее время Вы обязательно получите ответ.";
exit;
?>