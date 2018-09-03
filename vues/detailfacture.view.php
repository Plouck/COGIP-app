<?php
require "header.view.php";
require "../controllers/detailfacture.controllers.php";
 ?>
 <h1>Société</h1>
 <table>
   <tr>
     <th>N° de Facture</th>
     <th>Date</th>
     <th>Détails</th>
     <th>Société</th>
     <th>Personne de contact</th>
   </tr>
 <?php
 echo "<tr><td>".  $donnees[0]['idFacture' ]. "</td><td>". $donnees[0]['date']."</td><td>". $donnees[0]['details']."</td><td>". $donnees[0]['societe_idSociete']."</td><td>". $donnees[0]['personne_idPersonne']."</td></tr>";
 ?>
 </table>
 <?php
 include "footer.view.php";
  ?>
