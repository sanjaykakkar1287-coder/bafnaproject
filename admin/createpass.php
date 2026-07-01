<?php

$password = "Admin@123";
$username = "ppadminbafna";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "<h3>Original Password</h3>";
echo $password;

echo "<br><br>";

echo "<h3>Hashed Password</h3>";
echo $hash;
echo "<br><br>";

echo "<h3>user name:-  </h3>";
echo $username;

?>