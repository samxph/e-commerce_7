<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muokkaa nimeä</title>
</head>
<body>
    <h1>Anna uusi nimi</h1>
    <form method="post" action="/tuoteryhma/edit">
        <input type="text" name="tuoteryhma" value="<?= $nimi ?>" />
        <input type="hidden" name="id" value="<?= $id ?>" />
        <input type="submit" value="Tallenna" />
    </form>
</body>
</html>