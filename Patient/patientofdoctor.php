<?php
include base.php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $doctor_patient = base.php.$mysqli_fetch_array()
  base.php.$mysqli->query("""SELECT date, Comment, morning_med, afternoon_med, night_med  FROM users
  where email_id == %s
  values(%s)""",
  ($doctor_patient));
  $mysqli->commit();

}

 ?>
