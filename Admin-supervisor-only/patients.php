<?php
include base.php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $patient = base.php.$mysqli_fetch_array()
  base.php.$mysqli->query("""SELECT Email_id, Fname, Lname, age, Emergency_contact FROM users""")
  $mysqli->commit();

 ?>
