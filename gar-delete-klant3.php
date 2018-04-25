<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta name="author" content="Sem Markus">
    <meta charset="UTF-8">
    <title>gar-Delete-klant3.php</title>
</head>
<body>
<div class="Delete3">
<h1>garage Delete klant3</h1>
<p>searching for a "klant" from the table "klant" out of the database "garage" so it can be deleted.</p>

<?php
$klantid        =$_POST["klantidvak"];
$verwijderen    =$_POST["verwijdervak"];

if($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare(" delete from klant
                                      WHERE  klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    echo "The data is deleted.<br/><br>";
}
else
{
    echo "The data is not deleted.<br/><br>";
}

    echo "<a href='gar-menu.php'>Back to menu.</a>";

?>
</div>
</body>
</html>
