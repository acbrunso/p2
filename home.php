<?php include 'check.php' ?>




  <div id="section">
    <p>
    Generate a random password consisting of up to three common words!
    Using phrases instead of uncommon gibberish words can be harder to guess.
    Common words are easier to remember, so give it a try by selecting
    the number of words you would like in your password, the number of symbols,
    and the number of numbers.
    </p>
    <label><?php echo $pWord ?></label>
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
      <br>
      <input type="submit" value="Submit">
    </form>
  </div>
