<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>gar-delete-auto.php</title>
</head>
<body>
<form action="gar-delete-auto2.php" method="post">
    <fieldset class="Delete1">
        <h1>Garage Delete Auto</h1>
        <p>This form searches for a "klantid" from the table "auto" out of the database "garage" so it can be
            deleted.</p>
        Which "klantid" would you like to delete?
        <input type="text" name="klantidvak" placeholder="klantid"> <br/>
        <div class="Submit"><input type="submit" value="Submit"></div>
    </fieldset>
</form>
</body>
</html>