<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mess = $_POST['mess'];

$REMOTE_ADDR = $_POST['REMOTE_ADDR'];

if (isset ($name))
{
$name = substr($name,0,20); //�� ����� ���� ����� 20 ��������
if (empty($name))
{
echo "<center><b>�� ������� ��� !!!<p>";
echo "<a href=mail.php>��������� � ��������� ��������� �����.</a>";
exit;
}
}
else 
{
$name = "�� �������";
}

if (isset ($email))
{
$email = substr($email,0,20); //�� ����� ���� ����� 20 ��������
if (empty($email))
{
echo "<center><b>�� ������ e-mail !!!<p>";
echo "<a href=mail.php>��������� � ��������� ��������� �����.</a>";
exit;
}
}
else 
{
$email = "�� �������";
}

if (isset ($mess))
{
$mess = substr($mess,0,1000); //�� ����� ���� ����� 1000 ��������
if (empty($mess))
{
echo "<center><b>��������� �� �������� !!!<p>";
echo "<a href=mail.php>��������� � ��������� ��������� �����.</a>";
exit;
}
}
else 
{
$mess = "�� �������";
}

$i = "�� �������";
if ($name == $i AND $email == $i AND $mess == $i)
{
echo "��������! ��������� ������! �� �� ��������� ���� ���������!";
exit;
}

$to = "mr.priorey@mail.ru";
$subject = "��������� � ����� LuksWeb.ru";
$message = "��� ���������� ������: $name .\n����������� �����: $email\n���������: $mess .\nIP-�����: $_SERVER[REMOTE_ADDR]";
mail ($to,$subject,$message,"Content-type:text/plain; charset = windows-1251") or print "�� ���� ��������� ������ !!!";
echo "<center><b>������� �� �������� ������ ���������. <br><br> ��� ���� ��� ����� �����! <br><br> � ��������� ����� �� ����������� �������� �����.";
exit;
?>