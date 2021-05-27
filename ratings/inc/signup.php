<?php
if (isset($_POST["sigSub"])) {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];
  $reemail = $_POST["reemail"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];

  require_once 'dbh.php';
  require_once 'functions.php';
  if (emptyInputSignup($name,$surname, $email, $reemail, $password, $repassword) !== false) {
    header("location: ../index.php?error=emptyinput");
    exit();
  }
  if (invalidName($name) !== false) {
    header("location: ../index.php?error=invalidname");
    exit();
  }
  if (invalidSurname($surname) !== false) {
    header("location: ../index.php?error=invalidsurname");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../index.php?error=invalidemail");
    exit();
  }
  if (notMatcEmail($email, $reemail) !== false) {
    header("location: ../index.php?error=notmachemail");
    exit();
  }
  if (notMatcPassword($password, $repassword) !== false) {
    header("location: ../index.php?error=nomatchpassword");
    exit();
  }
  if (emailTaken($conn, $email) !== false) {
    header("location: ../index.php?error=emailalreadytaken");
    exit();
  }

  createUser($conn, $name,$surname, $email,$password);
}else {
  echo "works nottttt go away dont cheat";
}
