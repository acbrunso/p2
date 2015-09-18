<!doctype html>
<html>
<?php include 'header.php'; ?>

  <?php
  $word=file_get_contents("http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html");
  $numberOfMatches = preg_match_all ("/<li>(.*)<\/li>/U", trim(preg_replace('/\s+/', ' ', $word)), $result);
    $result1=implode(',', $result[1]);
  $i=0;
  $pWord="";
  $numChars="";
  $numNums="";
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
?>

  <div id="section">
    <label for="word"><?php echo $pWord ?></label>
    <form name="input" action="index.php" method="get">
      <p># of words
        <select name="numOfWords">
          <option value="1"   <?php if(isset($_GET['numOfWords']) AND $_GET['numOfWords']=="1") { print "selected"; } ?> >1</option>
          <option value="2"   <?php if(isset($_GET['numOfWords']) AND $_GET['numOfWords']=="2") { print "selected"; } ?> >2</option>
          <option value="3"   <?php if(isset($_GET['numOfWords']) AND $_GET['numOfWords']=="3") { print "selected"; } ?> >3</option>
        </select>
      </p>
      <p># of Symbols
        <select name="numOfChars">
          <option value="0"   <?php if($numChars == "0") { print "selected"; } ?> >0</option>
          <option value="1"   <?php if($numChars == "1") { print "selected"; } ?> >1</option>
          <option value="2"   <?php if($numChars == "2") { print "selected"; } ?> >2</option>
          <option value="3"   <?php if($numChars == "3") { print "selected"; } ?> >3</option>
        </select>
      </p>
      <p># of Numbers
        <select name="numOfNums">
          <option value="0"   <?php if($numNums == "0") { print "selected"; } ?> >0</option>
          <option value="1"   <?php if($numNums == "1") { print "selected"; } ?> >1</option>
          <option value="2"   <?php if($numNums == "2") { print "selected"; } ?> >2</option>
          <option value="3"   <?php if($numNums == "3") { print "selected"; } ?> >3</option>
        </select>
      </p>
      </br>
      <input type="submit" value="Submit">
    </form>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
