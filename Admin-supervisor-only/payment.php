<?php
include base.php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $employee = base.php.$mysqli_fetch_array()
  $newpayment = base.php.$mysqli_fetch_array()
  base.php.$mysqli->query("""INSERT INTO payment(new_payment, total_due)
  values(%s, %s)""",
  ($totaldue, $newpayment))
  $mysqli->commit();
}
 ?>
