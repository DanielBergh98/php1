<!DOCTYPE html>
    <html lang="sv">
    
    <head>
        <meta charset="UTF-8">
        <title>Dekryptera</title>
    </head>

    <body>
        <b>Ditt hemliga meddelande är:</b>
        <br><br>
<?php

    $toDecrypt = $_POST['toDecrypt'];
    $key = array(
    "B" => "A", "C" => "B","D" => "C", "E" => "D","F" => "E","G" => "F",
    "H" => "G", "I" => "H", "J" => "I", "K" => "J","L" => "K",
    "M" => "L","N" => "M", "O" => "N", "P" => "O", 
    "Q" => "P","R" => "Q", "S" => "R","T" => "S","U" => "T", 
    "V" => "U", "W" => "V", "X" => "W", "Y" => "X",
    "Z" => "Y", "A" => "Z", " " => " "
    );

    $length=strlen($toDecrypt);
    $newstr='';
    $toDecrypt= mb_strtoupper($toDecrypt);
        for ($i = 0; $i < $length; $i++) 
    {
        if (in_array($toDecrypt[$i], $key)) {
        $newstr .= $key[$toDecrypt[$i]];
        } else {
            $newstr .= $toDecrypt[$i];
        }
    }

    echo $newstr;

?>
        
</body>