<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <title>gar-Update2-auto.php</title>
</head>
<body>
<div class="Update2">
    <h1>garage update auto 2</h1>
    <p>
        This form is used to change data of the table "auto" in the database "garage".
    </p>

    <?php
    $klantid = $_POST["klantidvak"];

    require_once "gar-connect.php";

    $sql = $conn->prepare("SELECT autokenteken,automerk,autotype,autokmstand,klantid
from auto WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);
    $auto = $sql->fetch(PDO::FETCH_ASSOC);


    ?>
    <form action="gar-update-auto3.php" method="post" class="Form">
        <div class="Input">
            <label for="id"> <?php echo("klantid: ") ?> </label>
            <label for="id"> <?php echo $auto['klantid']; ?> </label>
            <input type="hidden" name="klantidvak" value="<?php echo $auto["klantid"]; ?>" id="klantid">
        </div>
        <div class="Input">
            <label for="kenteken">Autokenteken:</label>
            <input type="text" name="autokentekenvak" value="<?php echo $auto["autokenteken"]; ?>" id="kenteken">
        </div>
        <div class="Input">
            <label for="merk">Automerk:</label>
            <input type="text" name="automerkvak" value="<?php echo $auto['automerk']; ?>" id="merk">
        </div>
        <div class="Input">
            <label for="type">Autotype:</label>
            <input type="text" name="autotypevak" value="<?php echo $auto['autotype']; ?>" id="type">
        </div>
        <div class="Input">
            <label for="kmstand">Autokmstand:</label>
            <input type="text" name="autokmstandvak" value="<?php echo $auto['autokmstand']; ?>" id="kmstand">
        </div>
        <div class="Submit"><input type="submit" value="Submit"></div>
    </form>
</div>
</body>
</html>