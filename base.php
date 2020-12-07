<?php

function get_db(){
  $mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  return $mysqli;
#connect to database
}

function close_db(){
$mysqli = null;
#close database collection
}
function mock_db(){
  #will possibly add in, placeholder for now
}


 ?>
