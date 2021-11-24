<?php
$mysqli = new mysqli("srv-captain--tkcbewvhdi-mysql-80x","aniruddh-user","bYaGk9DJHr7UdeNO","aniruddh-database");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  
}else {
echo "ok";
}
?>
