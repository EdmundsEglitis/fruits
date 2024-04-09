<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1><?= $fruit["name"] ?></h1>
    <h3>calories:<?= htmlspecialchars($fruit["calories"]) ?></h3>
<a href="/update?id=<?= $fruit["id"] ?>">Edit</a>

</body>
</html>