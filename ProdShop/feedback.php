<!DOCTYPE html>
<html>
<head>

<?php 
$title = "Обратная связь";
require_once "blocks/head.php"; 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

	$(document).ready (function () {
		$("#done").click (function () {
			$('#messageShow').hide();
			var name = $("#name").val();
			var email = $("#email").val();
			var subject = $("#subject").val();
			var message = $("#message").val();
			var fail = "";
			var address = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (name.length < 3)
				fail = "Имя должно быть не меньше трех символов";	
			else if(address.test(email) == false) 
			fail = "Вы ввели некорректный Email";
		else if (subject.length < 2)
			fail = "Тема сообщения должна быть не менее 2 символов";
		else if (message.length < 2)
			fail = "Cообщение должно быть не менее 2 символов";
		if (fail != "") {
			$('#messageShow').html(fail + "<div	class ='clear'><br></div>");
		    $('#messageShow').show();
		    return false;
		}
		$.ajax ({
			url: '/ajax/feedback.php',
			type: 'POST',
			cache: false,
			data: {'name': name, 'email': email, 'subject': subject, 'message': message},
			dataType: 'html',
			success: function(data) {
				$('#messageShow').html (data + "<div class ='clear'><br></div>");
				$('#messageShow').show();
			}
		})

		});
	});
 </script>
</head>
<body>

<?php require_once "blocks/header.php"; ?>


<div id="wrapper">
  <div id="leftCol">
<input type="text" id="name" name="name" placeholder="Имя"><br />
<input type="text" id="email" name="email" placeholder="Email"><br />
<input type="text" id="subject" name="subject" placeholder="Тема сообщения"><br />
<textarea name="message" id="message" placeholder="Введите ваше сообщение"></textarea><br />
<div id="messageShow"></div>
<input type="button" name="done" id="done" value="Отправить">

   </div>

  <?php require_once "blocks/rightCol.php" ?> 
</div>

<?php require_once "blocks/footer.php"?>

</body>
</html>
