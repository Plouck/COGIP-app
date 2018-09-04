<?php
// require "header.view.php";
require "../controllers/dashboard.controllers.php";
?>
   <h1>Factures</h1>
   <table>
     <tr>
       <th>N° de facture</th>
       <th>Date</th>
       <th>Société</th>
     </tr>
<?php

foreach ($donnees1 as $key => $facture) {

 echo "<tr><td><a href='detailfacture.view.php?idFacture=".$facture['idFacture']."'>".  $facture['idFacture' ]. "</td><td>".  $facture['date' ]. "</td><td>".$facture['name']. "</a></td></tr>";

}

?>
</table>

<h1>Sociétés</h1>
<table>
  <tr>
    <th>Société</th>
    <th>Type</th>
  </tr>

<?php

foreach ($donnees2 as $key => $societe) {

echo "<tr><td><a href='detailsociete.view.php?idSociete=".$societe['idSociete']."'>".  $societe['name' ]. "</a></td><td>".$societe['type']."</td></tr>";

}

?>
</table>
</table>

<h1>Contacts</h1>
<table>
  <tr>
    <th>Nom</th>
    <th>Téléphone</th>
    <th>Mail</th>
    <th>Societe</th>
  </tr>

<?php

foreach ($donnees3 as $key => $contact) {

echo "<tr><td>".  $contact['contact_name' ]." ".$contact['firstName']. "</td><td>". $contact['phone']. "</td><td>". $contact['email']. "</td><td>".$contact['societe_name']."</td></tr>";
}

?>
</table>
<?php
require "footer.view.php";
 ?>
