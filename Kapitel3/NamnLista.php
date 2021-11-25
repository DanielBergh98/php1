<?php
declare (strict_types=1);

//Tar emot namnen som du anget
$name=filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$hidden=filter_input(INPUT_POST, "hidden", FILTER_SANITIZE_STRING);


if($hidden =='') {
//skappar en sammanfogad sträng av de värden som angets i formuläret
$hidden=$name . "";
}
else {
    $hidden=$hidden . "|" . $name;
}

//skapar en array
$nameArray=explode("|", $hidden);

//sortera arrayen
sort($nameArray, SORT_LOCALE_STRING);
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Vet ej</title>
            <meta charset="UTF-8">
        </head>
        <body>
            <h1>Sort names</h1>
            <form method="POST">
                <b>Name</b>
<br>
                <input type="text" name="name">
                <input type="submit" name="submit" value="Add">
<br><br>
                <b>Sorted names</b>
<br>
                <input type="hidden" name="hidden" size="100" VALUE="<?= $hidden?>">
            </form>

<?php 
            //Skriv ut Array på egen rad.
            foreach ($nameArray as $n){
                echo "$n<br>";
            }
?>
        </body>

    </html>