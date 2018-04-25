<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta name="author" content="Sem Markus">
    <meta charset="UTF-8">
    <title>gar-read-auto.php</title>
</head>
<body>
<div class="Read">
    <h1>garage read auto</h1>
    <p>This is all the data from the table "auto" out of the database "garage".</p>

    <?php
    require_once "gar-connect.php";

    $sql = $conn->prepare("select autokenteken, automerk, autotype, autokmstand, klantid from auto");
    $sql->execute();

    echo "<table>";
    foreach ($sql as $rij) {
        echo "<tr>";
        echo "<td>" . ("klantid: "), $rij["klantid"] . "<p>   </p>" . "</td>";
        echo "<td>" . ("autokenteken: "), $rij["autokenteken"] . "<p>   </p>" . "</td>";
        echo "<td>" . ("automerk: "), $rij["automerk"] . "<p>   </p>" . "</td>";
        echo "<td>" . ("autotype: "), $rij["autotype"] . "<p>   </p>" . "</td>";
        echo "<td>" . ("autokmstand: "), $rij["autokmstand"] . "<p>   </p>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='gar-menu.php'> Back to menu. </a>";
    ?>
</div>
</body>
</html>