<?php
include base.php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['yes'])){
    base.php.$mysqli->query("""INSERT INTO user(Fname, Lname, emailid, phone, password, DOB, Famcode, Emcontact, Remcontact, role)
    SELECT * FROM new""")
    $mysqli->commit();
  }
  base.php.$mysqli->query("""DELETE * FROM new""")
}
 ?>
