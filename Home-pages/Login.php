<?php
include base.php
$login(){
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_REQUEST.input['email']
    $password = $_REQUEST.input['password']

    $error = None
    base.php.$mysqli->query("SELECT * FROM new WHERE Email_id2 = %s and Password2 = %s", ($Email_id, $Password));

    $new = base.php.$mysqli_fetch_array()
    if($new != None){
      $error = 'Registeration has not been approved yet!'
    }
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
