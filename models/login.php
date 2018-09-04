<?php
session_start();

<<<<<<< HEAD
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
=======
$bdd = new PDO('mysql:host=localhost;dbname=id7012987_cogip', 'id7012987_cogip', 'lolilol');

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
>>>>>>> 4da8b1c73ab00cee4116b1fd7cfea91f4570305e
}
?>
