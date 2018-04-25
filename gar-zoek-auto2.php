<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta name="author" content="Sem Markus">
    <meta charset="UTF-8">
    <title>gar-zoekt-auto2.php</title>
</head>
<body>
<div class="Search2">
<h1>garage zoek auto 2</h1>
<p>Searching for Data out of the table "auto" from the database "garage".</p>

<?php
$autokenteken = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("select autokenteken, automerk, autotype, autokmstand, klantid
                                 from auto WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

echo "<table>";
foreach($sql as $rij)
{
    echo "<tr>";
    echo "<td>". ("autokenteken: "), $rij["autokenteken"]."</td>";
    echo "<td>". ("automerk: "), $rij["automerk"]."</td>";
    echo "<td>". ("autotype: "), $rij["autotype"]."</td>";
    echo "<td>". ("autokmstand: "), $rij["autokmstand"]."</td>";
    echo "<td>". ("klantid: "), $rij["klantid"]."</td>";
    echo "</tr>";
}
echo "</table><br>";
echo "<a href='gar-menu.php'> Back to menu. </a>";
?>
</div>
</body>
</html>
