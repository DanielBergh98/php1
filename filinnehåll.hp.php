<?php

    //filnamn
    $file=__FILE__;

    //Hämtar allt innehåll i  ($file)
    $fileContent=file_get_contents($file);

    //Gör om "farliga" tecken
    $safe=htmlentities($fileContent);
    //skriv ut med bevarande av "white space"
    echo "<pre>$safe</pre>";
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>filinnehall.php</title>
    </head>
    <body>

    </body>




    </html>