<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta name="author" content="Sem Markus">
    <meta charset="UTF-8">
    <title>gar-Delete-klant2.php</title>
</head>
<body>
<div class="Delete2">
<h1>garage delete klant 2</h1>
<p>searching for a "klant" from the table "klant" out of the database "garage" so it can be deleted.</p>

<?php
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats 
                                 from klant WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);


echo "<table>";
foreach ($klanten as $klant)

    {
        echo "<tr>";
        echo "<td>" . ("klantid: "), $klant["klantid"] . "</td>";
        echo "<td>" . ("klantnaam: "), $klant["klantnaam"] . "</td>";
        echo "<td>" . ("klantadres: "), $klant["klantadres"] . "</td>";
        echo "<td>" . ("klantpostcode: "), $klant["klantpostcode"] . "</td>";
        echo "<td>" . ("klantplaats: "), $klant["klantplaats"] . "</td>";
        echo "</tr>";
    }

    echo "</table><br>";

    echo "<form action ='gar-delete-klant3.php' method='post'>";
    echo "<input type='hidden' name='klantidvak' value= $klantid>";
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Delete this 'klant'. <br/>";
    echo "<div class='Submit'><input type='submit' value='Submit'></div>";
    echo"</form>";

    ?>
</div>
</body>
</html>
