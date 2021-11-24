<?php
$mysqli = new mysqli("srv-captain--tkcbewvhdi-mysql-80x","aniruddh-user","KyXmUpQ1Lx4J","aniruddh-database");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  
}else {
echo "ok";
}
?>
