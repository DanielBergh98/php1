<?php
if(isset($_POST['birthday'])) {
    //Sätter din födelsedag som du valt i formuläret som datum för din födelsedag
    $birthday=new DateTimeImmutable($_POST['birthday']);
    //Tar dagarna som du angivit som du vill räkna frammåt i formuläret
    $days=$_POST['days'];
    //Ser hur länge sedan det årtal som angivits är från idag.
    $numDays=$birthday->diff(new DateTime());
    //räknar frammåt med de dagarna du angivit.
    $newDay=$birthday->add(date_interval_create_from_date_string("$days days"));
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>From birthday to "date" in years</title>
        <meta charset="UTF-8">
    </head>
    
    <body>
        <form method="POST">
            Year <input type="date" name="birthday">
<br>        Days <input type="number" name="days" value="7000">
<br>        <input type="submit" name="submit" value="Calculate!">
        </form>

<?php
        if(isset($_POST['birthday'])) {
            //Skriver ut tiden i dagar, %a format för att omvandla till dagar
            echo "it's " . $numDays->format("%a") . " days from your birthday" . "<br>";
            //Skriver ut datumet för de dagarna frammåt som du angivit
            echo "$days days after your birthday is: " . $newDay->format("Y.d.m");
        }
?>
    </body>
</html>