
<?php
  $currentPage = substr("$_SERVER[REQUEST_URI]", 0, 10);
  echo strlen($currentPage);
  if($currentPage!="/index.php" || $currentPage!="/" ) {
    header("Location: http://p2.anthonybrunson.me");
//    die();
  }

  echo $currentPage
?>
