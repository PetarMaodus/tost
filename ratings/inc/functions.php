<?php
function emptyInputSignup($name,$surname, $email, $reemail, $password, $repassword) {
  $result;
  if (empty($name) || empty($surname) || empty($email) || empty($reemail) || empty($password) || empty($repassword)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function invalidName($name) {
  $result;
  if (!preg_match("/^[a-zA-Z]*$/", $name)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function invalidSurname($surname) {
  $result;
  if (!preg_match("/^[a-zA-Z]*$/", $surname)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function notMatcEmail($email, $reemail) {
  $result;
  if ($email !== $reemail) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function notMatcPassword($password, $repassword) {
  $result;
  if ($password !== $repassword) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function emailTaken($conn, $email) {
  $sql = "SELECT * FROM users WHERE usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}
function createUser($conn, $name,$surname, $email, $password) {
  $sql = "INSERT INTO users (usersName, usersSurname, usersEmail, usersPassword) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=stmtfailed");
    exit();
  }
  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "ssss", $name,$surname, $email, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../index.php?error=none");
}


function emptyInputLogIn($email, $password) {
  $result;
  if (empty($email) || empty($password) ) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function loginUser($conn, $email, $password){
  $emailexists = emailTaken($conn, $email);
  if ($emailexists === false) {
    header("location: ../index.php?error=nosuchemail");
    exit();
  }
  $pwdHashed = $emailexists['usersPassword'];
  $checkPwd = password_verify($password, $pwdHashed);
  if ($checkPwd === false) {
    header("location: ../index.php?error=incorectlogin");
    exit();
  }
  elseif ($checkPwd === true) {
    session_start();
    $_SESSION['userId'] = $emailexists['usersId'];
    $_SESSION['userName'] = $emailexists['usersName'];
    $_SESSION['userSurname'] = $emailexists['usersSurname'];

  }
}
