<?php

$log= $_POST['log'];
$password = $_POST['password'];

$logSan = filter_var($log, FILTER_SANITIZE_STRING);
$passwordSan = filter_var($password, FILTER_SANITIZE_STRING);

if (condition) {
  // code...
}


 ?>
