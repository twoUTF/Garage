<!DOCTYPE html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
</head>
<body>
<div class="Update3">
<h1>garage update klant 3</h1>
<p>Changing the data of the table "klant" in the database "garage"</p>
<?php
$klantid                = $_POST["klantidvak"];
$klantnaam              = $_POST["klantnaamvak"];
$klantadres             = $_POST["klantadresvak"];
$klantpostcode          = $_POST["klantpostcodevak"];
$klantplaats            = $_POST["klantplaatsvak"];

require_once "gar-connect.php";

$sql = $conn->prepare
("
update klant set  
klantnaam     = :klantnaam,
klantadres    = :klantadres,
klantpostcode = :klantpostcode,
klantplaats   = :klantplaats
where klantid = :klantid
");

$sql->execute
([
    "klantid"       => $klantid ,
    "klantnaam"     => $klantnaam,
    "klantadres"    => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats"   => $klantplaats
]);


echo "The 'klant' has been updated. <br /> <br>";
echo "<a href='gar-menu.php'> Back to menu. </a>";

?>
</div>
</body>
</html>