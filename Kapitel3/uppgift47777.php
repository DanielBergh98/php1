<?php
    if(isset($_POST['fodelseDag'])) {
        //kontrollerar datumet från datumtabellen
    $fodelseDag=new DateTimeImmutable($_POST['fodelseDag']);
        //ser hur länge sen du är född räknat till dagens datum.
    $antalDagar=$fodelseDag->diff(new DateTime());
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Dagar sedan födelsedag</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <form method="POST">
            <input type="date" name="fodelseDag"><br>
            <input type="submit" name="skicka" value="Räkna!">
        </form>
<?php
        if(isset($_POST['fodelseDag'])) { 
            //%a gör att tiden formateras i dagar.
            echo "det är " . $antalDagar->format("%a") . " dagar sedan du föddes!";
        }
?>
    </body>
</html>