
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

 

<div id="wrapper">
  <div id="leftCol">

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


