<?php require 'models/db.php';

$query = 'SELECT * FROM societe ORDER BY idSociete DESC LIMIT 5;';
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
              <th>Nom</th>
            </tr>
          </thead>
          <tbody>";
  foreach ($rowAll as $row) {
    echo "<tr>
            <td>"; echo $row['idSociete']; echo"</td>
            <td>"; echo $row['name']; echo"</td>
          </tr>";
  }
  echo "</tbody>
        </table>";
}
else{
  echo "ERrorroror";
}
?>
