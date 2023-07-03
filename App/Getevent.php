<?php
include 'cnxbdd.php';

$sql = $cnx->prepare('SELECT * FROM `evenement`;');
$sql->execute();

$event = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<table id='evenement'>";  
echo "<thead style='background-color: #141517;' class='height'>'";
echo "<tr><th scope='col'>Type</th><th scope='col'>Date</th><th scope='col'>Description</th></tr>";
echo "</thead>";
//  foreach ($event as $ev) {
   //  echo "<tr>";
   //  echo "<td >".$ev['Type']."</td>";
   //  echo "<td >".$ev['Date']."</td>";
   //  echo "<td >".$ev['Description']."</td>";
   //  echo "</tr>";
//  }

 echo "</table>";

?>

