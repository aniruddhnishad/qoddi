<?php
echo "ok";
$mysqli = new mysqli("srv-captain--besudqizam-mysql-80x","aniruddh-user","JAjt04b2BF7O","aniruddh-database");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  
}else {
echo "ok working";
}
?>
