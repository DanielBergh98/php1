<!DOCTYPE html>
    <html lang="sv">
    
    <head>
        <meta charset="UTF-8">
        <title>Kryptera</title>
    </head>

    <body>
        <b>Ditt kryppterade meddelande:</b>
        <br><br>
<?php

    $toEncrypt = $_POST['toEncrypt'];
    $key = array(
    "A" => "B", "B" => "C","C" => "D", "D" => "E","E" => "F","F" => "G",
    "G" => "H", "H" => "I", "I" => "J", "J" => "K","K" => "L",
    "L" => "M","M" => "N", "N" => "O", "O" => "P", 
    "P" => "Q","Q" => "R", "R" => "S","S" => "T","T" => "U", 
    "U" => "V", "V" => "W", "W" => "X", "X" => "Y",
    "Y" => "Z", "Z" => "A", " " => " "
    );

    $length=strlen($toEncrypt);
    $newstr='';
    $toEncrypt= mb_strtoupper($toEncrypt);
        for ($i = 0; $i < $length; $i++) 
    {
        if (in_array($toEncrypt[$i], $key)){
    $newstr .= $key[$toEncrypt[$i]];
    } else {
        $newstr .= $toEncrypt[$i];
    }
    }

    echo $newstr;

?>
        
</body>