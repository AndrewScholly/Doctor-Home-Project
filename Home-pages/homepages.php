<?php
include base.php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $patient_information = base.php.$mysqli_fetch_array()

  base.php.$mysqli->query("""SELECT name, morning_med, afternoon_med, night_med, breakfast, lunch, dinner FROM
  patient""")
  $mysqli->commit();

  base.php.$mysqli->query("""SELECT d_name, d_appointment FROM doctor""")
  $mysqli->commit();

  base.php.$mysqli->query("""SELECT Cname FROM caregiver""")
  $mysqli->commit();


}



 ?>
