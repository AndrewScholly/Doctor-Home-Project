<?php
include base.php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $roster = base.php.$mysqli_fetch_array()

  base.php.$mysqli->query("""SELECT Fname, Lname FROM user
  WHERE role == supervisor inner join future_date == date""")
  $mysqli->commit();

  $doctor = base.php.$mysqli->query("""SELECT Fname, Lname FROM user
  WHERE role == Doctor inner join future_date == date""")
  $mysqli->commit();

  $caregiver = base.php.$mysqli->query("""SELECT Fname, Lname FROM user
  WHERE role == Caregiver inner join future_date == date""")
  $mysqli->commit();

  $pgroup = base.php.$mysqli->query("""SELECT Group FROM patient
  WHERE inner join role == Caregiver inner join future_date == date""")
  $mysqli->commit();
}
 ?>
