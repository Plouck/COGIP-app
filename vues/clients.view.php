 <?php require "header.view.php" ?>
 
 <?php include "../controllers/clients.controllers.php" ?>

    <h1>Clients</h1>
    <table>
      <tr>
        <th>Clients</th>
      </tr>
</a>
<?php

foreach ($donnees as $key => $client) {

  echo "<tr><td><a href='detailsociete.view.php'>".  $client['name' ]. "</a></td></tr>";

}

 ?>
</table>
<?php
include "footer.view.php";
 ?>
