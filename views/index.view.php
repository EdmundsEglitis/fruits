    <h1>FRUITS</h1>
    <ul>

        <form>
            <input name='calories' value='<?= ($_GET["calories"] ?? "") ?>'/>
            <button>Filter by calories</button>
        </form>

        <?php foreach ($fruits as $fruit) { ?>
            <li> <?= "one "?> <a href="/show?id= <?=$fruit["id"]?>"> <?= htmlspecialchars($fruit["name"])?> </a> <?= " has " , htmlspecialchars($fruit["calories"]) , " calories"?>
            <form class="delete-form" method="POST" action="/delete"><button name="id" value=" <?= $fruit["id"] ?> ">Delete</button></form>
        </li>

        <?php } ?>
        </ul>
        
<h2><a href="/create">ADD FRUITS</a></h2>
</body>
</html>