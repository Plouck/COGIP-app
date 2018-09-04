<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');

if(isset($_POST['formconnexion'])) {
   $loginconnect = htmlspecialchars($_POST['login']);
   $mdpconnect = md5($_POST['pass']);
   if(!empty($loginconnect) OR !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membre WHERE login = ? AND pass_md5 = ?");
      $requser->execute(array($loginconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['login'] = $userinfo['login'];
         header("Location: vues/dashboard.view.php ");
      } else {
         $erreur = "Mauvais login ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
