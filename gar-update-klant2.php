<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <title>gar-Update2-auto.php</title>
</head>
<body>
<div class="Update2">
    <h1>garage update klant 2</h1>
    <p>
        This form is used to change data of the table "klant" in the database "garage".
    </p>

    <?php
    $klantid = $_POST["klantidvak"];

    require_once "gar-connect.php";

    $sql = $conn->prepare("SELECT klantnaam,klantadres,klantpostcode,klantplaats,klantid
from klant WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);
    $klant = $sql->fetch(PDO::FETCH_ASSOC);


    ?>
    <form action="gar-update-klant3.php" method="post" class="Form">
        <div class="Input">
            <label for="id"> <?php echo("klantid: ")?> </label>
            <label for="id"> <?php echo $klant['klantid']; ?> </label>
            <input type="hidden" name="klantidvak" value="<?php echo $klant["klantid"]; ?>" id="klantid">
        </div>
        <div class="Input">
            <label for="klantnaam">klantnaam:</label>
            <input type="text" name="klantnaamvak" value="<?php echo $klant["klantnaam"]; ?>" id="klantnaam">
        </div>
        <div class="Input">
            <label for="klantadres">klantadres:</label>
            <input type="text" name="klantadresvak" value="<?php echo $klant['klantadres']; ?>" id="klantadres">
        </div>
        <div class="Input">
            <label for="klantpostcode">klantpostcode:</label>
            <input type="text" name="klantpostcodevak" value="<?php echo $klant['klantpostcode']; ?>" id="klantpostcode">
        </div>
        <div class="Input">
            <label for="klantplaats">klantplaats:</label>
            <input type="text" name="klantplaatsvak" value="<?php echo $klant['klantplaats']; ?>" id="klantplaats">
        </div>
            <div class="Submit"><input type="submit" value="Submit"></div>
    </form>
</div>
</body>
</html>