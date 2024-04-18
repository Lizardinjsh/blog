<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Create a Post G!</h1>

<form method="POST">
    <label>Title:
        <input name="NAME"/>
    </label>
    <label>Category ID:
  
        <input name="category_id"/>
    </label>
    <button>Save</button>
</form>

<?php require "views/components/footer.php" ?>