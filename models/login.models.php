<?php

// Create connection
$conn = mysqli("localhost","root","","cogip");

// SELECT TABLE
$sql = "SELECT login, pass FROM logs";
$result = $conn->query($sql);

 ?>
