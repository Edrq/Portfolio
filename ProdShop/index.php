
<!DOCTYPE html>
<html>
<head>

<?php 
$title = "Магазин продуктов";
include "blocks/head.php"; 

?>

</head>
<body>

<?php require_once "blocks/header.php" ?>

 <?php

/*
		Двухмерный массив продуктов (использовать в случае отсутствия подключения к БД)
global $Products;
global $apple;
global $pineapple;
global $banana;
global $potato;
global $carrot;
global $cabbage;
global $tomato;
global $strawberry;
global $peas;

    $Products = array(
    array("APPLE ","$apple","Price: 27","<img src=\"/img/eat/1.jpg\" width='100' height='100'>"),
    array("PINEAPPLE ","$pineapple","Price: 41","<img src=\"/img/eat/2.jpg\" width='100' height='100'>"),
    array("PEACH ","$peach","Price: 55","<img src=\"/img/eat/3.jpg\" width='100' height='100'>"),
    array("BANANA ","$banana","Price: 22","<img src=\"/img/eat/4.jpg\" width='100' height='100'>"),
    array("POTATO ","$potato","Price: 15","<img src=\"/img/eat/5.jpg\" width='100' height='100'>"),
    array("CARROT ","$carrot","Price: 18","<img src=\"/img/eat/6.jpg\" width='100' height='100'>"),
    array("CABBAGE ","$cabbage","Price: 25","<img src=\"/img/eat/7.jpg\" width='100' height='100'>"),
    array("TOMATO ","$tomato","Price: 37","<img src=\"/img/eat/8.jpg\" width='100' height='100'>"),
    array("STRAWBERRY","$strawberry","Price: 60","<img src=\"/img/eat/9.jpg\" width='100' height='100'>"),
    array("PEAS","$peas","Price: 45","<img src=\"/img/eat/10.jpg\" width='100' height='100'>")
);


?>

 <?php

   $apple = "<a href='Description.php'> Description </a>";
   $pineapple = "<a href='Description.php'> Description </a>";
   $peach = "<a href='Description.php'> Description </a>";
   $banana = "<a href='Description.php'> Description </a>";
   $potato = "<a href='Description.php'> Description </a>";
   $carrot = "<a href='Description.php'> Description </a>";
   $cabbage = "<a href='Description.php'> Description </a>";
   $tomato = "<a href='Description.php'> Description </a>";
   $strawberry = "<a href='Description.php'> Description </a>";
   $peas = "<a href='Description.php'> Description </a>";


for ($i=0;$i<count($Products);$i++) {
    for ($j=0;$j<count($Products[$i]);$j++) {
         $Products[$i][$j].'  ';
    }

     '<BR>';
}

*/ 

?>

<div id="wrapper">
	<div id="leftCol">

		<!--

<table width="550" height="550" border="1" cellspacing="3" cellpadding="10"> 
    <tr> 
      <td align="center"><?php echo 'APPLE'; ?> </td><td align="center"><?php echo $apple; ?> </td><td align="center"><?php echo 'Price 27'; ?> </td><td align="center"><?php echo "<img src=\"/img/Apple.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
    <tr> 
      <td align="center"><?php echo 'PINEAPPLE'; ?> </td><td align="center"><?php echo $pineapple; ?> </td><td align="center"><?php echo 'Price 41'; ?> </td><td align="center"><?php echo "<img src=\"/img/PineApple.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
    <tr> 
      <td align="center"><?php echo 'PEACH'; ?> </td><td align="center"><?php echo $peach; ?> </td><td align="center"><?php echo 'Price 55'; ?> </td><td align="center"><?php echo "<img src=\"/img/Peach.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
     <tr> 
      <td align="center"><?php echo 'BANANA'; ?> </td><td align="center"><?php echo $banana; ?> </td><td align="center"><?php echo 'Price 22'; ?> </td><td align="center"><?php echo "<img src=\"/img/Banana.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
     <tr> 
      <td align="center"><?php echo 'POTATO'; ?> </td><td align="center"><?php echo $potato; ?> </td><td align="center"><?php echo 'Price 15'; ?> </td><td align="center"><?php echo "<img src=\"/img/Potato.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
     <tr> 
      <td align="center"><?php echo 'CARROT'; ?> </td><td align="center"><?php echo $carrot; ?> </td><td align="center"><?php echo 'Price 18'; ?> </td><td align="center"><?php echo "<img src=\"/img/Carrot.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
     <tr> 
      <td align="center"><?php echo 'CABBAGE'; ?> </td><td align="center"><?php echo $cabbage; ?> </td><td align="center"><?php echo 'Price 25'; ?> </td><td align="center"><?php echo "<img src=\"/img/Cabbage.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
     <tr> 
      <td align="center"><?php echo 'TOMATO'; ?> </td><td align="center"><?php echo $tomato; ?> </td><td align="center"><?php echo 'Price 37'; ?> </td><td align="center"><?php echo "<img src=\"/img/Tomato.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
     <tr> 
      <td align="center"><?php echo 'STRAWBERRY'; ?> </td><td align="center"><?php echo $strawberry; ?> </td><td align="center"><?php echo 'Price 60'; ?> </td><td align="center"><?php echo "<img src=\"/img/Strawberry.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
     <tr> 
      <td align="center"><?php echo 'PEAS'; ?> </td><td align="center"><?php echo $peas; ?> </td><td align="center"><?php echo 'Price 45'; ?> </td><td align="center"><?php echo "<img src=\"/img/Peas.jpg\" width='200' height='200'>"; ?> </td> 
    </tr> 
   </table>
   <BR>
-->
		<?php 	

			$mysqli = new mysqli("localhost", "root", "", "productsbase");

$query = "SELECT * FROM prod ORDER BY 'id' "; //готовим запрос. будем выбирать все из //таблицы news и выбирать по id

$result = $mysqli->query($query); // выполняем запрос query.
//объект результата сохраняем в $result

while ($row = $result->fetch_assoc()) {

echo
 ' <table width="200" height="150" border="1" cellspacing="3" cellpadding="10"> 
    <tr> 
      <td align="center"> '.$row["name"].' </td><td align="center"> <a href= "Description.php?id='.$row["description"].'"> Описание </a> </td><td align="center"> Цена: '.$row["price"].' грн. </td><td align="center"><img src="/img/eat/'.$row["id"].'.jpg" > </td> 
    </tr>  
   </table> ';
  

	}

	?>	

	</div>

	<?php require_once "blocks/rightCol.php" ?>
	
</div>
<?php include "Description.php" ?>
<?php require_once "blocks/footer.php" ?>

</body>
</html>



