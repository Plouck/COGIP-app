<?php require 'models/db.php';

$query = 'SELECT * FROM facture ORDER BY idFacture DESC LIMIT 5;';
  try{
    $pdo_select = $pdo->prepare($query);
    $pdo_select->execute();
    $NbreData = $pdo_select->rowCount(); //nombre de ligne
    $rowAll = $pdo_select->fetchAll();
  } catch (PDOException $e) { echo"Erreur SQL : ". $e->getMessage().'<br/>'; die(); }

if($NbreData != 0){
  echo "<table border=\"1\">
          <thead>
            <tr>
              <th>id</th>
              <th>date</th>
              <th>Détails</th>
            </tr>
          </thead>
          <tbody>";
  foreach ($rowAll as $row) {
    echo "<tr>
            <td>"; echo $row['idFacture']; echo"</td>
            <td>"; echo $row['date']; echo"</td>
            <td>"; echo $row['details']; echo"</td>
          </tr>";
  }
  echo "</tbody>
        </table>";
}
else{
  echo "ERrorroror";
}
?>
