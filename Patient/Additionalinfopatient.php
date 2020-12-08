<?php
include base.php
$name = $_REQUEST.input['pname']
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $pid = $_REQUEST.input['Patient ID']
  $group = $_REQUEST.input['Group']
  $addate = $_REQUEST.input['Admission Date']
  base.php.$mysqli->query("""SELECT name FROM patient WHERE pid == %s""",
  ($name));

  base.php.$mysqli->query("""INSERT INTO patient(name, group, Admission_date)
  values (%s, %s, %s)""",
  ($pid, $group, $addate)); 
  $mysqli->commit();
}

 ?>
