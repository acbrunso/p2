
  <?php
  $word=file_get_contents("http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html");
  $numberOfMatches = preg_match_all ("/<li>(.*)<\/li>/U", trim(preg_replace('/\s+/', ' ', $word)), $result);
    $result1=implode(',', $result[1]);
  $i=0;
  $pWord="";
  $numChars="";
  $numNums="";
  $numWords="";
  if(isset($_GET['numOfWords']))
    $numWords=$_GET['numOfWords'];
  if(isset($_GET['numOfChars']))
    $numChars=$_GET['numOfChars'];
  if(isset($_GET['numOfNums']))
    $numNums=$_GET['numOfNums'];

  $g = 0;
  while( $g < $numWords) {
    $temp = trim($result[1][rand(0, $numberOfMatches-1)]);
    if(strlen($temp) > 4) {
      $pWord=$pWord . $temp;
      $g++;
    }
  }
    for($f=0; $f<$numChars; $f++) {
        $pWord=$pWord . chr(rand(33, 45));
    }
    for($e=0; $e<$numNums; $e++) {
        $pWord=$pWord . rand(0, 9);
    }


    function clean($string) {
       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    ?>
