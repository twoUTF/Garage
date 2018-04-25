<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta name="author" content="Sem Markus">
    <meta charset="UTF-8">
    <title>gar-Delete-auto2.php</title>
</head>
<body>
<div class="Delete2">
    <h1>garage delete auto 2</h1>
    <p>Searching for a "klantid" from the table "auto" out of the database "garage" so it can be deleted.</p>

    <?php
    $klantid = $_POST["klantidvak"];

    require_once "gar-connect.php";

    $klanten = $conn->prepare("select klantid, autokenteken, automerk, autotype, autokmstand 
                                 from auto WHERE klantid = :klantid");
    $klanten->execute(["klantid" => $klantid]);


    echo "<table>";
    foreach ($klanten as $klant) {
        echo "<tr>";
        echo "<td>" . ("klantid: "), $klant["klantid"] . "</td>";
        echo "<td>" . ("autokenteken: "), $klant["autokenteken"] . "</td>";
        echo "<td>" . ("automerk: "), $klant["automerk"] . "</td>";
        echo "<td>" . ("autotype: "), $klant["autotype"] . "</td>";
        echo "<td>" . ("autokmstand: "), $klant["autokmstand"] . "</td>";
        echo "</tr>";
    }

    echo "</table><br>";

    echo "<form action ='gar-delete-auto3.php' method='post'>";
    echo "<input type='hidden' name='klantidvak' value= $klantid>";
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Delete this 'auto'. <br/>";
    echo "<div class='Submit'><input type='submit' value='Submit'></div>";
    echo "</form>";

    ?>
</div>
</body>
</html>
