<?php
    $oldguess = '';
    $message = false;
    if ( isset($_POST['number']) ) {
        $number = $_POST['number'] + 0;
    } else  {
        $number = rand(1, 100);
    }
    if ( isset($_POST['guess']) ) {
        $oldguess = $_POST['guess'] + 0;
        if ( $oldguess == $number ) {
            $message = "Great job!";
        } else if ( $oldguess < $number ) {
            $message = "Too low.";
        } else  {
            $message = "Too high.";
        }
    }
?>

<html>
  <head>
    <title>A guessing game</title>
  </head>
  <body>
    <h2>Guess a number between 1 and 100</h2>
    <form method="post">
        <p><label for ="guess">Input guess:</label></p>
        <input type="text" name="guess" id="guess" size="30"
            value="<?= htmlentities($oldguess) ?>"/></p>
        <input type="hidden" id="number" name="number"
            value="<?= htmlentities($number) ?>"/></p>
            value="<?= htmlentities($number) ?>"/>
        <input type="submit">
    </form>
    <?php
        if ( $message !== false ) {
            echo("<p><strong>$message</strong></p>\n");
        }
    ?>
  </body>
</html>