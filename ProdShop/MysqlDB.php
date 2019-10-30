	<?php	
	
		$mysqli = new mysqli("localhost", "", "root", "productsbase");

$query = "SELECT * FROM prod ORDER BY 'id' "; //готовим запрос. будем выбирать все из //таблицы news и выбирать по id

$result = $mysqli->query($query); // выполняем запрос query.
//объект результата сохраняем в $result

?>
