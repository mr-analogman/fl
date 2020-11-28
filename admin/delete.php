<?php
include('dbconnect.php');

if (isset($_POST['deleteImgTxtButton']) && isset($_POST['imgTxtId'])) {
  $id = $_POST['imgTxtId'];
  $sqlRequest = "DELETE FROM `bankrotFirstSectionImages` WHERE `id`='$id'";
  $mysqli->query($sqlRequest) or die("pizdeeeeeec");
}

header("Location:form-admin.php");

 ?>
