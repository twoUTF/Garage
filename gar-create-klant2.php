<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>gar-create-klant2.php</title>
</head>
<body>
<div class="Create2">
    <h1>Garage create klant2</h1>
    <p>Add a "klant" to the table in the database "Garage"</p>
    <br>
    <?php
    $Klant_ID = NULL;
    $KlantNaam = $_POST["klantnaamvak"];
    $KlantAdres = $_POST["klantadresvak"];
    $KlantPostcode = $_POST["klantpostcodevak"];
    $KlantPlaats = $_POST["klantplaatsvak"];

    require_once "gar-connect.php";

    $insertKlant = $conn->prepare("INSERT INTO klant (klantnaam, klantadres, klantpostcode, klantplaats) VALUES (:klantnaam, :klantadres, :klantpostcode, :klantplaats)");
    $insertKlant->bindParam(":klantnaam", $KlantNaam);
    $insertKlant->bindParam(":klantadres", $KlantAdres);
    $insertKlant->bindParam(":klantpostcode", $KlantPostcode);
    $insertKlant->bindParam(":klantplaats", $KlantPlaats);
    $insertKlant->execute();

    echo "The 'klant' has been added. <br> <br>";
    echo "<a href='gar-menu.php'>Back to menu.</a>";
    ?>
</div>
</body>
</html>