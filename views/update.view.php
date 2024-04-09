<h1>Create a post </h1>


<form method="POST">
    <input name="id" value="<?= $fruit["id"] ?>" type="hidden"/>

<label> Name:
        <input name="name" value="<?= $_POST["name"] ?? $fruit["name"] ?>"/>

        <?php if (isset($errors["name"])) { ?>

            <p class="invalid-data"><?= $errors["name"] ?></p>

        <?php } ?>

</label>

<label>Calories:
    <input name="calories" value="<?= $_POST["calories"] ?? $fruit["calories"] ?>"/>
        <?php if (isset($errors["calories"])) { ?>
    <p class="invalid-data"><?= $errors["calories"] ?></p>
        <?php } ?>
</label>
<button>Save</button>


</form>