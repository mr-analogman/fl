<?php

if ((isset($_COOKIE["AdminLogged"])) && ($_COOKIE["AdminLogged"] == 1)) {
  header("Location: form-admin.php");
} else {

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="..\source\favicon\favicon_bankrot.png" type="image/png">
    <link rel="stylesheet" href="admin-style.css">
    <title>Банкротство физических лиц в Волгограде</title>
  </head>
  <body>
    <form method="post" action="login.php" class="loginForm">
      <input class="passTextField" type="password" name="pass" placeholder="Пароль">
      <button class="blueButtons" type="submit" name="loginButton">Войти</button>
    </form>
  </body>
</html>

<?php
}
?>
