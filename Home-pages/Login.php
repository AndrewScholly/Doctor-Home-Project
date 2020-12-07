<?php
include base.php
$login(){
  if ($_REQUEST.method =='POST'){
    $email = $_REQUEST.input['email']
    $password = $_REQUEST.input['password']

    $error = None
    base.php.$mysqli->query("SELECT * FROM users WHERE Email_id = %s and Password = %s", ($Email_id, $Password));

    $user = base.php.$mysqli_fetch_array()
    if ($user == None){
      $error = 'Incorrect email or password!'
    }

    if ($error = None){
      if ($user['Role'] == 'Admin' || $user['Role'] == 'Supervisor'){
        header("Location: Adminreport.html")
      }
      elseif ($user['Role'] == 'Doctor') {
        header("Location: Doctorhome.html")
      }
      elseif ($user['Role'] == 'Caregiver') {
        header("Location: Caregiverhome.html")
      }
      elseif ($user['Role'] == 'Patient') {
        header("Location: Patienthome.html")
      }
    }
  }
}

 ?>
