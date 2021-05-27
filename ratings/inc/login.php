<?php

if (isset($_POST['logSub'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputLogIn($email, $password) !== false) {
      header("location: ../index.php?error=loginemptyinput");
      exit();
    }
    else {
      loginUser($conn, $email, $password);
    }

}
else {
  echo "works nottttt go away dont cheat";
}
