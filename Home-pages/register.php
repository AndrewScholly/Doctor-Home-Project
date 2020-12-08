<?php
include base.php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $Role = $_REQUEST.input['role2']
  $Fname = $_REQUEST.input['Fname2']
  $Lname = $_REQUEST.input['Lname2']
  $emailid = $_REQUEST.input['emailid2']
  $phone = $_REQUEST.input['Phone']
  $Password = $_REQUEST.input['Password2']
  $DOB = $_REQUEST.input['DOB2']
  $Famcode = $_REQUEST.input['Famcode2']
  $Emcontact = $_REQUEST.input['Emcontact2']
  $Remcontact = $_REQUEST.input['Remcontact2']

  $error = None
  base.php.$mysqli->query("""INSERT INTO new(Fname2, Lname2, emailid2, phone2, password2, DOB2, Famcode2, Emcontact2, Remcontact2, role2)
  values (%s, %s, %s, %s, %s, %s, %s, %s, %s) """,
   ($Fname, $Lname, $emailid, $phone, $Password, $DOB, $Famcode, $Emcontact, $Remcontact, $Role));
   $mysqli->commit();
}

 ?>
