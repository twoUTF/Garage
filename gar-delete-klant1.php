<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>gar-delete-klant.php</title>
</head>
<body>
<form action="gar-delete-klant2.php" method="post">
    <fieldset class="Delete1">
        <h1>Garage Delete Klant</h1>
        <p>This form searches for a "klant" from the table "klant" out of the database "garage" so it can be
            deleted.</p>
        Which "klantid" would you like to delete??
        <input type="text" name="klantidvak" placeholder="Klantid"> <br/>
        <div class="Submit"><input type="submit" value="Submit"></div>
    </fieldset>
</form>
</body>
</html>