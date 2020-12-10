<?php
include base.php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $employee = base.php.$mysqli_fetch_array()
  base.php.$mysqli->query("""SELECT Email_id, Fname, Lname, Role, salary  FROM users
  where role = doctor || caregiver || admin || supervisor""")
  $mysqli->commit();

  base.php.$mysqli->query("""INSERT INTO users(salary)
  WHERE email_id = %s
  values(%s)""",
  ($newsalary));
  $mysqli->commit();
}

 ?>
