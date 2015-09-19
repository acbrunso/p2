

<?php
/*if the user types http://p2.anthonybrunson.[anything other than index.php]
they will be redirected to the home page. */
  $currentPage = substr("$_SERVER[REQUEST_URI]", 0, 10);

  if($currentPage!="/index.php" && $currentPage!="/" ) {
    header("Location: http://p2.anthonybrunson.me");
    die();
  }
?>
