<!doctype html>
<html lang="eng">
    <head>
        <link rel="stylesheet" href="css/main.css">
        <title>gar-read-klant.php</title>
    </head>
    <body>
    <div class="Read">
        <h1>garage read klant</h1>
        <p>This is all data of the table "klant" from the database "garage".</p>
        <?php
        require_once "gar-connect.php";

        $readKlant = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats from klant");

        $readKlant->execute();

        echo "<table>";
            foreach ($readKlant as $rij)
            {
                echo "<tr>";
                echo "<td>" . ("klantid: "), $rij["klantid"] . "<p>    </p>" . "</td>";
                echo "<td>" . ("klantnaam: "), $rij["klantnaam"] . "<p>    </p>" . "</td>";
                echo "<td>" . ("klantadres: "), $rij["klantadres"] . "<p>    </p>" . "</td>";
                echo "<td>" . ("klantpostcode: "), $rij["klantpostcode"] . "<p>    </p>" . "</td>";
                echo "<td>" . ("klantplaats: "), $rij["klantplaats"] . "<p>    </p>" . "</td>";
                echo "</tr>";
            }
        echo "</table><br>";
        echo "<a href='gar-menu.php'> back to the menu </a>";
        ?>
    </div>
    </body>
</html>