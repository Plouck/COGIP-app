<?php
include "controllers/clients.controllers.php";
 ?>

    <h1>Clients</h1>
    <table>
      <tr>
        <th>Clients</th>
      </tr>
<?php

foreach ($donnees as $key => $clients) {

  echo "<tr><td><a href='detailsociete.view.php?idSociete=".$clients['idSociete']."'>".  $clients['name' ]. "</a></td></tr>";

}

 ?>
</table>

