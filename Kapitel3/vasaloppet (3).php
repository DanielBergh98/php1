<?php
//Anger nuvarande år när man navigerar till sidan.
$year=date("Y");


if(isset($_GET['year'])) {
    //kontrollerar att du anget ett heltal.
    $year=filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
}
 
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>vasaloppet 5 years forward</title>
            <meta charset="utf-8">
        </head>


    <body>

        <form method="GET">

        <b>Input Year</b>
    <br>
        <input type="number" value="<?= $year; ?>" name="year" max="3000" min="1922">
        <input type="submit" name="submit" value="Get Dates">

        </form>
        <p>Upcoming</p>
        <?php
            for ($i=0;$i<5;$i++) {
                echo $year+$i . " " . vasaloppet($year+$i) . "<br>";
        }

            ?>
    </body>
</html>

<?php
    //Funkion för att beräkna datum för vasan
    function vasaloppet(int $ar) :string {
    $date=strtotime("First Sunday of March $ar");
    // Retunera det funna datumet
    return date("d.m", $date);
}

?>