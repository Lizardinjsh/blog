<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Create a Post G!</h1>

<form method="POST">
    <label>Title:
        <input name="title"/>
    </label>
    <label>Category ID:
    <select>
        <option value="1">sport</option>
        <option value="2">music</option>
        <option value="3">food</option>
    </select>
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