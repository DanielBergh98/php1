<!DOCTYPE html>
    <html lang="sv">
        <head>
            <meta charset="utf-8">
            <title>Uppgift 4.14</title>
        </head>


        <body>

           <form method="POST">
            Klicka för att få fram ett slumpmässigt citat <input type="submit" name="skicka" value="klicka">
            <br>




        </form>

        <?php


        $citat=file('Quotes.txt');
        // To check the number of lines

         echo $citat[array_rand($citat)] . '<br>';






        ?>


    </body>
</html>