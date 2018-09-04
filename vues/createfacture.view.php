<?php

// require "../controllers/createfacture.controllers.php"
 ?>

<h1>Ajouter une facture</h1>
	<form action="../models/createfacture.models.php" method="post">
		<div>
			<label for="date">date</label>
			<input type="date" name="date" value="">
		</div>
    <div>
			<label for="details">Détails</label>
			<input type="text" name="details" value="">
		</div>
		<div>
			<label for="societe">Société</label>
			<select name="societe">
				<option value="1">Electronic Arts</option>
				<option value="2">Nintendo</option>
				<option value="3">Ubisoft</option>
				<option value="4">Bandai-Namco</option>
				<option value="5">Steam</option>
        <option value="6">Origin</option>
			</select>
		</div>
    <div>
      <label for="personne">Contact</label>
      <select name="personne">
        <option value="1">Sakurai Masashiro</option>
        <option value="2">Gabe Newell</option>
        <option value="3">Trip Hawkins</option>
        <option value="4">Guillemot Yves</option>
        <option value="5">Nakamura Masaya</option>
        <option value="6">fdsgs fgsd</option>
      </select>
    </div>
		<button type="submit" name="button">Envoyer</button>
	</form>

  <h1>Factures</h1>
  <table>
    <tr>
      <th>N° de facture</th>
      <th>Date</th>
    </tr>
  <?php

  // foreach ($donnees as $key => $facture) {
  //
  // echo "<tr><td><a href='detailfacture.view.php?idFacture=".$facture['idFacture']."'>".  $facture['idFacture' ]. "</td><td>".  $facture['date' ]. "</a></td></tr>";
  //
  // }

  ?>
  </table>
