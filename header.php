<?php
  session_start();
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Ucreate</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="aboutus.php">About us</a>
<?php
  if (isset($_SESSION["useruid"])) {
    echo "<a href='profile.php'>Profile Page</a>";
    echo "<a href='includes/logout.inc.php'>Log out</a>";
  }
  else {
    echo "<a href='signup.php'>Sign up</a>";
    echo "<a href='login.php'>Log in</a>";
  }
?>
</div>

