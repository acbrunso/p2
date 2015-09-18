<!doctype html>
<html>
<head>
  <title>Password Generator</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#E0F0FF">
  <div id="main">

  <?php include 'header.php';

  if(isset($_GET['thePage'])) {
    $page=trim($_GET['thePage']) . ".php";
  }
  else $page="home.php";

  include $page;
  include 'footer.php';
?>
  </div>

</body>
</html>
