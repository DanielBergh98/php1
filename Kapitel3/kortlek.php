<?php
  $Suits = array("Diamond","Heart"," Clover","Spade");
  echo $Suits[$rand_keys[0]] . "\n";
    
        
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Deck of cards</title>
        <meta charset="UTF-8">
    </head>
    
    <body>
        <form method="POST">
            <b>How many cards?</b>
<br>
            <input type="number" name="selectCards" value="How many cards?" max="52" min="1">
            <input type="submit" name="shuffle" value="Pick">
        </form>
<?php
    
?>
    </body>

    </html>