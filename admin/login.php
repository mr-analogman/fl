<?php

$password = $_POST["pass"];
$adminPass = "bankrot";

if ($password == $adminPass) {
  setcookie("AdminLogged", 1);
  header("Location: form-admin.php");
} else {
  setcookie("AdminLogged", 0);
  header("Location: form-login.php");
}
?>
