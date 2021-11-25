<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>Kryptering och Dekryptering</title>
    </head>
        <body>
        <h3> Ange enligt latinska alfabetet </h3>
        
    <div id="encrypt">
        <form method="post" action="kryptera.php">
        <textarea rows="4" cols="50" name="toEncrypt">Skriv den text som skall krypteras</textarea>
    <br>
        <input type="submit" name="encrypt" value="Kryptera">
        </form>
    </div>

    <div id="decrypt">
    <br>
        <form method="post" action="dekryptera.php">
        <textarea rows="4" cols="50" name="toDecrypt">Skriv den text som skall dekrypteras</textarea>
    <br>
        <input type="submit" name="decrypt" value="Dekryptera">
        </form>
    </div>

</body>

</html>