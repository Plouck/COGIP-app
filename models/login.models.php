<?php

// Create connection
$conn=mysqli_connect("localhost","root","","cogip");

// SELECT TABLE
$sql = "SELECT login, pass FROM logs";
$result = $conn->query($sql);

 ?>
