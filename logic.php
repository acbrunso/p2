
<?php
  /* file:         logic.php
     Usage:        This file is used to select a random password.
                   It allows up to 3 words to be combined, special
                   characters, and numbers to be used.
  */

  //useful if someone tries to type a higher number in the address bar
  $MAX_NUM_WORDS=3;
  $MAX_NUM_CHARS=3;
  $MAX_NUM_NUMS=3;

  //remove special characters from strings
  function clean($string) {
     return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
  }
/*************************************************************************************/

  //read in the words from the file on a single line
  $word=file("wordList.txt");
  //convert it to a 2 dimensional array. Index [0][n] is line 1
  $result = array_map(function($v){
    return explode("  ", $v);
  }, file("wordList.txt", FILE_IGNORE_NEW_LINES |FILE_SKIP_EMPTY_LINES));

  //initialize vars
  $pWord="";
  $numChars="";
  $numNums="";
  $numWords="";
  if(isset($_GET['numOfWords']))
    $numWords=$_GET['numOfWords'];
  //prevents users from typing random stuff in the adderss bar
  if($numWords > $MAX_NUM_WORDS) {
    $numWords=1;
  }
  //prevents users from typing random stuff in the adderss bar
  if(isset($_GET['numOfChars']))
    $numChars=$_GET['numOfChars'];
  if($numChars > $MAX_NUM_CHARS) {
    $numChars = 0;
  }

  //prevents users from typing random stuff in the adderss bar
  if(isset($_GET['numOfNums']))
    $numNums=$_GET['numOfNums'];
  if($numNums >$MAX_NUM_NUMS)
    $numNums=0;

  //create password with selected number of words.
  for($g=0; $g < $numWords; $g++) {
    $temp = $result[0][rand(0, count($result[0]))];
    //if(strlen($temp) > 4) {
    $pWord=$pWord . $temp;
  }

  //clean out any special characters that may be in the file
  $pWord=clean($pWord);

  //add characters
  for($f=0; $f<$numChars; $f++) {
    $pWord=$pWord . chr(rand(33, 45));
  }
  //add numbers
  for($e=0; $e<$numNums; $e++) {
    $pWord=$pWord . rand(0, 9);
  }
?>
