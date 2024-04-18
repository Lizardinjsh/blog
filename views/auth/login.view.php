<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>Login</h1>

<form method="POST">
  <label>
    email:
    <input name="username" type="username"/>
  </label>
  <?php if(isset($errors["username"])) {?>
    <p><?= $errors["username"] ?></p>
  <?php } ?>
  <label>
    Password:
    <input name="password" type="password"/>
  </label>
  <?php if(isset($errors["password"])) {?>
    <p><?= $errors["password"] ?></p>
  <?php } ?>
  <button>Login</button>
</form>
<a href="/register">Register</a>

<?php if(isset($_SESSION["flash"])) { ?>
    <p><? $_SESSION["flash"] ?></p>
<?php } ?>


<?php require "views/components/footer.php" ?>