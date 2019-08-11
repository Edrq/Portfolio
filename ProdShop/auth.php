<!DOCTYPE html>
<html>
<head>

<?php 
$title = "Авторизаци";
require_once "blocks/head.php"; 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

	$(document).ready (function () {
		$("#done").click (function () {
			$('#messageShow').hide();
			var email = $("#email").val();
			var password = $("#password").val();
			var fail = "";
			var address = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;	
			if(address.test(email) == false) 
			fail = "Вы ввели некорректный Email";
		else if (password == false)
			fail = "Вы ввели неправильный пароль";
		if (fail != "") {
			$('#messageShow').html(fail + "<div	class ='clear'><br></div>");
		    $('#messageShow').show();
		    return false;
		}
		$.ajax ({
			url: '/ajax/auth.php',
			type: 'POST',
			cache: false,
			data: {'email': email, 'password': password },
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
<input type="text" id="email" name="email" placeholder="Email"><br />
<input type="text" id="password" name="password" placeholder="Введите пароль"><br />
<div id="messageShow"></div>
<input type="button" name="done" id="done" value="Войти">

   </div>

  <?php require_once "blocks/rightCol.php" ?> 
</div>

<?php require_once "blocks/footer.php"?>

</body>
</html>
