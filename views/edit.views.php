<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Create a Post G!</h1>

<form method="POST">
    <label>Title:
        <input name="title" value="<?= $_POST["title"] ?? "" ?>" />
    </label>
    <label>Category ID:
    <select>
        <option value="1" <?= $post["category_id"] == 1 ? "selected" : "" ?>>sport</option>
        <option value="2" <?= $post["category_id"] == 2 ? "selected" : "" ?>>music</option>
        <option value="3" <?= $post["category_id"] == 3 ? "selected" : "" ?>>food</option>
    </select>
        <?php if (isset($errors["category-id"])) { ?>
            <p class="invalid-data"><?= $errors["category-id"] ?></P>
        <?php } ?>
        <input name="category_id"/>
    </label>
    <button>Save</button>
</form>


<ul>
    <li>1 - sport</li>
    <li>2 - music</li>
    <li>3 - food</li>
</ul>
<?php require "views/components/footer.php" ?>