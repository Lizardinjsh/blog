<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>Register</h1>

<form method="POST">
  <label>
    email:
    <input name="username" type="username"/>
  </label>
  <?php if(isset($errors["username"])) {?>
    <p><?= $errors["username"] ?></p>
  <?php } ?>
  <label>
    Password <span class="explanation">(jābūt 8 rakstzīmēm, 1 lielam, 1 mazam un 1 īpaša simbolam un 1 ciparam, good luck)</span>:
    <input name="password" type="password"/>
  </label>
  <?php if(isset($errors["password"])) {?>
    <p><?= $errors["password"] ?></p>
  <?php } ?>
  <button>Register</button>
</form>

<?php require "views/components/footer.php" ?>