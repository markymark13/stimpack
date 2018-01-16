<?php include ("connect.php");
dbConnect(); ?>

<?
$Brew =  $_POST["brew"];
$Type = $_POST["type"];
$Gallons = $_POST["gallons"];

 $query = "
INSERT INTO `winterma_homebrew`.`BREW` (`ID`, `Brew`, `Type`, `Gallons`, `Created Date`) 
VALUES (NULL, '".$_POST['brew']."', '".$_POST['type']."', '".$_POST['gallons']."', '". date('Y-m-d') ."');";

  mysql_query($query);

  echo "<div class='alert alert-success' role='alert' style=''>Well done! You successfully added <strong>".$Brew."</strong></div>";
  echo "You will automatically be redirected <a href='step2.php'>home</a> in 3 seconds...";

  mysql_close($con);
?> 