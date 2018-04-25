<!DOCTYPE html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>
</head>
<body>
<div class="Update3">
<h1>garage update klant 3</h1>
<p>Changing the data of the table "auto" in the database "garage".</p>
<?php
$klantid                = $_POST["klantidvak"];
$autokenteken           = $_POST["autokentekenvak"];
$automerk               = $_POST["automerkvak"];
$autotype               = $_POST["autotypevak"];
$autokmstand            = $_POST["autokmstandvak"];

require_once "gar-connect.php";

$sql = $conn->prepare
("
update auto set  
autokenteken  = :autokenteken,
automerk      = :automerk,
autotype      = :autotype,
autokmstand   = :autokmstand
where klantid = :klantid
");

$sql->execute
([
    "klantid"       => $klantid ,
    "autokenteken"  => $autokenteken,
    "automerk"      => $automerk,
    "autotype"      => $autotype,
    "autokmstand"   => $autokmstand
]);


echo "The 'auto' has been updated. <br /> <br>";
echo "<a href='gar-menu.php'> Back to menu. </a>";

?>
</div>
</body>
</html>