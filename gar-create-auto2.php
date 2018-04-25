<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta name="author" content="Sem Markus">
    <meta charset="UTF-8">
    <title>gar-Create-auto2.php</title>
</head>
<body>
<div class="Create2">
<h1>Garage Create Auto 2</h1>
<p>Adding a "auto" to the database "garage".</p>
<br>
<?php
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
//$klantid           = NULL; //komt niet uit het formulier (autoincrement)

require_once "gar-connect.php";

$sql = $conn->prepare("Insert Into auto (autokenteken, automerk, autotype, autokmstand) VALUES (:autokenteken, :automerk, :autotype, :autokmstand)");
$sql->bindParam(":autokenteken", $autokenteken);
$sql->bindParam(":automerk", $automerk);
$sql->bindParam(":autotype", $autotype);
$sql->bindParam(":autokmstand", $autokmstand);
$sql->execute();

echo "The 'auto' has been added.<br/> <br>";
echo "<a href='gar-menu.php'>Back to menu.</a>";
?>
</div>
</body>
</html>



