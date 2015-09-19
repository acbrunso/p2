
<?php
  $currentPage = "$_SERVER[REQUEST_URI]";
  if($currentPage!="/index.php") {
    header("Location: http://p2.anthonybrunson.me");
    die();
  }
?>
