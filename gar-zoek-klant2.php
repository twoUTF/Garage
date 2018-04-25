<!doctype html>
<html lang="eng">
    <head>
        <link rel="stylesheet" href="css/main.css">
        <title>gar-zoek-klant2.php</title>
    </head>
    <body>
    <div class="Search2">
        <h1>garage search on "klantid"</h1>
        <p>Search for data out of the table "klant" from the database "garage" with "klantid".</p>
        <?php
            $klantid = $_POST["klantidvak"];

            require_once "gar-connect.php";

            $searchKlant = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats from klant where klantid = :klantid");
            $searchKlant->execute(["klantid" => $klantid]);

        echo "<table>";
        foreach ($searchKlant as $rij)
        {
            echo "<tr>";
            echo "<td>" . ("klantid: "), $rij["klantid"] . "</td>";
            echo "<td>" . ("klantnaam: "), $rij["klantnaam"] . "</td>";
            echo "<td>" . ("klantadres: "), $rij["klantadres"] . "</td>";
            echo "<td>" . ("klantpostcode: "), $rij["klantpostcode"] . "</td>";
            echo "<td>" . ("klantplaats: "), $rij["klantplaats"] . "</td>";
            echo "</tr>";
        }
        echo "</table><br />";
        echo "<a href='gar-menu.php'> back to menu. </a>";
        ?>
    </div>
    </body>
</html>