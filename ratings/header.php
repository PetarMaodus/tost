<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review ratings</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <div id="logodiv">
     <p id="logo">LOGO</p>
     </div>
     <div id="nav-user">
        <p id="navname">stranger</p>
     </div>
     <div id="menuX">
       <div class="menuBar" id="bar1"></div>
       <div class="menuBar" id="bar2"></div>
       <div class="menuBar" id="bar3"></div>
     </div>
     <div id="menuOpt">
       <p id="logIn">logIn</p>
       <p id="signIn">signIn</p>
       <p id="logout">logOut</p>
     </div>
    </header>
    <div id="backCloth"></div>
      <div id="logDiv">
        <form id="logForm" action="inc/login.php" method="post">
          <input id="lo1" type="text" name="email" placeholder="Enter Email">
          <input id="lo2" type="password" name="password" placeholder="Enter Password">
          <button id="lo3" type="submit" name="logSub">Log in</button>
        </form>
        <p id="lo4">Dont have an account? <span id="chanDivSig">Sign In</span></p>
        <span id="lo5">&#x2716;</span>
      </div>
      <div id="sigDiv">
        <form id="sigForm" action="inc/signup.php" method="post">
          <label id="sig1l" for="sig1">name:</label>
          <input id="sig1" type="text" name="name" placeholder="name">
          <label id="sig2l" for="sig2">surname:</label>
          <input  id="sig2" type="text" name="surname" placeholder="surname">
          <label id="sig3l" for="sig3">email:</label>
          <input  id="sig3" type="text" name="email" placeholder="email">
          <label id="sig4l" for="sig4">repeat email:</label>
          <input  id="sig4" type="text" name="reemail" placeholder="re email">
          <label id="sig5l" for="sig5">password:</label>
          <input  id="sig5" type="password" name="password" placeholder="password">
          <label id="sig6l" for="sig6">repeat password:</label>
          <input  id="sig6" type="password" name="repassword" placeholder="re password">
          <button  id="sig7" type="submit" name="sigSub">Sign in</button>
        </form>
        <p id="sig8" >Already have an account? <span id="chanDivLog">Log In</span></p>
        <span id="sig9">&#x2716;</span>
      </div>
