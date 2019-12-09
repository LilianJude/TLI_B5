<?php

  $db = getDB();

  $member = new Member($db);

  // Now we check if the data from the login form was submitted, isset() will check if the data exists.
  if (isset($_POST['email'], $_POST['pass']) ) {
    $memberEmail = $_POST['email'];
    $password = $_POST['pass'];
    if(strlen(trim($memberEmail))>1 && strlen(trim($password))>1 ){
      $uid=$member->login($memberEmail,$password);
      if($uid){
        $url='./index.php';
        header("Location: $url"); // Page redirecting to home.php
      }
    }
  }

  if (isset($_POST['signupPseudo'], $_POST['signupPsw']) ) {
    $memberEmail = $_POST['signupPseudo'];
    $password = $_POST['signupPsw'];
    if(strlen(trim($memberEmail))>1 && strlen(trim($password))>1 ){
      $uid=$member->create($memberEmail,$password);
    }
  }
?>
