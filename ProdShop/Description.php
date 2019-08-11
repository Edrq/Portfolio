
<!DOCTYPE html>
<html>
<head>

<?php 
$row = $_GET["id"];
$title = "Описание";
require_once "blocks/head.php"; 
?>

</head>
<body>

<?php require_once "blocks/header.php"; ?>


<div id="wrapper">
  <div id="leftCol">
    <?php echo $row ?>  
  </div>

  <?php require_once "blocks/rightCol.php" ?>
  
</div>

<?php require_once "blocks/footer.php"  ?>

</body>
</html>
