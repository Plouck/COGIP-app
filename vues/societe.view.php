<?php
// include "header.view.php";
include "../controllers/societe.controllers.php";
 ?>
    <h1>Sociétés</h1>
    <table>
      <tr>
        <th>Name</th>
      </tr>

<?php

foreach ($donnees as $key => $societe) {

  echo "<tr><td><a href='detailsociete.view.php?idSociete=".$societe['idSociete']."'>".  $societe['name' ]. "</a></td></tr>";

}

 ?>
</table>
<?php
include "footer.view.php";
 ?>
