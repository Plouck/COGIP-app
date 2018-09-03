<?php
include "header.view.php";
include "../controllers/detailsociete.controllers.php";
?>
<h1>Société</h1>
<table>
  <tr>
    <th>Name</th>
  </tr>
</a>
<?php

foreach ($donnees as $key => $societe) {

echo "<tr><td>".$societe['idSociete'].  $societe['name' ]. $societe['adresse']. "</a></td></tr>";

}

?>
</table>
<?php
 include "footer.view.php";
  ?>
