<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><a href="/">back</a></h1>

<h1>Add fruits </h1>

<form method="POST">
    <label> name:
        <input name="name" />

        <?php if (isset($errors["name"])) { ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
        <?php } ?>

    </label>
    <label> calories:
        <input name="calories"/> 
        <?php if (isset($errors["calories"])) { ?>
                <p class="invalid-data"><?= $errors["calories"] ?> </p>
        <?php } ?>
    </label>
    <button>save</button>
</form>

</body>
</html>