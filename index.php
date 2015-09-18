<!doctype html>
<html>
<head>
  <title>Password Generator</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'logic.php'; ?>
</head>
<body style="background-color:#E0F0FF">
  <div id="main">


  <?php
  //include the common header template
  include 'header.php';

  //if the user clicked a link on the page
  if(isset($_GET['thePage'])) {
    //clean up the input in case they tried to inject something
    $page=clean(trim($_GET['thePage'])) . ".php";
    //if they typed any existing files that are NEVER  body,
    //set it to the home page
    if($page=="header.php" || $page=="footer.php" || $page=="index.php") {
      $page="home.php";
    }
  }
  //this executes if it is the first time they hit the page
  else $page="home.php";

  //if the result does not work still,
  if(!@include($page)) {
   //display home page
   $page="home.php";
   include $page;
  }

  //include the common footer template
  include 'footer.php';
?>
  </div>

</body>
</html>
